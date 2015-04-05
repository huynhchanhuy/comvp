<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Admin extends Base{
    public $mPageTitle;
    public $mSiteUrl;
    public $mAdminUrl;
    public function __construct($filename, $family) {
        parent::__construct($filename, $family, 1);
        $this->mPageTitle = 'Administrator';
        $this->mSiteUrl = Link::Build('');
        $this->mAdminUrl = Link::ToAdmin();
    }
}