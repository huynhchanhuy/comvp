<?php /* Smarty version 2.6.28, created on 2015-03-22 11:26:24
         compiled from page404.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'page404.tpl', 2, false),array('function', 'page404', 'page404.tpl', 3, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => "site.conf"), $this);?>

<?php echo smarty_function_page404(array('siteurl' => 'obj'), $this);?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $this->_config[0]['vars']['site_title']; ?>
</title>
    <link href="<?php echo $this->_config[0]['vars']['frontpage_css_dir']; ?>
/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $this->_config[0]['vars']['frontpage_css_dir']; ?>
/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo $this->_config[0]['vars']['frontpage_css_dir']; ?>
/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo $this->_config[0]['vars']['frontpage_css_dir']; ?>
/price-range.css" rel="stylesheet">
    <link href="<?php echo $this->_config[0]['vars']['frontpage_css_dir']; ?>
/animate.css" rel="stylesheet">
	<link href="<?php echo $this->_config[0]['vars']['frontpage_css_dir']; ?>
/main.css" rel="stylesheet">
	<link href="<?php echo $this->_config[0]['vars']['frontpage_css_dir']; ?>
/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $this->_config[0]['vars']['frontpage_img_dir']; ?>
/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $this->_config[0]['vars']['frontpage_img_dir']; ?>
/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $this->_config[0]['vars']['frontpage_img_dir']; ?>
/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo $this->_config[0]['vars']['frontpage_img_dir']; ?>
/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<div class="container text-center">
		<div class="logo-404">
			<a href="<?php echo $this->_tpl_vars['obj']; ?>
"><img src="<?php echo $this->_config[0]['vars']['frontpage_img_dir']; ?>
/home/logo.png" alt="" /></a>
		</div>
		<div class="content-404">
			<img src="<?php echo $this->_config[0]['vars']['_404_img_dir']; ?>
/404/404.png" class="img-responsive" alt="" />
			<h1><b>OPPS!</b> We Couldn’t Find this Page</h1>
			<p>Uh... So it looks like you brock something. The page you are looking for has up and Vanished.</p>
			<h2><a href="<?php echo $this->_tpl_vars['obj']; ?>
">Bring me back Home</a></h2>
		</div>
	</div>

  
    <script src="<?php echo $this->_config[0]['vars']['frontpage_js_dir']; ?>
/jquery.js"></script>
	<script src<?php echo $this->_config[0]['vars']['frontpage_js_dir']; ?>
js/price-range.js"></script>
    <script src="<?php echo $this->_config[0]['vars']['frontpage_js_dir']; ?>
/jquery.scrollUp.min.js"></script>
	<script src="<?php echo $this->_config[0]['vars']['frontpage_js_dir']; ?>
/bootstrap.min.js"></script>
    <script src="<?php echo $this->_config[0]['vars']['frontpage_js_dir']; ?>
/jquery.prettyPhoto.js"></script>
    <script src="<?php echo $this->_config[0]['vars']['frontpage_js_dir']; ?>
/main.js"></script>
</body>
</html>