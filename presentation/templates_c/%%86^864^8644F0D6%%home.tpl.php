<?php /* Smarty version 2.6.28, created on 2015-02-17 10:21:42
         compiled from home.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'home.tpl', 2, false),array('modifier', 'cat', 'home.tpl', 5, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'home.tpl','assign' => 'obj'), $this);?>


<section id="slider"><!--slider-->
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['this']['filename'])) ? $this->_run_mod_handler('cat', true, $_tmp, "/") : smarty_modifier_cat($_tmp, "/")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['obj']->mIncludedTemplate['this']['layouts']['HOME_SLIDER']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['obj']->mIncludedTemplate['this']['layouts']['HOME_SLIDER'])), 'smarty_include_vars' => array('parent' => $this->_tpl_vars['this'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</section><!--/slider-->

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['this']['filename'])) ? $this->_run_mod_handler('cat', true, $_tmp, "/") : smarty_modifier_cat($_tmp, "/")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['obj']->mIncludedTemplate['this']['layouts']['HOME_LEFT_SIDEBAR']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['obj']->mIncludedTemplate['this']['layouts']['HOME_LEFT_SIDEBAR'])), 'smarty_include_vars' => array('parent' => $this->_tpl_vars['this'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['this']['filename'])) ? $this->_run_mod_handler('cat', true, $_tmp, "/") : smarty_modifier_cat($_tmp, "/")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['obj']->mIncludedTemplate['this']['layouts']['HOME_TODAY_ITEMS']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['obj']->mIncludedTemplate['this']['layouts']['HOME_TODAY_ITEMS'])), 'smarty_include_vars' => array('parent' => $this->_tpl_vars['this'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </div><!--features_items-->

                <div class="category-tab"><!--category-tab-->
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['this']['filename'])) ? $this->_run_mod_handler('cat', true, $_tmp, "/") : smarty_modifier_cat($_tmp, "/")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['obj']->mIncludedTemplate['this']['layouts']['HOME_CATEGORY_TAB']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['obj']->mIncludedTemplate['this']['layouts']['HOME_CATEGORY_TAB'])), 'smarty_include_vars' => array('parent' => $this->_tpl_vars['this'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </div><!--/category-tab-->

                <div class="recommended_items"><!--recommended_items-->
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['this']['filename'])) ? $this->_run_mod_handler('cat', true, $_tmp, "/") : smarty_modifier_cat($_tmp, "/")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['obj']->mIncludedTemplate['this']['layouts']['HOME_TOP_CHOICES']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['obj']->mIncludedTemplate['this']['layouts']['HOME_TOP_CHOICES'])), 'smarty_include_vars' => array('parent' => $this->_tpl_vars['this'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </div><!--/recommended_items-->

            </div>
        </div>
    </div>
</section>