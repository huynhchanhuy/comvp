<?php /* Smarty version 2.6.28, created on 2015-04-05 22:10:38
         compiled from plugins/_subscribed_form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'plugins/_subscribed_form.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'plugins/_subscribed_form.tpl','isplugin' => 1,'assign' => 'obj'), $this);?>

<h2 class="title text-center">Nhận thực đơn qua Email</h2>
<div class="status alert alert-success" style="display: none"></div>
<form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
    <div class="form-group col-md-12">
        <input type="text" name="name" class="form-control" required="required" placeholder="Địa chỉ Email">
    </div>                     
    <div class="form-group col-md-12">
        <input type="submit" name="submit" class="btn btn-primary pull-left btn-full" value="Đăng ký">
    </div>
</form>