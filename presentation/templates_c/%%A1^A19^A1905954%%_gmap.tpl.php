<?php /* Smarty version 2.6.28, created on 2015-02-26 18:02:47
         compiled from plugins/_gmap.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'plugins/_gmap.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'plugins/_gmap.tpl','parentpage' => $this->_tpl_vars['parent'],'assign' => 'obj'), $this);?>

  			    				    				

<div class="map-container">
    <div id="gmap" class="contact-map"></div>
    <i class="map-top"></i>
    <i class="map-right"></i>
    <i class="map-bottom"></i>
    <i class="map-left"></i>
</div>