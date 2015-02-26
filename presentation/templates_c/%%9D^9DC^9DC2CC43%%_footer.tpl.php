<?php /* Smarty version 2.6.28, created on 2015-02-26 17:18:30
         compiled from main/_footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'main/_footer.tpl', 2, false),array('modifier', 'cat', 'main/_footer.tpl', 10, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'main/_footer.tpl','parentpage' => $this->_tpl_vars['parent'],'assign' => 'obj'), $this);?>

<?php $this->assign('plugins', @PLUGIN); ?> 

<div class="footer-top">
        <div class="container">
                <div class="row">
                        <div class="col-sm-5">
                                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['plugins'])) ? $this->_run_mod_handler('cat', true, $_tmp, "/") : smarty_modifier_cat($_tmp, "/")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['obj']->mIncludedTemplate[$this->_tpl_vars['plugins']]['layouts']['PLUGIN_GMAP']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['obj']->mIncludedTemplate[$this->_tpl_vars['plugins']]['layouts']['PLUGIN_GMAP'])), 'smarty_include_vars' => array('parent' => $this->_tpl_vars['plugins'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                        </div>
                        <div class="col-sm-4">
                                <div class="col-sm-3">
                                        <div class="video-gallery text-center">
                                                <a href="#">
                                                        <div class="iframe-img">
                                                                <img src="images/home/iframe1.png" alt="" />
                                                        </div>
                                                        <div class="overlay-icon">
                                                                <i class="fa fa-play-circle-o"></i>
                                                        </div>
                                                </a>
                                                <p>Circle of Hands</p>
                                                <h2>24 DEC 2014</h2>
                                        </div>
                                </div>

                                <div class="col-sm-3">
                                        <div class="video-gallery text-center">
                                                <a href="#">
                                                        <div class="iframe-img">
                                                                <img src="images/home/iframe2.png" alt="" />
                                                        </div>
                                                        <div class="overlay-icon">
                                                                <i class="fa fa-play-circle-o"></i>
                                                        </div>
                                                </a>
                                                <p>Circle of Hands</p>
                                                <h2>24 DEC 2014</h2>
                                        </div>
                                </div>

                                <div class="col-sm-3">
                                        <div class="video-gallery text-center">
                                                <a href="#">
                                                        <div class="iframe-img">
                                                                <img src="images/home/iframe3.png" alt="" />
                                                        </div>
                                                        <div class="overlay-icon">
                                                                <i class="fa fa-play-circle-o"></i>
                                                        </div>
                                                </a>
                                                <p>Circle of Hands</p>
                                                <h2>24 DEC 2014</h2>
                                        </div>
                                </div>

                                <div class="col-sm-3">
                                        <div class="video-gallery text-center">
                                                <a href="#">
                                                        <div class="iframe-img">
                                                                <img src="images/home/iframe4.png" alt="" />
                                                        </div>
                                                        <div class="overlay-icon">
                                                                <i class="fa fa-play-circle-o"></i>
                                                        </div>
                                                </a>
                                                <p>Circle of Hands</p>
                                                <h2>24 DEC 2014</h2>
                                        </div>
                                </div>
                        </div>
                        <div class="col-sm-3">
                                <div class="address">
                                        <img src="images/home/map.png" alt="" />
                                        <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
                                </div>
                        </div>
                </div>
        </div>
</div>


<div class="footer-bottom">
        <div class="container">
                <div class="row">
                        <p class="pull-left">Copyright © 2015 Cơm văn phòng. All rights reserved.</p>
                        <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span> | Edited by: Huy Huynh.</p>
                </div>
        </div>
</div>