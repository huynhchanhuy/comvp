<?php /* Smarty version 2.6.28, created on 2015-03-09 19:53:58
         compiled from login/_signup_form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'login/_signup_form.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'login/_signup_form.tpl','parentpage' => $this->_tpl_vars['parent'],'assign' => 'obj'), $this);?>


<div class="signup-form"><!--sign up form-->
        <h2>Đăng ký thành viên!</h2>
        <form action="#">
                <input type="text" placeholder="Name"/>
                <input type="email" placeholder="Email Address"/>
                <input type="password" placeholder="Password"/>
                <button type="submit" class="btn btn-default">Đăng ký</button>
        </form>
</div><!--/sign up form-->