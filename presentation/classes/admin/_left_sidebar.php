<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of _left_sidebar
 *
 * @author Huy
 */
class LeftSideBar extends Base {

    //put your code here
    public $mNavigation;
    public $mPage;
    public $mLogoUrl;

    // module = filename of current page
    // family = list all pages included main page with index 0 (admin)
    public function __construct($module, $family) {
        // Get all page belong to admin feature
        parent::__construct($this->getAncestor($family), $family, self::ANCESTOR);

        $this->mNavigation = array(
            'home' => array(
                'url' => Link::ToArticle('intro')),
            'contact' => array(
                'url' => Link::ToNavigation('guide')),
            'menu' => array(
                'url' => Link::ToNavigation('faq')),
        );
    }

}
