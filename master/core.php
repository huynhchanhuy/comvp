<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
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
            if(!(isset($vars['enabled']) && $vars['enabled'] === false))
            {
                $className = str_replace(' ', '', 
                    ucfirst(str_replace('_', ' ',$vars['className'])));
                include_once UTILS_DIR.'/'.$vars['fileName'].'.php';
                $this->$obj = new $className($vars['params']);

                // Looking for the function init
                if(method_exists($this->$obj, 'init'))
                {
                    $this->$obj->init();
                }
            }
        }
    }
    
    public function destroyObjects($var)
    {
        if(is_array($var))
        {
            foreach($var as $elem)
            {
                unset($this->$elem);
            }
        }
        else
        {
            unset($this->$var);
        }
    }
}