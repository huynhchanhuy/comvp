<?php /* Smarty version 2.6.28, created on 2015-05-31 18:20:28
         compiled from home/_left_sidebar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'home/_left_sidebar.tpl', 2, false),array('function', 'load_presentation_object', 'home/_left_sidebar.tpl', 3, false),array('modifier', 'cat', 'home/_left_sidebar.tpl', 104, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => "site.conf"), $this);?>

<?php echo smarty_function_load_presentation_object(array('filename' => 'home/_left_sidebar.tpl','family' => $this->_tpl_vars['family'],'assign' => 'obj'), $this);?>

<?php $this->assign('plugins', @PLUGIN); ?> 
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
        <div id="subscribed" class="contact-form brands_products">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['plugins'])) ? $this->_run_mod_handler('cat', true, $_tmp, "/") : smarty_modifier_cat($_tmp, "/")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['obj']->mIncludedTemplate[$this->_tpl_vars['plugins']]['layouts']['subscribed_form']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['obj']->mIncludedTemplate[$this->_tpl_vars['plugins']]['layouts']['subscribed_form'])), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </div>
        
        <div class="support"><!--price-range-->
                <h2>Hỗ trợ trực tuyến</h2>
                <div class="well text-center">
                         <a href="#" mce_href="ymsgr:sendim?<?php echo $this->_config[0]['vars']['yahoo_us']; ?>
" border="0"><img src="http://opi.yahoo.com/online?u=<?php echo $this->_config[0]['vars']['yahoo_us']; ?>
&t=14" mce_src="http://opi.yahoo.com/online?u=<?php echo $this->_config[0]['vars']['yahoo_us']; ?>
&t=14"></a>                         
                         <div><?php echo $this->_config[0]['vars']['yahoo_supporter']; ?>
</div>
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

        
</div>