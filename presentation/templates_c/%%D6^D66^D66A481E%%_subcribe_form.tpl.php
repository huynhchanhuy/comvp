<?php /* Smarty version 2.6.28, created on 2015-03-08 19:51:20
         compiled from plugins/_subcribe_form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'plugins/_subcribe_form.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'plugins/_subcribe_form.tpl','parentpage' => $this->_tpl_vars['parent'],'assign' => 'obj'), $this);?>


<div class="contact-form">
        <h2 class="title text-center">Gửi Phản Hồi</h2>
        <div class="status alert alert-success" style="display: none"></div>
        <p>Đăng ký để nhận thực đơn qua Email</p>
        <form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
            <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" required="required" placeholder="Nhận thực đơn qua mail">
            </div>                     
            <div class="form-group col-md-12">
                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
            </div>
        </form>
</div>