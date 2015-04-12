<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of contact
 *
 * @author Huy
 */
class ContactUs {
    //put your code here
    private function __construct() {
        ;
    }
    
    public static function insert($name,$phone,$mail,$tittle,$content) {
        // Build the SQL query
        $sql = 'CALL contactus_insert(:name,:phone,:mail,:tittle,:content)';

        // Build the parameters array
        $params = array(':name' => $name,':phone' => $phone,':mail' => $mail,':tittle' => $tittle,':content' => $content,);

        // Execute the query and return the results
        return DatabaseHandler::Execute($sql, $params);
    }
}
