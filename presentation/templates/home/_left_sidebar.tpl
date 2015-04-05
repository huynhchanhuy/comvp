{* left_sidebar *}
{config_load file="site.conf"}
{load_presentation_object filename=$smarty.template family=$family assign="obj"}

<div class="left-sidebar">
        <h2>Tuần này có gì ?</h2>
        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                <div class="panel panel-default">
                        <div class="panel-heading">
                                <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                                <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                                Thứ Hai
                                        </a>
                                </h4>
                        </div>
                        <div id="sportswear" class="panel-collapse collapse">
                                <div class="panel-body">
                                        <ul>
                                                <li><a href="#">Món 1</a></li>
                                                <li><a href="#">Món 2</a></li>
                                                <li><a href="#">Món 3</a></li>
                                                <li><a href="#">Món 4</a></li>
                                                <li><a href="#">Món 5</a></li>
                                        </ul>
                                </div>
                        </div>
                </div>
                <div class="panel panel-default">
                        <div class="panel-heading">
                                <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                                                <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                                Thứ Ba
                                        </a>
                                </h4>
                        </div>
                        <div id="mens" class="panel-collapse collapse">
                                <div class="panel-body">
                                        <ul>
                                                <li><a href="#">Món 1</a></li>
                                                <li><a href="#">Món 2</a></li>
                                                <li><a href="#">Món 3</a></li>
                                                <li><a href="#">Món 4</a></li>
                                                <li><a href="#">Món 5</a></li>
                                        </ul>
                                </div>
                        </div>
                </div>

                <div class="panel panel-default">
                        <div class="panel-heading">
                                <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                                                <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                                Thứ tư
                                        </a>
                                </h4>
                        </div>
                        <div id="womens" class="panel-collapse collapse">
                                <div class="panel-body">
                                        <ul>
                                                <li><a href="#">Món 1</a></li>
                                                <li><a href="#">Món 2</a></li>
                                                <li><a href="#">Món 3</a></li>
                                                <li><a href="#">Món 4</a></li>
                                                <li><a href="#">Món 5</a></li>
                                        </ul>
                                </div>
                        </div>
                </div>
                <div class="panel panel-default">
                        <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Thứ năm</a></h4>
                        </div>
                </div>
                <div class="panel panel-default">
                        <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Thứ sáu</a></h4>
                        </div>
                </div>
                <div class="panel panel-default">
                        <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Thứ bảy</a></h4>
                        </div>
                </div>
        </div><!--/category-products-->

        <div class="brands_products"><!--brands_products-->
                <h2>Thực Đơn</h2>
                <div class="brands-name">
                        <ul class="nav nav-pills nav-stacked">
                                <li><a href="#"> <span class="pull-right">(50)</span>Thịt</a></li>
                                <li><a href="#"> <span class="pull-right">(56)</span>Cá</a></li>
                                <li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
                                <li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
                                <li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
                                <li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
                                <li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
                        </ul>
                </div>
        </div><!--/brands_products-->

        {*<div class="price-range"><!--price-range-->
                <h2>Price Range</h2>
                <div class="well text-center">
                         <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                         <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                </div>
        </div><!--/price-range-->*}

        <div class="support"><!--price-range-->
                <h2>Hỗ trợ trực tuyến</h2>
                <div class="well text-center">
                         <a href="ymsgr:sendim?Nick_Của_Bạn" mce_href="ymsgr:sendim?{#yahoo_us#}" border="0"><img src="http://opi.yahoo.com/online?u={#yahoo_us#}&t=14" mce_src="http://opi.yahoo.com/online?u={#yahoo_us#}&t=14"></a>                         
                         <div>{#yahoo_supporter#}</div>
                </div>
        </div><!--/support-range-->
        
        <div class="statistics"><!--price-range-->
                <h2>Thống kê truy cập</h2>
                <div class="well text-center">
                         <div>Đang truy cập</div>
                         <div>Trong ngày</div>
                         <div>Trong tuần</div>
                         <div>Lượt truy cập</div>
                </div>
        </div><!--/support-range-->

        {*<div class="shipping text-center"><!--shipping-->
                <img src="images/home/shipping.jpg" alt="" />
        </div><!--/shipping-->*}

</div>