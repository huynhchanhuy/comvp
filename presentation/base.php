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

class Base {
    protected $filename;
    public $mIncludedTemplate;
    #protected $filehistory;
    // Future modified: have filehistory
    // Class extend from base will not have __construct declaration except main.php
   public function __construct($module,$filename) {
       $this->filename = $filename;
       $plugins = PLUGIN;
       if($module === 'main')
       {
           // $main_modules = $this->mConfig['main']['modules'];
           $main_modules = Root::getConfig()->main['modules'];
           foreach($main_modules as $mod_item)
           {
                $this->mIncludedTemplate[$mod_item] = Root::getConfig()->$mod_item;
           }
           $this->mIncludedTemplate['layouts'] = Root::getConfig()->main['layouts'];
       }
       else
       {
            if(in_array($module, Root::getConfig()->main['modules']))
            {
                $this->mIncludedTemplate = Root::getConfig()->$module;
                
            }
       }
       $this->mIncludedTemplate[$plugins] = Root::getConfig()->$plugins;
   }
}
