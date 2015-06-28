<?php /* Smarty version 2.6.28, created on 2015-06-28 18:48:39
         compiled from admin.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'admin.tpl', 2, false),array('function', 'load_presentation_object', 'admin.tpl', 4, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => "site.conf"), $this);?>

<?php echo smarty_function_config_load(array('file' => "htmlcode.conf"), $this);?>

<?php echo smarty_function_load_presentation_object(array('filename' => 'admin.tpl','family' => 0,'assign' => 'obj'), $this);?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Huy Huynh">

        <title><?php echo $this->_tpl_vars['obj']->mPageTitle; ?>
 <?php if (isset ( $this->_tpl_vars['obj']->mPageTitle )): ?>|<?php endif; ?> <?php echo $this->_config[0]['vars']['site_title']; ?>
</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo $this->_config[0]['vars']['adminpage_style_dir']; ?>
bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?php echo $this->_config[0]['vars']['adminpage_style_dir']; ?>
bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="<?php echo $this->_config[0]['vars']['adminpage_style_dir']; ?>
dist/css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo $this->_config[0]['vars']['adminpage_style_dir']; ?>
dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="<?php echo $this->_config[0]['vars']['adminpage_style_dir']; ?>
bower_components/morrisjs/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo $this->_config[0]['vars']['adminpage_style_dir']; ?>
bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" type="text/css" href="<?php echo $this->_config[0]['vars']['adminpage_style_dir']; ?>
ext/css/upload.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-brand" style="float:left" href="<?php echo $this->_tpl_vars['obj']->mAdminUrl; ?>
"><b><font face="Bradley Hand ITC" size="6">[ -- ADMINISTRATOR -- ]</font></b></a>
                </div>
                <div class="navbar-header" style="float:right">
                    <a class="navbar-brand" href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
" style="color: #0088cc"><i class="fa fa-long-arrow-left fa-fw"></i> <i>Quay Về Trang Chủ</i></a>
                </div>
                <!-- /.navbar-header -->
                
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['obj']->filename)."/".($this->_tpl_vars['obj']->mIncludedTemplate['layouts']['leftsidebar']['name']), 'smarty_include_vars' => array('site_dir' => $this->_tpl_vars['obj']->filename,'family' => $this->_tpl_vars['family'],'included_template' => $this->_tpl_vars['obj']->mIncludedTemplate)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                <!-- /.navbar-static-side -->
            </nav>
                    
            <div id="page-wrapper">
                                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['obj']->mContentsCell, 'smarty_include_vars' => array('family' => 0,'site_dir' => $this->_tpl_vars['obj']->filename)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="<?php echo $this->_config[0]['vars']['adminpage_style_dir']; ?>
bower_components/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo $this->_config[0]['vars']['adminpage_style_dir']; ?>
bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?php echo $this->_config[0]['vars']['adminpage_style_dir']; ?>
bower_components/metisMenu/dist/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="<?php echo $this->_config[0]['vars']['adminpage_style_dir']; ?>
bower_components/raphael/raphael-min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?php echo $this->_config[0]['vars']['adminpage_style_dir']; ?>
dist/js/sb-admin-2.js"></script>
        <script src="<?php echo $this->_config[0]['vars']['adminpage_style_dir']; ?>
ext/js/upload.js"></script>
        
        <script src="<?php echo $this->_config[0]['vars']['adminpage_style_dir']; ?>
ext/js/main.js"></script>

    </body>

</html>