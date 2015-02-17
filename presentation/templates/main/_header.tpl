{* header *}
{load_presentation_object filename=$smarty.template parentpage=$parent assign="obj"}
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
                    <a href="index.html"><img src="{#logo_dir#}" alt="" /></a>
                </div>
                <div class="btn-group pull-right">

                </div>
            </div>
            <div class="col-sm-8">
                <div class="shop-menu pull-right">
                    <ul class="nav navbar-nav">
                        <li><a href="#"><i class="fa fa-user"></i> Account</a></li>
                        <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
                        <li><a href="presentation\templates\checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                        <li><a href="presentation\templates\cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                        <li><a href="presentation\templates\login.html"><i class="fa fa-lock"></i> Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><!--/header-middle-->
{if isset($obj->mNavigation)}
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
                            <li><a href="{$obj->mNavigation.home.url}" class="{$obj->mNavigation.home.attr}">Trang Chủ</a></li>
                            <li><a href="{$obj->mNavigation.aboutus.url}" class="{$obj->mNavigation.aboutus.attr}">Chính Sách <i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="presentation\templates\shop.html">Giới Thiệu Chung</a></li>
                                    <li><a href="presentation\templates\product-details.html">Hướng Dẫn</a></li> 
                                    <li><a href="presentation\templates\checkout.html">Hỏi đáp</a></li>
                                </ul>
                            </li>
                            
                            <li><a href="{$obj->mNavigation.menu.url}" class="{$obj->mNavigation.menu.attr}" >Thực Đơn</a></li>
                            <li><a href="{$obj->mNavigation.contact.url}" class="{$obj->mNavigation.contact.attr}" >Liên Hệ</a></li>
                                
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
{/if}