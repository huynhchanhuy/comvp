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
        if (isset($_GET['nav']) && in_array($_GET['nav'], $modules)) {
           $this->mPageTitle = Root::getConfig()->{$_GET['nav']}['captions'];
           $this->mContentsCell = $_GET['nav'].TPL;
        }
        else {
            // redirect to 404 page
        }
    }
    
    // Class constructor
    public function init() {
        if (isset($_GET['logout']))
        {
            Authentication::Logout ();
            header('HTTP/1.1 302 Logout Successs');
            header('Location: ' . Link::Build(''));
        }
        Authentication::AutoLogin();
    }

//    // Initialize presentation object
//    public function init() {
//        
//    }

}
