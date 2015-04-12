<?php /* Smarty version 2.6.28, created on 2015-04-11 23:17:43
         compiled from login/_signup_form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'login/_signup_form.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'login/_signup_form.tpl','family' => $this->_tpl_vars['family'],'assign' => 'obj'), $this);?>


<div class="signup-form"><!--sign up form-->
        <h2>Đăng ký thành viên!</h2>
        <form action="#">
                <input type="text" placeholder="Name"/>
                <input type="email" placeholder="Email Address"/>
                <input type="password" placeholder="Password"/>
                <button type="submit" name="btnreg" class="btn btn-default">Đăng ký</button>
        </form>
</div><!--/sign up form-->