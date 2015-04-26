<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Admin extends Base {

    public $mSiteUrl;
    public $mContentsCell;
    public $mAdminUrl;
    public $mValue;
    public $mHeaderCaption;

    public function __construct($filename, $family) {
        parent::__construct($filename, $family, 1);
        $this->mSiteUrl = Link::Build('');
        $this->mAdminUrl = Link::ToAdmin();
        $this->mContentsCell = $this->main_modules[0] . TPL;
        if (isset($_GET['nav']) && in_array($_GET['nav'], $this->main_modules)) {
            $this->mContentsCell = $_GET['nav'] . TPL;
            // Check submodules of nav
            $this->values = Root::getConfig()->{$_GET['nav']}['values'];
            if (isset($_GET['val']))
            {
                if((is_array($this->values) && array_key_exists($_GET['val'], $this->values)) || (!is_array($this->values) && $_GET['val'] === $this->values))
                {
                    $this->mValue = $_GET['val'];
                    if(is_array($this->values))
                        // get caption of main module corresponse sub module 
                        // <module_name>['caption'][<get key code of value --> value data --> caption>] 
                        $this->mHeaderCaption = Root::getConfig()->{$_GET['nav']}['captions'][$this->values[$_GET['val']]];
                }
            }
        }
        
        
    }

}
