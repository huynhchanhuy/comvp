<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of link
 *
 * @author Huy
 */
class Link {

    private function __construct() {
        
    }

    public static function Build($link) {
        $base = 'http://' . getenv('SERVER_NAME');

        // If HTTP_SERVER_PORT is defined and different than default
        if (defined('HTTP_SERVER_PORT') && HTTP_SERVER_PORT != '80') {
            // Append server port
            $base .= ':' . HTTP_SERVER_PORT;
        }

        $link = $base . VIRTUAL_LOCATION . $link;

        // Escape HTML
        return htmlspecialchars($link, ENT_QUOTES);
    }

    // Prepares a string to be included in an URL
    public static function CleanUrlText($string) {
        // Remove all characters that aren't a-z, 0-9, dash, underscore or space
        $not_acceptable_characters_regex = '#[^-a-zA-Z0-9_ ]#';
        $string = preg_replace($not_acceptable_characters_regex, '', $string);

        // Remove all leading and trailing spaces
        $string = trim($string);

        // Change all dashes, underscores and spaces to dashes
        $string = preg_replace('#[-_ ]+#', '-', $string);

        // Return the modified string
        return strtolower($string);
    }
    
    public static function ToAdmin() {
        return self::Build('index.php?admin');
    }
    
    public static function ToNavigation($nav) {
        return self::Build('index.php?nav=' . $nav);
    }

    public static function To404() {
        return self::Build('index.php?page404');
    }

    // Create link to login page
    public static function ToLogin() {
        return self::Build('index.php?nav=login&type=login');
    }
    
    // Create link to logout page
    public static function ToLogout() {
        return self::Build('index.php?logout');
    }

    public static function ToLoginResult($errcode = 0) {
        if ($errcode === 0) {
            $link = '';
        } else {
            $link = 'index.php?nav=login&result=' . $errcode;
        }
        return self::Build($link);
    }

    // Redirects to proper URL if not already there
//    public static function CheckRequest() {
//        $proper_url = '';
//        // Obtain proper URL for category pages
//        if (isset($_GET['DepartmentId']) && isset($_GET['CategoryId'])) {
//            if (isset($_GET['Page']))
//                $proper_url = self::ToCategory($_GET['DepartmentId'], $_GET['CategoryId'], $_GET['Page']);
//            else
//                $proper_url = self::ToCategory($_GET['DepartmentId'], $_GET['CategoryId']);
//        }
//        // Obtain proper URL for department pages
//        elseif (isset ($_GET['DepartmentId'])) {
//            if (isset($_GET['Page']))
//                $proper_url = self::ToDepartment($_GET['DepartmentId'], $_GET['Page']);
//            else
//                $proper_url = self::ToDepartment($_GET['DepartmentId']);
//        }
//        // Obtain proper URL for product pages
//        elseif (isset ($_GET['ProductId'])) {
//            $proper_url = self::ToProduct($_GET['ProductId']);
//        }
//        // Obtain proper URL for the home page
//        else {
//            if (isset($_GET['Page']))
//                $proper_url = self::ToIndex($_GET['Page']);
//            else
//                $proper_url = self::ToIndex();
//        }
//        
//        /* Remove the virtual location from the requested URL
//          so we can compare paths */
//        $requested_url = self::Build(str_replace(VIRTUAL_LOCATION, '', $_SERVER['REQUEST_URI']));
//        // 301 redirect to the proper URL if necessary
//        if ($requested_url != $proper_url) {
//            // Clean output buffer
//            ob_clean();
//            // Redirect 301 
//            header('HTTP/1.1 301 Moved Permanently');
//            header('Location: ' . $proper_url);
//            // Clear the output buffer and stop execution
//            flush();
//            ob_flush();
//            ob_end_clean();
//            exit();
//        }
//    }
//    public static function ToDepartment($departmentId,$page = 1)
//    {
//        $link = 'index.php?DepartmentId=' . $departmentId;
//        
//        if($page > 1)
//            $link .= '&Page=' . $page;
//        
//        return self::Build($link);
//    }
//    
//    public static function ToCategory($departmentId,$categoryId,$page = 1)
//    {
//        $link = 'index.php?DepartmentId=' . $departmentId.'&CategoryId=' .$categoryId;
//        
//        if($page > 1)
//            $link .= '&Page=' . $page;
//        
//        return self::Build($link);
//    }
//    public static function ToIndex($page = 1)
//    {
//        $link = '';
//        
//        if($page > 1)
//            $link .= 'index.php?Page=' . $page;
//        
//        return self::Build($link);
//    }
//    
//    public static function ToProduct($productId)
//    {
//        return self::Build('index.php?ProductId=' . $productId);
//    }
//    
//    public static function QueryStringToArray($queryString)
//    {
//        $result = array();
//        if ($queryString != '')
//        {
//            //A=a&B=b --> ['A=a','B=b']
//            $elements = explode('&', $queryString);
//            foreach($elements as $key => $value)
//            {
//                $element = explode('=', $value);
//                //A+B+C=a+b+C --> ['A B C','a b c']
//                $result[urldecode($element[0])] = 
//                isset($element[1]) ? urldecode($element[1]) : '';
//            }
//        }
//        return $result;
//    }
}
