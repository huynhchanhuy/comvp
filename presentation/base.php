<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of base
 *
 * @author Huy
 */

class Config{
    public function __construct($config)
    {
        foreach ($config as $key => $value) {
            $this->$key=$value;
        }
    }
}

class Utils{
    public function __construct($utils)
    {
        // Looking for the class in *.php file
        foreach ($utils as $obj => $vars) {
            $className = str_replace(' ', '', 
                ucfirst(str_replace('_', ' ',$vars['className'])));
            include_once UTILS_DIR.'/'.$vars['fileName'].'.php';
            $this->$obj = new $className($vars['params']);
        }
    }
}

class Root{
    private static $_config;
    private static $_utils;
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
}

class Base {
    protected $filename;
    public $mIncludedTemplate;
    #protected $filehistory;
    //Future modified: have filehistory
   public function __construct($module,$filename) {
       $this->filename = $filename;
       $plugins = PLUGIN;
       if($module === "main")
       {
           // $main_modules = $this->mConfig['main']['modules'];
           $main_modules = Root::getConfig()->main['modules'];
           foreach($main_modules as $mod_item)
           {
                $this->mIncludedTemplate[$mod_item] = Root::getConfig()->$mod_item;
           }
           $this->mIncludedTemplate["layouts"] = Root::getConfig()->main["layouts"];
       }
       else
       {
            if(in_array($module, Root::getConfig()->main['modules']))
            {
                $this->mIncludedTemplate['this'] = Root::getConfig()->$module;
                
            }
       }
       $this->mIncludedTemplate[$plugins] = Root::getConfig()->$plugins;
   }
}
