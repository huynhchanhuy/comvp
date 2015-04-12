<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//Reference Smarty library
require_once SMARTY_DIR . 'Smarty.class.php';

/**
 * Description of application
 *
 * @author Huy
 */
/* Class that extends Smarty, used to process and display Smarty files */
class Application extends Smarty {

    //Class constructor
    public function __construct() {
        //Call Smarty's constructor
        parent::Smarty();

        //Change the default template directories
        $this->template_dir = TEMPLATE_DIR;
        $this->compile_dir = COMPILE_DIR;
        $this->config_dir = CONFIG_DIR;
        $this->plugins_dir[0] = SMARTY_DIR . 'plugins';
        $this->plugins_dir[1] = PRESENTATION_DIR . 'smarty_plugins';
    }

    public function createWebsite() {
        $this->initRegistry();
        $this->initUtils(Root::getConfig()->utils);
        
        // Load Business Tier
        $this->loadBusinessClasses(Root::getConfig()->businessClasses);
        
        if (isset($_GET['admin']))
            $this->createAdminPage();
        elseif (isset($_GET['page404']))
            $this->create404Page();
        else
            $this->createFrontPage();
        $this->execAdditionalUtils();
    }

    public function createAdminPage() {
        $this->display('admin.tpl');
    }

    public function createFrontPage() {
        $this->display('main.tpl');
    }

    public function create404Page() {
        $this->display('page404.tpl');
    }

    public function execAdditionalUtils() {
        Root::getUtils()->timePassThrought->TimeMeasured(true);
    }

    private function initUtils($utils) {
        Root::setUtils($utils);
    }

    private function initRegistry($registryFile = null) {
        if (isset($registryFile)) {
            $config = require $registryFile;
        } else {
            $config = require REGISTRY;
        }
        Root::setConfig($config);
    }

    private function loadBusinessClasses($businessClasses) {
        foreach ($businessClasses as $class) {
            require_once BUSINESS_DIR . $class.'.php';
        }
    }

}

?>