<?php /* Smarty version 2.6.28, created on 2015-05-31 17:53:21
         compiled from contact.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'contact.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'contact.tpl','family' => $this->_tpl_vars['family'],'assign' => 'obj'), $this);?>

<?php $this->assign('plugins', @PLUGIN); ?> 

<div id="contact-page" class="container">
    <div class="bg">
        <div class="row">
            <div class="col-sm-12">    			   			
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['plugins'])."/".($this->_tpl_vars['obj']->mIncludedTemplate[$this->_tpl_vars['plugins']]['layouts']['gmap']), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </div>
        </div>  
        <div class="row">                     
            <div class="col-sm-4">    			   			
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['plugins'])."/".($this->_tpl_vars['obj']->mIncludedTemplate[$this->_tpl_vars['plugins']]['layouts']['contact_info']), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </div>
            <div class="col-sm-8">    			   			
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['plugins'])."/".($this->_tpl_vars['obj']->mIncludedTemplate[$this->_tpl_vars['plugins']]['layouts']['contact_form']), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </div>

        </div>   
    </div>	
</div><!--/#contact-page-->
<script src="<?php echo $this->_config[0]['vars']['frontpage_js_dir']; ?>
vbdmap.js"></script>