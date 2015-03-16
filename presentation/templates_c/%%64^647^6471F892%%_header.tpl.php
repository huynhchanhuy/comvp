<?php /* Smarty version 2.6.28, created on 2015-03-16 18:15:11
         compiled from main/_header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'main/_header.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'main/_header.tpl','parentpage' => $this->_tpl_vars['parent'],'assign' => 'obj'), $this);?>

<div class="header_top"><!--header_top-->
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="contactinfo">
                    <ul class="nav nav-pills">
                        <li><a href="#"><i class="fa fa-phone"></i> Hotline đặt cơm: +2 95 01 88 821</a></li>
                        <li><a href="#"><i class="fa fa-envelope"></i> Email: info@domain.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="contactinfo pull-right">
                    <ul class="nav nav-pills">
                        <li><a id="today" href="#"><i class="fa fa-calendar"></i> </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><!--/header_top-->

<div class="header-middle"><!--header-middle-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="logo pull-left">
                    <a href="<?php echo $this->_tpl_vars['obj']->mLogoUrl; ?>
"><img src="<?php echo $this->_config[0]['vars']['logo_dir']; ?>
" alt="" /></a>
                </div>
                <div class="btn-group pull-right">

                </div>
            </div>
            <div class="col-sm-8">
                <div class="shop-menu pull-right">
                    <ul class="nav navbar-nav">
                        <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
                        <li><a href="presentation\templates\checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                        <li><a href="presentation\templates\cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                        <?php if (! isset ( $_SESSION['us'] )): ?>
                            <li><a href="<?php echo $this->_tpl_vars['obj']->mNavigation['login']['url']; ?>
" class="<?php echo $this->_tpl_vars['obj']->mNavigation['login']['attr']; ?>
"><i class="fa fa-lock"></i> Login</a></li>
                        <?php else: ?>
                            <li><a href="#"><i class="fa fa-user"></i> $smarty.session.us</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><!--/header-middle-->

<div class="header-bottom"><!--header-bottom-->
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="mainmenu pull-left">
                    <ul class="nav navbar-nav collapse navbar-collapse">
                        <li><a href="<?php echo $this->_tpl_vars['obj']->mNavigation['home']['url']; ?>
" class="<?php echo $this->_tpl_vars['obj']->mNavigation['home']['attr']; ?>
">Trang Chủ</a></li>
                        <li><a href="<?php echo $this->_tpl_vars['obj']->mNavigation['aboutus']['url']; ?>
" class="<?php echo $this->_tpl_vars['obj']->mNavigation['aboutus']['attr']; ?>
">Chính Sách <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="presentation\templates\shop.html">Giới Thiệu Chung</a></li>
                                <li><a href="presentation\templates\product-details.html">Hướng Dẫn</a></li> 
                                <li><a href="presentation\templates\checkout.html">Hỏi đáp</a></li>
                            </ul>
                        </li>

                        <li><a href="<?php echo $this->_tpl_vars['obj']->mNavigation['menu']['url']; ?>
" class="<?php echo $this->_tpl_vars['obj']->mNavigation['menu']['attr']; ?>
" >Thực Đơn</a></li>
                        <li><a href="<?php echo $this->_tpl_vars['obj']->mNavigation['contact']['url']; ?>
" class="<?php echo $this->_tpl_vars['obj']->mNavigation['contact']['attr']; ?>
" >Liên Hệ</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="search_box pull-right">
                    <input type="text" placeholder="Tìm kiếm nhanh..."/>
                </div>
            </div>
        </div>
    </div>
</div><!--/header-bottom-->