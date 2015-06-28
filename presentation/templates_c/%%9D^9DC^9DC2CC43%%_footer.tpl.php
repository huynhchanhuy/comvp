<?php /* Smarty version 2.6.28, created on 2015-06-12 20:38:19
         compiled from main/_footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'main/_footer.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'main/_footer.tpl','family' => $this->_tpl_vars['family'],'assign' => 'obj'), $this);?>

<?php $this->assign('plugins', @PLUGIN); ?> 

<div class="footer-bottom">
        <div class="container">
                <div class="row">
                        <p class="pull-left">Copyright © 2015 Cơm văn phòng. All rights reserved.</p>
                        <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span> | Edited by: Huy Huynh - Email: huynhchanhuy@gmail.com .</p>
                </div>
        </div>
</div>