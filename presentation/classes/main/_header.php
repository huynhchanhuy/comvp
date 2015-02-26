<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Header extends Base {

    public $mNavigation;

    public function __construct($module,$filename) {
        parent::__construct($module,$filename);
        //Enabled menu
        if(NAVIGATION == true)
        {
            $home_class = $this->mIncludedTemplate['home']['attrs']['class'];
            $contact_class = $this->mIncludedTemplate['contact']['attrs']['class'];
            $menu_class = $this->mIncludedTemplate['menu']['attrs']['class'];
            $aboutus_class = $this->mIncludedTemplate['aboutus']['attrs']['class'];
            if(isset($_GET['nav']) && $_GET['nav'] == 'contact')
                $attr = array('home'=>$home_class,'contact'=>$contact_class.' active','menu'=>$menu_class,'aboutus'=>$aboutus_class);
            else if(isset($_GET['nav']) && $_GET['nav'] == 'menu')
                $attr = array('home'=>$home_class,'contact'=>$contact_class,'menu'=>$menu_class.' active','aboutus'=>$aboutus_class);
            else if(isset($_GET['nav']) && $_GET['nav'] == 'aboutus')
                $attr = array('home'=>$home_class,'contact'=>$contact_class,'menu'=>$menu_class,'aboutus'=>$aboutus_class.' active');
            else
                $attr = array('home'=>$home_class.' active','contact'=>$contact_class,'menu'=>$menu_class,'aboutus'=>$aboutus_class);

            $this->mNavigation = array('home' => array('url' => Link::Build(''), 'attr' => $attr['home']),
                'contact' => array('url' => Link::ToNavigation('contact'), 'attr' => $attr['contact']),
                'menu' => array('url' => Link::ToNavigation('menu'), 'attr' => $attr['menu']),
                'aboutus' => array('url' => Link::ToNavigation('aboutus'), 'attr' => $attr['aboutus']),
            );
        }
        
    }

}
