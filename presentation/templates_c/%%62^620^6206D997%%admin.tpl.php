<?php /* Smarty version 2.6.28, created on 2015-03-22 19:39:44
         compiled from admin.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'admin.tpl', 2, false),array('function', 'load_presentation_object', 'admin.tpl', 3, false),array('modifier', 'cat', 'admin.tpl', 55, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => "site.conf"), $this);?>

<?php echo smarty_function_load_presentation_object(array('filename' => 'admin.tpl','assign' => 'obj'), $this);?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Huy Huynh">

        <title>Administrator</title>

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
                    <a class="navbar-brand" href="index.html">Khu Vực Quản Lý Website</a>
                </div>
                <!-- /.navbar-header -->

                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['this']['filename'])) ? $this->_run_mod_handler('cat', true, $_tmp, "/") : smarty_modifier_cat($_tmp, "/")))) ? $this->_run_mod_handler('cat', true, $_tmp, "_left_sidebar.tpl") : smarty_modifier_cat($_tmp, "_left_sidebar.tpl")), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                <!-- /.navbar-static-side -->
            </nav>

            <div id="page-wrapper">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['this']['filename'])) ? $this->_run_mod_handler('cat', true, $_tmp, "/") : smarty_modifier_cat($_tmp, "/")))) ? $this->_run_mod_handler('cat', true, $_tmp, "_content.tpl") : smarty_modifier_cat($_tmp, "_content.tpl")), 'smarty_include_vars' => array()));
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
        <script src="<?php echo $this->_config[0]['vars']['adminpage_style_dir']; ?>
bower_components/morrisjs/morris.min.js"></script>
        <script src="<?php echo $this->_config[0]['vars']['adminpage_style_dir']; ?>
js/morris-data.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?php echo $this->_config[0]['vars']['adminpage_style_dir']; ?>
dist/js/sb-admin-2.js"></script>

    </body>

</html>