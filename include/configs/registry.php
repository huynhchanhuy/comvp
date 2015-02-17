<?php
# This file stored the registry for each module.
# Use only for module creation and configuration

//# TPL belongs to 'home'
//define('HOME_SLIDER', '_slider');
//define('HOME_LEFT_SIDEBAR', '_left_sidebar');
//define('HOME_TODAY_ITEMS', '_today_items');
//define('HOME_CATEGORY_TAB', '_category_tab');
//define('HOME_TOP_CHOICES', '_top_choices');
//
//# TPL belongs to 'main'
//define('MAIN_HEADER', '_header');
//define('MAIN_FOOTER', '_footer');
//
//# TPL belongs to plugin
//define('PLUGIN_COMPANY_INFO', '_company_info');
//define('PLUGIN_GMAP', '_gmap');
//define('PLUGIN_CONTACT_FORM', '_contact_form');
//define('PLUGIN_CONTACT_INFO', '_contact_info');
//define('PLUGIN_LOGIN_FORM', '_login_form');
//define('PLUGIN_SIGNUP_FORM_INFO', '_signup_form');
# Define template that contains template files's definition
return array(
    // Main module
    'main' => array(
        'value' => 'main',
        // Primary module
        'modules' => array('home','aboutus','contact','menu'),
        'layouts' => array(
            'MAIN_HEADER' => '_header.tpl',
            'MAIN_FOOTER' => '_footer.tpl'
        ),
    ),
    // Primary module
    'home' => array(
        'value' => 0,
        'attrs'=>array(
            'class' => '',
            ),
        'captions' => array('vn'=>'Trang Chủ'),
        'layouts' => array(
            'HOME_SLIDER' => '_slider.tpl',
            'HOME_LEFT_SIDEBAR' => '_left_sidebar.tpl',
            'HOME_TODAY_ITEMS' => '_today_items.tpl',
            'HOME_CATEGORY_TAB' => '_category_tab.tpl',
            'HOME_TOP_CHOICES' => '_top_choices.tpl',
        )
    ),
    'aboutus' => array( # Term and service
        'value' => 1,
        'attrs'=>array(
            'class' => 'dropdown',
            ),
        'captions' => array('vn'=>'Chính Sách'),
        'submenu' => array(
            
        ),
    ),
    'contact' => array(
        'value' => 2,
        'attrs'=>array(
            'class' => '',
            ),
        'captions' => array('vn'=>'Liên Hệ'),
    ),
    'menu' => array(
        'value' => 3,
        'attrs'=>array(
            'class' => '',
            ),
        'captions' => array('vn'=>'Thực Đơn'),
    ),
    // Plugin module
    PLUGIN => array(
        'value' => NULL,
        'caption' => NULL ,
        'layouts' => array(
            'PLUGIN_COMPANY_INFO' => '_company_info.tpl',
            'PLUGIN_GMAP' => '_gmap.tpl',
            'PLUGIN_CONTACT_FORM' => '_contact_form.tpl',
            'PLUGIN_CONTACT_INFO' => '_contact_info.tpl',
            'PLUGIN_LOGIN_FORM' => '_login_form.tpl',
            'PLUGIN_SIGNUP_FORM_INFO' => '_signup_form.tpl'
        )
    ),
    // Minor functions. We just include file necessary for registry here, needless file consume more resource
    'utils' => array(
        // object name
        'timePassThrought' => array(
            'className' => 'TimePassThrought',
            'fileName' => 'TimePassThrought',
            'params' => array(
                // array of construct variable here
            )
        )
    )
);