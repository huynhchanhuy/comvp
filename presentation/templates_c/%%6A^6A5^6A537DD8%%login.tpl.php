<?php /* Smarty version 2.6.28, created on 2015-03-09 19:54:38
         compiled from login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'login.tpl', 2, false),array('modifier', 'cat', 'login.tpl', 8, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'login.tpl','assign' => 'obj'), $this);?>

	
<section id="form"><!--form-->
        <div class="container">
                <div class="row">
                        <div class="col-sm-4 col-sm-offset-1">
                                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['this']['filename'])) ? $this->_run_mod_handler('cat', true, $_tmp, "/") : smarty_modifier_cat($_tmp, "/")))) ? $this->_run_mod_handler('cat', true, $_tmp, "_login_form.tpl") : smarty_modifier_cat($_tmp, "_login_form.tpl")), 'smarty_include_vars' => array('parent' => $this->_tpl_vars['this'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                        </div>
                        <div class="col-sm-1">
                                <h2 class="or">HOẶC</h2>
                        </div>
                        <div class="col-sm-4">
                                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['this']['filename'])) ? $this->_run_mod_handler('cat', true, $_tmp, "/") : smarty_modifier_cat($_tmp, "/")))) ? $this->_run_mod_handler('cat', true, $_tmp, "_signup_form.tpl") : smarty_modifier_cat($_tmp, "_signup_form.tpl")), 'smarty_include_vars' => array('parent' => $this->_tpl_vars['this'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                        </div>
                </div>
        </div>
</section><!--/form-->