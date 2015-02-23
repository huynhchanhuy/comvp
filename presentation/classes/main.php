<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Main extends Base {

    public $mSiteUrl;
    public $mPageTitle;
    public $mContentsCell;
    
    public function __construct($module,$filename) {
        parent::__construct($module,$filename);
        $this->mSiteUrl = Link::Build('');
        // Because main page doesnt have any plugin
        // $this->mIncludedTemplate = $this->mConfig['main'];
        $modules = Root::getConfig()->main['modules'];

        #$this->$mPageTitle = 
        $this->mContentsCell = $modules[0].TPL;
        // check query string
        if (isset($_GET['nav']) && array_key_exists($_GET['nav'], $modules)) {
            foreach ($modules as $module)
            {
                if ($_GET['nav'] === $module) {
                   $this->mPageTitle = Root::getConfig()->$module['captions'][0];
                   $this->mContentsCell = $module.TPL;
                    break;
                }
            }
        }
        else
        {
            // redirect to 404 page
        }
    }
    
    // Class constructor
    public function init() {
        
    }

//    // Initialize presentation object
//    public function init() {
//        
//    }

}
