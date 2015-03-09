<?php /* Smarty version 2.6.28, created on 2015-03-09 19:48:34
         compiled from contact.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'contact.tpl', 2, false),array('modifier', 'cat', 'contact.tpl', 8, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'contact.tpl','assign' => 'obj'), $this);?>


<div id="contact-page" class="container">
    <div class="bg">
            <div class="row">    		
                    <div class="col-sm-12">    			   			
                                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=@PLUGIN_LAYOUT_NAME)) ? $this->_run_mod_handler('cat', true, $_tmp, "/") : smarty_modifier_cat($_tmp, "/")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_config[0]['vars']['plugin_gmap_tpl']) : smarty_modifier_cat($_tmp, $this->_config[0]['vars']['plugin_gmap_tpl'])), 'smarty_include_vars' => array('parent' => @PLUGIN_LAYOUT_NAME)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    </div>			 		
            </div>    	
            <div class="row">  	
                    <div class="col-sm-8">
                                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=@PLUGIN_LAYOUT_NAME)) ? $this->_run_mod_handler('cat', true, $_tmp, "/") : smarty_modifier_cat($_tmp, "/")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_config[0]['vars']['plugin_contact_form_tpl']) : smarty_modifier_cat($_tmp, $this->_config[0]['vars']['plugin_contact_form_tpl'])), 'smarty_include_vars' => array('parent' => @PLUGIN_LAYOUT_NAME)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    </div>
                    <div class="col-sm-4">
                                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=@PLUGIN_LAYOUT_NAME)) ? $this->_run_mod_handler('cat', true, $_tmp, "/") : smarty_modifier_cat($_tmp, "/")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_config[0]['vars']['plugin_contact_info_tpl']) : smarty_modifier_cat($_tmp, $this->_config[0]['vars']['plugin_contact_info_tpl'])), 'smarty_include_vars' => array('parent' => @PLUGIN_LAYOUT_NAME)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    </div>    			
            </div>  
    </div>	
</div><!--/#contact-page-->