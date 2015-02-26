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
//       var_dump($module);
       $this->filename = $filename;
       $plugins = PLUGIN;
       $len = sizeof($module);
       if($len === 1 && $module[0] === 'main')
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
           $module_array_path="";
           for($i=1; $i<$len ;$i++)
           {
                $module_array_path = $module_array_path."['$module[$i]]']";
           }
           $module_array_path = $module[0].$module_array_path;
           if(isset(Root::getConfig()->$module_array_path))
           {
               $this->mIncludedTemplate = Root::getConfig()->$module_array_path;
           }
//           if(in_array($module, Root::getConfig()->main['modules']))
//            {
//                $this->mIncludedTemplate = Root::getConfig()->$module;
//
//            }
            
       }
       $this->mIncludedTemplate[$plugins] = Root::getConfig()->$plugins;
   }
}
