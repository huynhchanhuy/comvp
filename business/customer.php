<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Customer {

    public static function IsAuthenticated() {
        if (!(isset($_SESSION['us'])))
            return 0;
        else
            return 1;
    }

    // Returns customer_id and password for customer with email $email
    public static function GetLoginInfo($us) {
        // Build the SQL query
        $sql = 'CALL customer_get_login_info(:us)';

        // Build the parameters array
        $params = array(':us' => $us);

        // Execute the query and return the results
        return DatabaseHandler::GetRow($sql, $params);
    }

    public static function IsValid($us, $password) {
        $customer = self::GetLoginInfo($us);
        if (empty($customer['username']))
            return 2;

        $customer_id = $customer['username'];
        $level = $customer['level'];
        $hashed_password = $customer['password'];
        if (PasswordHasher::Hash($password) != $hashed_password)
            return 1;
        else {
            $_SESSION['us'] = $customer_id;
            $_SESSION['lv'] = $level;

            return 0;
        }
    }

    public static function Logout() {
        unset($_SESSION['tshirtshop_customer_id']);
    }

    public static function GetCurrentCustomerId() {
        if (self::IsAuthenticated())
            return $_SESSION['tshirtshop_customer_id'];
        else
            return 0;
    }

}
