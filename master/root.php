<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of root
 *
 * @author Huy
 */
class Root{
    private static $_config;
    private static $_utils;
    private function __construct(){
        
    }
    public static function setConfig($config)
    {
        self::$_config = new Config($config);
    }
    public static function getConfig()
    {
        return self::$_config;
    }
    
    public static function setUtils($utils)
    {
        self::$_utils = new Utils($utils);
    }
    public static function getUtils()
    {
        return self::$_utils;
    }
    public static function init(){
        require_once HANDLER_DIR. 'error_handler.php';
        // Load the database handler
        require_once HANDLER_DIR . 'database_handler.php';
        // Set the error handler
        ErrorHandler::SetHandler();
        
        require_once MASTER_DIR.'core.php';
        require_once MASTER_DIR.'base.php';
        
        // Load the application page template
        require_once PRESENTATION_DIR.'application.php';
        // Link Factory
        require_once PRESENTATION_DIR.'link.php'; 
        
    }
}