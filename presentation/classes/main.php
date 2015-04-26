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
    
    public function __construct($filename,$family) {
        // main
        parent::__construct($filename,$family,1);
        $this->mSiteUrl = Link::Build('');
        if(is_array($this->mPageTitle))
            $this->mPageTitle = $this->mPageTitle[0];
        
        $this->mContentsCell = $this->main_modules[0].TPL;
        // check query string
        if (isset($_GET['nav']) && in_array($_GET['nav'], $this->main_modules)) {
           $this->mContentsCell = $_GET['nav'].TPL;
        }
        else {
            // redirect to 404 page - need to fix url
        }
    }
    
    // Class constructor
    public function init() {
        // when logout
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
