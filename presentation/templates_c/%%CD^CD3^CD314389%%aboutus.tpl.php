<?php /* Smarty version 2.6.28, created on 2015-04-05 22:41:41
         compiled from aboutus.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'aboutus.tpl', 2, false),array('modifier', 'cat', 'aboutus.tpl', 9, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'aboutus.tpl','family' => $this->_tpl_vars['family'],'assign' => 'obj'), $this);?>


<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 padding-right">
                <div id="intro" class="features_items"><!--features_items-->
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['obj']->filename)) ? $this->_run_mod_handler('cat', true, $_tmp, "/") : smarty_modifier_cat($_tmp, "/")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['obj']->mIncludedTemplate['layouts']['ABOUTUS_INTRO']['name']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['obj']->mIncludedTemplate['layouts']['ABOUTUS_INTRO']['name'])), 'smarty_include_vars' => array('famliy' => $this->_tpl_vars['family'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                </div><!--features_items-->

                <div id="help" class="category-tab"><!--category-tab-->
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['obj']->filename)) ? $this->_run_mod_handler('cat', true, $_tmp, "/") : smarty_modifier_cat($_tmp, "/")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['obj']->mIncludedTemplate['layouts']['ABOUTUS_HELP']['name']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['obj']->mIncludedTemplate['layouts']['ABOUTUS_HELP']['name'])), 'smarty_include_vars' => array('famliy' => $this->_tpl_vars['family'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                </div><!--/category-tab-->

                <div id="faq" class="recommended_items"><!--recommended_items-->
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['obj']->filename)) ? $this->_run_mod_handler('cat', true, $_tmp, "/") : smarty_modifier_cat($_tmp, "/")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['obj']->mIncludedTemplate['layouts']['ABOUTUS_FAQ']['name']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['obj']->mIncludedTemplate['layouts']['ABOUTUS_FAQ']['name'])), 'smarty_include_vars' => array('famliy' => $this->_tpl_vars['family'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                    
                </div><!--/recommended_items-->

            </div>
        </div>
    </div>
</section>