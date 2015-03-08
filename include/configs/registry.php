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
        'modules' => array('home','aboutus','contact','menu'),//because they are declare in this, so no need for <name>.tpl
        'layouts' => array(
            'header' => array(
                'name' => '_header.tpl',
                'layouts' => array(
                    'TOP' => array(
                        'name' => '_header_top.tpl',
                        //'path' => '', # specific path for including filename if you dont want to place it as default structure
                        ),
                    'MIDDLE' => array(
                        'name' => '_header_middle.tpl',
                        //'path' => '', # specific path for including filename if you dont want to place it as default structure
                        ),
                    'BOTTOM' => array(
                        'name' => '_header_bottom.tpl',
                        //'path' => '', # specific path for including filename if you dont want to place it as default structure
                        ),
                ),
                //'path' => '', # specific path for including filename if you dont want to place it as default structure
                ),
            'footer' => array(
                'name' => '_footer.tpl',
                'layouts' => array(),
                //'path' => '', # specific path for including filename if you dont want to place it as default structure
                ),
        ),
    ),
    // Primary module, must be place in default structure
    'home' => array(
        'value' => 0,
        // <name>.tpl --> needless
        'attrs' => array(
            'class' => '',
            ),
        'captions' => array('vn'=>'Trang Chủ'),
        'layouts' => array(
            'HOME_SLIDER' => array(
                'name' => '_slider.tpl',
                'layouts' => array(),
                //'path' => '', # specific path for including filename if you dont want to place it as default structure
                ),
            'HOME_LEFT_SIDEBAR' => array(
                'name' => '_left_sidebar.tpl',
                'layouts' => array(),
                //'path' => '', # specific path for including filename if you dont want to place it as default structure
                ),
            'HOME_TODAY_ITEMS' => array(
                'name' => '_today_items.tpl',
                'layouts' => array(),
                //'path' => '', # specific path for including filename if you dont want to place it as default structure
                ),
            'HOME_CATEGORY_TAB' => array(
                'name' => '_category_tab.tpl',
                'layouts' => array(),
                //'path' => '', # specific path for including filename if you dont want to place it as default structure
                ),
            'HOME_TOP_CHOICES' => array(
                'name' => '_top_choices.tpl',
                'layouts' => array(),
                //'path' => '', # specific path for including filename if you dont want to place it as default structure
                ),
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
            'PLUGIN_SUBSCRIBED_FORM' => '_subscribed_form.tpl',
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
            'enabled' => true,
            'params' => array(
                // array of construct variable here
            )
        )
    )
);