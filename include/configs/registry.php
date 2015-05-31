<?php

# This file stored the registry for each module.
# Use only for module creation and configuration
# Define template that contains template files's definition
return array(
    'businessClasses' => array('auth', 'hasher', 'contactus'),
    // Main module
    'main' => array(
        'captions' => null,
        'values' => 'main',
        // Primary module
        'modules' => array('home', 'aboutus', 'contact', 'menu', 'login'), //because they are declare in this, so no need for <name>.tpl
        'layouts' => array(
            'header' => array(
                'name' => '_header.tpl',
                'layouts' => array(
//                    'TOP' => array(
//                        'name' => '_header_top.tpl',
//                        //'path' => '', # specific path for including filename if you dont want to place it as default structure
//                        ),
//                    'MIDDLE' => array(
//                        'name' => '_header_middle.tpl',
//                        //'path' => '', # specific path for including filename if you dont want to place it as default structure
//                        ),
//                    'BOTTOM' => array(
//                        'name' => '_header_bottom.tpl',
//                        //'path' => '', # specific path for including filename if you dont want to place it as default structure
//                        ),
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
    'admin' => array(
        'captions' => 'Administrator',
        'values' => 'admin',
        'modules' => array('dashboard', 'article', 'order', 'dishcategory', 'question'), #array('order','menudish','dish','info','anwser'), 
        //order:check,unchecked - menu:manage,create,update,delete, dish:manage,create,update,delete info: aboutus,guide,fag - anwser:answered and unanswered
        'layouts' => array(
            'leftsidebar' => array(
                'name' => '_left_sidebar.tpl',
                'layouts' => array()
            ),
        )
    ),
    // Primary module, must be place in default structure
    // main
    'home' => array(
        'values' => 0,
        // <name>.tpl --> needless
        'captions' => 'Trang Chủ',
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
    'aboutus' => array(# Term and service
        'values' => 1,
        'captions' => 'Chính Sách',
        'layouts' => array(
            'ABOUTUS_INTRO' => array(
                'name' => '_intro.tpl',
                'layouts' => array(),
            //'path' => '', # specific path for including filename if you dont want to place it as default structure
            ),
            'ABOUTUS_HELP' => array(
                'name' => '_help.tpl',
                'layouts' => array(),
            //'path' => '', # specific path for including filename if you dont want to place it as default structure
            ),
            'ABOUTUS_FAQ' => array(
                'name' => '_faq.tpl',
                'layouts' => array(),
            //'path' => '', # specific path for including filename if you dont want to place it as default structure
            ),
        ),
    ),
    'contact' => array(
        'values' => 2,
        'captions' => 'Liên Hệ',
    ),
    'menu' => array(
        'values' => 3,
        'captions' => 'Thực Đơn',
    ),
    'login' => array(
        'captions' => 'Đăng Nhập',
        'layouts' => array()
    ),
    //admin
    'dashboard' => array(
        'captions' => 'Quản Lý Chung',
        // Static or default attributes
        'cssclass' => 'fa fa-dashboard fa-fw',
    ),
    'article' => array(
        // value is the self-defined field
        'values' => array(
            'intro' => array(
                'captions' => 'Viết Bài Giới Thiệu',
                'cssclass' => 'fa fa-file-text fa-fw',
            ),
            'guide' => array(
                'captions' => 'Viết Bài Hướng Dẫn',
                'cssclass' => 'fa fa-info fa-fw',
            ),
            'faq' => array(
                'captions' => 'Câu Hỏi Thường Gặp',
                'cssclass' => 'fa fa-question fa-fw',
            ),
        ),
        'captions' => 'Quản Lý Nội Dung',
        'cssclass' => 'fa fa-edit fa-fw',
    ),
    'order' => array(
        // value is the self-defined field
        'captions' => 'Thực Đơn',
        'cssclass' => 'fa fa-book fa-fw',
        'values' => array(
            'category' => array(
                'captions' => 'Quản Lý Thực Đơn',
                'cssclass' => 'fa fa-cogs fa-fw',
            ),
            'dish' => array(
                'captions' => 'Thêm Mới Thực Đơn',
                'cssclass' => 'fa fa-plus-circle fa-fw',
            ),
        ),
    ),
    'dishcategory' => array(
        // value is the self-defined field
        'captions' => 'Món Ăn & Danh Mục',
        'cssclass' => 'fa fa-cutlery fa-fw',
        'values' => array(
            'category' => array(
                'captions' => 'Danh Mục Món Ăn',
                'cssclass' => 'fa fa-list-alt fa-fw',
                'values' => array(
                    'management' => array('captions' => 'Quản Lý Danh Mục'),
                    'creation' => array('captions' => 'Thêm Món Danh Mục'),
                )
            ),
            'dish' => array(
                'captions' => 'Món Ăn',
                'cssclass' => 'fa fa-list-alt fa-fw',
                'values' => array(
                    'management' => array('captions' => 'Quản Lý Món Ăn'),
                    'creation' => array('captions' => 'Thêm Món Ăn'),
                )
            ),
        ),
    ),
    'question' => array(
        // value is the self-defined field
        'captions' => 'Giải Đáp Thắc Mắc',
        'cssclass' => 'fa  fa-comments fa-fw',
        'values' => array(
            'category' => array(
                'captions' => 'Chưa Trả Lời',
                'cssclass' => 'fa fa-bell fa-fw',
            ),
            'dish' => array(
                'captions' => 'Đã Trả Lời',
                'cssclass' => 'fa fa-check-circle fa-fw',
            ),
        ),
    ),
    // Plugin module
    PLUGIN => array(
        'values' => NULL,
        'caption' => NULL,
        'layouts' => array(
            'subscribed_form' => '_subscribed_form.tpl',
            'gmap' => '_gmap.tpl',
            'login_form' => '_login_form.tpl',
            'contact_form' => '_contact_form.tpl',
            'contact_info' => '_contact_info.tpl',
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
