<?php /* Smarty version 2.6.28, created on 2015-04-05 16:01:54
         compiled from main/_footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'main/_footer.tpl', 2, false),array('modifier', 'cat', 'main/_footer.tpl', 10, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'main/_footer.tpl','family' => $this->_tpl_vars['family'],'assign' => 'obj'), $this);?>

<?php $this->assign('plugins', @PLUGIN); ?> 

<div class="footer-top">
        <div class="container">
                <div class="row">
                        <div class="col-sm-5">
                                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['plugins'])) ? $this->_run_mod_handler('cat', true, $_tmp, "/") : smarty_modifier_cat($_tmp, "/")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['obj']->mIncludedTemplate[$this->_tpl_vars['plugins']]['layouts']['gmap']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['obj']->mIncludedTemplate[$this->_tpl_vars['plugins']]['layouts']['gmap'])), 'smarty_include_vars' => array('parent' => $this->_tpl_vars['plugins'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                        </div>
                        <div class="col-sm-4">
                                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['plugins'])) ? $this->_run_mod_handler('cat', true, $_tmp, "/") : smarty_modifier_cat($_tmp, "/")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['obj']->mIncludedTemplate[$this->_tpl_vars['plugins']]['layouts']['contact_info']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['obj']->mIncludedTemplate[$this->_tpl_vars['plugins']]['layouts']['contact_info'])), 'smarty_include_vars' => array('parent' => $this->_tpl_vars['plugins'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                        </div>
                        <div class="col-sm-3">
                                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['plugins'])) ? $this->_run_mod_handler('cat', true, $_tmp, "/") : smarty_modifier_cat($_tmp, "/")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['obj']->mIncludedTemplate[$this->_tpl_vars['plugins']]['layouts']['subscribed_form']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['obj']->mIncludedTemplate[$this->_tpl_vars['plugins']]['layouts']['subscribed_form'])), 'smarty_include_vars' => array('parent' => $this->_tpl_vars['plugins'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                        </div>
                </div>
        </div>
</div>

<div class="footer-bottom">
        <div class="container">
                <div class="row">
                        <p class="pull-left">Copyright © 2015 Cơm văn phòng. All rights reserved.</p>
                        <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span> | Edited by: Huy Huynh - Email: huynhchanhuy@gmail.com .</p>
                </div>
        </div>
</div>