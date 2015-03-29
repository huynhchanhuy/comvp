<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Hasher {

    public static function Hash($password, $withPrefix = true) {
        if ($withPrefix)
            $hashed_password = sha1(HASH_PREFIX . $password);
        else
            $hashed_password = sha1($password);

        return $hashed_password;
    }

    public static function RandomBytes($length = 16, $secure = true, $raw = true, $startEntropy = "", &$rounds = 0, &$drop = 0) {
        static $lastRandom = "";
        $output = b"";
        $length = abs((int) $length);
        $secureValue = "";
        $rounds = 0;
        $drop = 0;
        while (!isset($output{$length - 1})) {
            //some entropy, but works ^^
            $weakEntropy = array(
                is_array($startEntropy) ? implode($startEntropy) : $startEntropy,
                serialize(stat(__FILE__)),
                __DIR__,
                PHP_OS,
                microtime(),
                (string) lcg_value(),
                (string) PHP_MAXPATHLEN,
                PHP_SAPI,
                (string) PHP_INT_MAX . "." . PHP_INT_SIZE,
                serialize($_SERVER),
                serialize(get_defined_constants()),
                get_current_user(),
                serialize(ini_get_all()),
                (string) memory_get_usage() . "." . memory_get_peak_usage(),
                php_uname(),
                phpversion(),
                extension_loaded("gmp") ? gmp_strval(gmp_random(4)) : microtime(),
                zend_version(),
                (string) getmypid(),
                (string) getmyuid(),
                (string) mt_rand(),
                (string) getmyinode(),
                (string) getmygid(),
                (string) rand(),
                function_exists("zend_thread_id") ? ((string) zend_thread_id()) : microtime(),
                var_export(@get_browser(), true),
                function_exists("getrusage") ? @implode(getrusage()) : microtime(),
                function_exists("sys_getloadavg") ? @implode(sys_getloadavg()) : microtime(),
                serialize(get_loaded_extensions()),
                sys_get_temp_dir(),
                (string) disk_free_space("."),
                (string) disk_total_space("."),
                uniqid(microtime(), true),
                file_exists("/proc/cpuinfo") ? file_get_contents("/proc/cpuinfo") : microtime(),
            );

            shuffle($weakEntropy);
            $value = hash("sha512", implode($weakEntropy), true);
            $lastRandom .= $value;
            foreach ($weakEntropy as $k => $c) { //mixing entropy values with XOR and hash randomness extractor
                $value ^= hash("sha256", $c . microtime() . $k, true) . hash("sha256", mt_rand() . microtime() . $k . $c, true);
                $value ^= hash("sha512", ((string) lcg_value()) . $c . microtime() . $k, true);
            }
            unset($weakEntropy);

            if ($secure === true) {
                $strongEntropyValues = array(
                    is_array($startEntropy) ? hash("sha512", $startEntropy[($rounds + $drop) % count($startEntropy)], true) : hash("sha512", $startEntropy, true), //Get a random index of the startEntropy, or just read it
                    file_exists("/dev/urandom") ? fread(fopen("/dev/urandom", "rb"), 64) : str_repeat("\x00", 64),
                    (function_exists("openssl_random_pseudo_bytes") and version_compare(PHP_VERSION, "5.3.4", ">=")) ? openssl_random_pseudo_bytes(64) : str_repeat("\x00", 64),
                    function_exists("mcrypt_create_iv") ? mcrypt_create_iv(64, MCRYPT_DEV_URANDOM) : str_repeat("\x00", 64),
                    $value,
                );
                $strongEntropy = array_pop($strongEntropyValues);
                foreach ($strongEntropyValues as $value) {
                    $strongEntropy = $strongEntropy ^ $value;
                }
                $value = "";
                //Von Neumann randomness extractor, increases entropy
                $bitcnt = 0;
                for ($j = 0; $j < 64; ++$j) {
                    $a = ord($strongEntropy{$j});
                    for ($i = 0; $i < 8; $i += 2) {
                        $b = ($a & (1 << $i)) > 0 ? 1 : 0;
                        if ($b != (($a & (1 << ($i + 1))) > 0 ? 1 : 0)) {
                            $secureValue |= $b << $bitcnt;
                            if ($bitcnt == 7) {
                                $value .= chr($secureValue);
                                $secureValue = 0;
                                $bitcnt = 0;
                            } else {
                                ++$bitcnt;
                            }
                            ++$drop;
                        } else {
                            $drop += 2;
                        }
                    }
                }
            }
            $output .= substr($value, 0, min($length - strlen($output), $length));
            unset($value);
            ++$rounds;
        }
        $lastRandom = hash("sha512", $lastRandom, true);
        return $raw === false ? bin2hex($output) : $output;
    }

}
