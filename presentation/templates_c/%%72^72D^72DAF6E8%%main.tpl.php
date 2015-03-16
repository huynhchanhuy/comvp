<?php /* Smarty version 2.6.28, created on 2015-03-16 18:39:55
         compiled from main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'main.tpl', 2, false),array('function', 'load_presentation_object', 'main.tpl', 3, false),array('modifier', 'cat', 'main.tpl', 33, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => "site.conf"), $this);?>

<?php echo smarty_function_load_presentation_object(array('filename' => 'main.tpl','assign' => 'obj'), $this);?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title><?php echo $this->_tpl_vars['obj']->mPageTitle; ?>
 | <?php echo $this->_config[0]['vars']['site_title']; ?>
</title>
        <link href="<?php echo $this->_config[0]['vars']['css_dir']; ?>
bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo $this->_config[0]['vars']['css_dir']; ?>
font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo $this->_config[0]['vars']['css_dir']; ?>
prettyPhoto.css" rel="stylesheet">
        <link href="<?php echo $this->_config[0]['vars']['css_dir']; ?>
price-range.css" rel="stylesheet">
        <link href="<?php echo $this->_config[0]['vars']['css_dir']; ?>
animate.css" rel="stylesheet">
        <link href="<?php echo $this->_config[0]['vars']['css_dir']; ?>
main.css" rel="stylesheet">
        <link href="<?php echo $this->_config[0]['vars']['css_dir']; ?>
responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $this->_config[0]['vars']['img_dir']; ?>
ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $this->_config[0]['vars']['img_dir']; ?>
ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $this->_config[0]['vars']['img_dir']; ?>
ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo $this->_config[0]['vars']['img_dir']; ?>
ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->

    <body>
        <header id="header"><!--header-->
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['this']['filename'])) ? $this->_run_mod_handler('cat', true, $_tmp, "/") : smarty_modifier_cat($_tmp, "/")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['obj']->mIncludedTemplate['layouts']['header']['name']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['obj']->mIncludedTemplate['layouts']['header']['name'])), 'smarty_include_vars' => array('parent' => $this->_tpl_vars['this'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </header><!--/header-->

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['obj']->mContentsCell, 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

        <footer id="footer"><!--Footer-->
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['this']['filename'])) ? $this->_run_mod_handler('cat', true, $_tmp, "/") : smarty_modifier_cat($_tmp, "/")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['obj']->mIncludedTemplate['layouts']['footer']['name']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['obj']->mIncludedTemplate['layouts']['footer']['name'])), 'smarty_include_vars' => array('parent' => $this->_tpl_vars['this'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </footer><!--/Footer-->

        <script src="<?php echo $this->_config[0]['vars']['js_dir']; ?>
jquery.js"></script>
        <script src="<?php echo $this->_config[0]['vars']['js_dir']; ?>
bootstrap.min.js"></script>
        <script src="<?php echo $this->_config[0]['vars']['js_dir']; ?>
jquery.scrollUp.min.js"></script>
        <script src="<?php echo $this->_config[0]['vars']['js_dir']; ?>
price-range.js"></script>
        <script src="<?php echo $this->_config[0]['vars']['js_dir']; ?>
jquery.prettyPhoto.js"></script>
        <script src="<?php echo $this->_config[0]['vars']['js_dir']; ?>
private.js"></script>
        <script src="<?php echo $this->_config[0]['vars']['js_dir']; ?>
vbdmap.js"></script>
        <script src="<?php echo $this->_config[0]['vars']['js_dir']; ?>
main.js"></script>
    </body>
</html>