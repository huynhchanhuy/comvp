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
        if (Authentication::AutoLogin() === false) {
            header('HTTP/1.1 301 Redirect to Login');
            header('Location: ' . htmlspecialchars_decode(Link::ToLogin()));
        }
        parent::__construct($filename, $family, 1);

        $this->mSiteUrl = Link::Build('');
        $this->mAdminUrl = Link::ToAdmin();
        $this->mContentsCell = $this->main_modules[0] . TPL;
        if (isset($_GET['nav']) && in_array($_GET['nav'], $this->main_modules)) {
            $this->mContentsCell = $_GET['nav'] . TPL;
            // Check submodules of nav
            $this->values = Root::getConfig()->{$_GET['nav']}['values'];
            if (isset($_GET['val'])) {
                if ((is_array($this->values) && array_key_exists($_GET['val'], $this->values)) || (!is_array($this->values) && $_GET['val'] === $this->values)) {
                    $this->mValue = $_GET['val'];
                    if (is_array($this->values))
                    // get caption of main module corresponse sub module 
                    // <module_name>['caption'][<get key code of value --> value data --> caption>] 
                        $this->mHeaderCaption = Root::getConfig()->{$_GET['nav']}['captions'][$this->values[$_GET['val']]];
                }
            }
        }

//        $this->mNavigation = array( 
//            'dashboard'      => array(
//                'url'   =>  Link::ToAdmin('dashboard')
//                ),
//            'article'   => array(
//                'url'   =>  Link::ToNavigation('guide')
//                ),
//        );
        foreach ($this->main_modules as $module) {
            if (isset($this->mIncludedTemplate[$module]['values'])) {
                //array_walk_recursive($this->mIncludedTemplate[$module]['values'], 'Admin::add_url');
                $this->RecursivelyAddUrl($this->mIncludedTemplate[$module]['values'], $module);
            } else {
                $this->mIncludedTemplate[$module]['url'] = Link::ToAdmin($module);
            }
        }
        echo("<pre>");
        var_dump($this->mIncludedTemplate);
        echo("</pre>");
    }
    
    // Traverse an array, if find value in array's element --> add url to this element
    // &$array --> get pointer of $this->mIncludedTemplate[$module]['values']
    private function RecursivelyAddUrl(&$array, $nav, $arrKey=array()) {
        // &$value --> get pointer of an object of $this->mIncludedTemplate[$module]['values']
        foreach ($array as $key => &$value) {
            // Add key to last element of arrKey
            array_push($arrKey, $key);
            if (isset($value['values'])) {
                $this->RecursivelyAddUrl($value['values'], $nav,$arrKey);
            } else {
                $array[$key]['url'] = Link::ToAdmin($nav, $arrKey);
            }
            // After making link for val0 --> valn, delete it (LIFO). Display as recursive
            //add a
            //  add a1
            //      add a11
            //      del a11
            //  del a1
            //del a
            array_pop($arrKey);
        }
    }

}
