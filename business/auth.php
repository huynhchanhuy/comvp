<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Authentication {

    private function __construct() {
        
    }

    public static function IsValid($us, $password, $rememberme) {
        $customer = self::GetLoginInfo($us);
        if (empty($customer['username']))
            return 2;
        $us = $customer['username'];
        $level = $customer['level'];
        $hashed_password = $customer['password'];
        if (Hasher::Hash($password) != $hashed_password)
            return 1;
        else {
            $_SESSION['us'] = $us;
            $_SESSION['lv'] = $level;
            if ($rememberme === true)
                self::RememberMe($customer['id']);
            return 0;
        }
    }

    public static function Logout() {
        unset($_SESSION['us']);
        unset($_SESSION['lv']);
        $split = explode(':', $_COOKIE['auth']);
        if (count($split) !== 2) {
            # Badly formed auth cookie!
            return false;
        }
        list($selector, $token) = $split;
        $authInfo = self::GetAuthInfo(base64_decode($selector));
        if ($authInfo) {
            if (hash_equals($authInfo['token'], hash('sha256', base64_decode($token)))) {
                self::RemoveAuthInfo($authInfo['id']);
            }
        }
        // set expired at current time
        setcookie('auth', '', time(), '/');
    }

    public static function AutoLogin() {
        // Get authentication code
        $statuscode = self::IsAuthenticated();
        // Have stored session
        if ($statuscode === 1)
            return true;
        // Have stored authentication cookie
        else if ($statuscode === 2) {
            $split = explode(':', $_COOKIE['auth']);
            if (count($split) !== 2) {
                # Badly formed auth cookie!
                return false;
            }
            // Get selector and token value
            list($selector, $token) = $split;
            $authInfo = self::GetAuthInfo(base64_decode($selector));
            // If it has row
            if ($authInfo) {
                if (hash_equals($authInfo['token'], hash('sha256', base64_decode($token)))) {
                    // Privilege escalation - get a new random session ID
                    session_regenerate_id(true);

                    // Let's remove our old token.
                    self::RemoveAuthInfo($authInfo['id']);

                    // Let's set the session variable appropriately...
                    $_SESSION['us'] = $authInfo['username'];
                    $_SESSION['lv'] = $authInfo['level'];

                    // Generate a new token for future convenience...
                    self::RememberMe($authInfo['userid'], true);

                    // We return true here.
                    return true;
                }
            }
        } else
        # Need Authentication
            return false;
    }

    private static function RememberMe($userid) {
        $token = Hasher::RandomBytes(24, true, false, "", $rounds, $drop);
        do {
            $selector = Hasher::RandomBytes(9, true, false, "", $rounds, $drop);
        } while (self::GetTotalMatchedSelector($selector) > 0);
        #$expires = new DateTime('now');
        #$expires->add(new DateInterval('PT336H'));
        $time = time() + 1209600;
        $expires = gmdate("Y-m-d\TH:i:s\Z", $time);
        self::InsertAuthInfo($selector, hash('sha256', $token), $userid, $expires);
        setcookie('auth', base64_encode($selector) . ':' . base64_encode($token), $time, '/');
    }

    private static function IsAuthenticated() {
        if (isset($_SESSION['us']))
            return 1;
        else if (!empty($_COOKIE['auth']))
            return 2;
        else
            return 0;
    }

    // Return account info: email,id,level,password,username
    private static function GetLoginInfo($us) {
        // Build the SQL query
        $sql = 'CALL account_get_login_info_by_username(:us)';

        // Build the parameters array
        $params = array(':us' => $us);

        // Execute the query and return the results
        return DatabaseHandler::GetRow($sql, $params);
    }

    // Returns number of matched selector value
    private static function GetTotalMatchedSelector($selector) {
        // Build the SQL query
        $sql = 'CALL authtokens_get_total_matched_selector(:selector)';

        // Build the parameters array
        $params = array(':selector' => $selector);

        // Execute the query and return the results
        return DatabaseHandler::GetOne($sql, $params);
    }

    // Returns authentication info: id,token,userid,username,level
    private static function GetAuthInfo($selector) {
        // Build the SQL query
        $sql = 'CALL authtokens_get_auth_info(:selector)';

        // Build the parameters array
        $params = array(':selector' => $selector);

        // Execute the query and return the results
        return DatabaseHandler::GetRow($sql, $params);
    }

    // Remove the authentication field with auth id
    private static function RemoveAuthInfo($id) {
        // Build the SQL query
        $sql = 'CALL authtokens_remove_auth_info(:id)';

        // Build the parameters array
        $params = array(':id' => $id);

        // Execute the query and return the results
        return DatabaseHandler::Execute($sql, $params);
    }

    // Insert new authentication field
    private static function InsertAuthInfo($selector, $token, $userid, $expires) {
        // Build the SQL query
        $sql = 'CALL authtokens_insert_auth_info(:selector,:token,:userid,:expires)';

        // Build the parameters array
        $params = array(':selector' => $selector,
            ':token' => $token,
            ':userid' => $userid,
            ':expires' => $expires);

        // Execute the query and return the results
        return DatabaseHandler::Execute($sql, $params);
    }

}
