<?php /* Smarty version 2.6.28, created on 2015-03-28 18:54:21
         compiled from login/_login_form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'login/_login_form.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'login/_login_form.tpl','parentpage' => $this->_tpl_vars['parent'],'assign' => 'obj'), $this);?>


<div class="login-form"><!--login form-->
    <h2>Đăng Nhập</h2>
    <form action="<?php echo $this->_tpl_vars['obj']->mLinkToLogin; ?>
" method="POST">
        <div class="<?php echo $this->_tpl_vars['obj']->mLoginClass; ?>
">
            <input class="form-control" autofocus="true" name="us" type="text" placeholder="Tên đăng nhập" />
            <input class="form-control" name="pw" type="password" placeholder="Mật khẩu" />
            <span>
                <input type="checkbox" name="rmbme" value="rmbme" class="checkbox"> 
                Nhớ trạng thái đăng nhập
            </span>
            <button type="submit" class="btn btn-default">Đăng nhập</button>

            <span class="help-block"><?php echo $this->_tpl_vars['obj']->mErrMsg; ?>
</span>
        </div>
    </form>
</div><!--/login form-->