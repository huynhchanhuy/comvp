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
        require_once BUSINESS_DIR. 'error_handler.php';
        // Set the error handler
        ErrorHandler::SetHandler();
        // Load the application page template
        require_once PRESENTATION_DIR.'core.php';
        require_once PRESENTATION_DIR.'base.php';
        require_once PRESENTATION_DIR.'application.php';
        // Link Factory
        require_once PRESENTATION_DIR.'link.php'; 
        // Load the database handler
        require_once BUSINESS_DIR . 'database_handler.php';
        // Load Business Tier
        #require_once BUSINESS_DIR . 'catalog.php';
        require_once BUSINESS_DIR . 'hasher.php';
        require_once BUSINESS_DIR . 'auth.php';
    }
}