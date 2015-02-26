<?php /* Smarty version 2.6.28, created on 2015-02-23 16:57:56
         compiled from main/_header/_header_bottom.tpl */ ?>
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