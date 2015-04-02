<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Header extends Base {

    public $mNavigation;
    public $mPage;
    public $mLogoUrl;

    public function __construct($module,$filename) {
        parent::__construct($module,$filename);
        
        $home_class='';
        $contact_class='';
        $menu_class='';
        $aboutus_class='dropdown';
        $login_class='';
        
        $this->mLogoUrl = Link::Build('');
        if($_SESSION['lv'] === '1')
            $this->mUserPage = Link::ToAdmin();
        else 
            $this->mUserPage = Link::ToUserProfile();
        
        if(isset($_GET['nav']) && $_GET['nav'] == 'contact')
            $attr = array('home'=>$home_class,'contact'=>$contact_class.' active','menu'=>$menu_class,'aboutus'=>$aboutus_class,'login'=>$login_class);
        else if(isset($_GET['nav']) && $_GET['nav'] == 'menu')
            $attr = array('home'=>$home_class,'contact'=>$contact_class,'menu'=>$menu_class.' active','aboutus'=>$aboutus_class,'login'=>$login_class);
        else if(isset($_GET['nav']) && $_GET['nav'] == 'aboutus')
            $attr = array('home'=>$home_class,'contact'=>$contact_class,'menu'=>$menu_class,'aboutus'=>$aboutus_class.' active','login'=>$login_class);
        else if(isset($_GET['nav']) && $_GET['nav'] == 'login')
            $attr = array('home'=>$home_class,'contact'=>$contact_class,'menu'=>$menu_class,'aboutus'=>$aboutus_class,'login'=>$login_class.' active');
        else
            $attr = array('home'=>$home_class.' active','contact'=>$contact_class,'menu'=>$menu_class,'aboutus'=>$aboutus_class,'login'=>$login_class);

        $this->mNavigation = array( 
            'home'      => array(
                'url'   =>  Link::Build(''),
                'attr'  => $attr['home']),
            'contact'   => array(
                'url'   =>  Link::ToNavigation('contact'),  
                'attr'  => $attr['contact']),
            'menu'      => array(
                'url'   =>  Link::ToNavigation('menu'), 
                'attr'  => $attr['menu']),
            'aboutus'   => array(
                'url'   =>  Link::ToNavigation('aboutus'), 
                'attr'  => $attr['aboutus']),
            'login'     => array(
                'url'   =>  Link::ToNavigation('login'), 
                'attr'  => $attr['login']),
            'logouturl'    => Link::ToLogout(),
        );
        
    }

}
