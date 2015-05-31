<?php
// This file store logical directory and php file and configuration variable
// Use for server configuration

// SITE_ROOT contains the full path to the tshirtshop folder
define('SITE_ROOT',dirname(dirname(__FILE__)));

// Application directories
define('PRESENTATION_DIR',SITE_ROOT.'/presentation/');
define('HANDLER_DIR',SITE_ROOT.'/handler/');
define('MASTER_DIR',SITE_ROOT.'/master/');
define('BUSINESS_DIR',SITE_ROOT.'/business/');

// Settings needed to configure the Smarty tempalte engine
define('SMARTY_DIR', SITE_ROOT. '/libs/smarty/');
define('TEMPLATE_DIR', PRESENTATION_DIR . 'templates');
define('COMPILE_DIR', PRESENTATION_DIR . 'templates_c');
define('CONFIG_DIR', SITE_ROOT . '/include/configs');
define('UTILS_DIR', SITE_ROOT . '/include/utils');
define('REGISTRY', CONFIG_DIR.'/registry.php');

define('PHP_CLASS_DIR',PRESENTATION_DIR.'classes');
define('PLUGIN','plugins');
define('TPL','.tpl');
define('PHP','.php');

//These should be true while developing the web site
define('IS_WARNING_FATAL',true);
define('DEBUGGING', true);

// The error types to be reported
define('ERROR_TYPES', E_ALL);

// Settings about mailing the error messages to admin
define('SEND_ERROR_MAIL', false);//
define('ADMIN_ERROR_MAIL', 'huynhchanhuy@gmail.com');
define('SENDMAIL_FROM', 'hiepphongsystem@gmail.com');
ini_set('sendmail_from', SENDMAIL_FROM);

// By default we don't log errors to a file
define('LOG_ERRORS',false);
define('LOG_ERRORS_FILE', SITE_ROOT.'/error/errors.log');

/* Generic error message to be displayed instead of debug info
(when DEBUGGING is false) */
define('SITE_GENERIC_ERROR_MESSAGE','<h1>TShirtShop Error!</h1>');

// Database connectivity setup
define('DB_PERSISTENCY','true');
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_DATABASE','comvp');
define('PDO_DSN','mysql:host=' . DB_SERVER . ';dbname=' . DB_DATABASE);

// Server HTTP port (can omit if the default 80 is used)
define('HTTP_SERVER_PORT',80);
/* Name of the virtual directory the site runs in, for example:
 * '/tshirtshop/' if the site runs at http://www.example.com/tshirtshop/
 * '/' if the site runs at http://www.example.com/
 */
define('VIRTUAL_LOCATION','/eshopper/');

// Configure product lists display options
define('SHORT_PRODUCT_DESCRIPTION_LENGTH',150);
define('PRODUCTS_PER_PAGE',4);

// Random value used for hashing
define('HASH_PREFIX', 'K1-');
# ------------
# 
#Module file
define('NAV_HOME_KEY', 'home');
define('NAV_CONTACT_KEY', 'contact');
define('NAV_MENU_KEY', 'menu');
define('NAV_ABOUTUS_KEY', 'aboutus');

#Navigation Tabs
define('NAV_HOME_VALUE', 'Trang Chủ');
define('NAV_CONTACT_VALUE', 'Liên Hệ');
define('NAV_MENU_VALUE', 'Món Ăn');
define('NAV_ABOUTUS_VALUE', 'Giới Thiệu');

# Menu Level Css
define('MENU_CSS','MENU_CSS_LV');
define(MENU_CSS.'0','nav nav-second-level');
define(MENU_CSS.'1','nav nav-third-level');

#Error Type
define('LOGIN_MSG',1);

#Error Code
define('LOGIN_SUCCESS',0);
define('US_INVALID',101);
define('US_BLANK',102);
define('PASSWD_INVALID',201);
define('PASSWD_BLANK',202);

#Error Msg
define('LOGIN'.US_INVALID,'Tên đăng nhập không hợp lệ');
define('LOGIN'.US_BLANK,'Bạn chưa điền tên đăng nhập');
define('LOGIN'.PASSWD_INVALID,'Mật khẩu không hợp lệ');
define('LOGIN'.PASSWD_BLANK,'Bạn chưa điền tên mật khẩu');