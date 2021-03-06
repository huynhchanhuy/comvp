<?php /* Smarty version 2.6.28, created on 2015-06-13 21:20:32
         compiled from dashboard.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'dashboard.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'dashboard.tpl','family' => $this->_tpl_vars['family'],'assign' => 'obj'), $this);?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><?php echo $this->_tpl_vars['obj']->mIncludedTemplate['captions']; ?>
</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="container">
    <div class="row">
        <div class="contact-form">
            <div class="form-group col-md-12">

                <div><b>Chào mừng admin đã đến với trang quản lý dành cho Admin! </b></div>
                <div>
                    Hãy nhìn sang bên trái bạn sẽ thấy danh sách các chức năng mà bạn có thể sử dụng.
                    Nếu trong quá trình sử dụng gặp bất cứ khó khăn gì, xin vui lòng liên hệ email: <a href="#"><i>huynhchanhuy@gmail.com</i></a>
                </div>
                </br>
                <div class="col-lg-6">
                    <div class="well well-lg">
                        <h4>Quản Lý Nội Dung</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="well well-lg">
                        <h4>Món Ăn & Danh Mục</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="well well-lg">
                        <h4>Thực Đơn</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="well well-lg">
                        <h4>Giải Đáp Thắc Mắc</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>