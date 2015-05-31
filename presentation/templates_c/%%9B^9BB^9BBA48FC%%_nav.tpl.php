<?php /* Smarty version 2.6.28, created on 2015-05-31 21:37:48
         compiled from admin/_nav.tpl */ ?>
<?php $_from = $this->_tpl_vars['included_template']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
    <li>

    <?php if (isset ( $this->_tpl_vars['item']['captions'] )): ?>
         
        <?php if (isset ( $this->_tpl_vars['item']['url'] )): ?>
            <?php $this->assign('url', $this->_tpl_vars['item']['url']); ?>
        <?php else: ?>
            <?php $this->assign('url', "#"); ?>
        <?php endif; ?>
        
        <?php if (isset ( $this->_tpl_vars['item']['cssclass'] )): ?>
            <?php $this->assign('cssclass', $this->_tpl_vars['item']['cssclass']); ?>
        <?php else: ?>
            <?php $this->assign('cssclass', ''); ?>
        <?php endif; ?>
        
        <a href="<?php echo $this->_tpl_vars['url']; ?>
"><i class="<?php echo $this->_tpl_vars['cssclass']; ?>
"></i> <?php echo $this->_tpl_vars['item']['captions']; ?>
 <?php if (isset ( $this->_tpl_vars['item']['cssmnlv'] )): ?><?php echo $this->_config[0]['vars']['arrow_sign']; ?>
<?php endif; ?></a>
    <?php endif; ?>

    <?php if (isset ( $this->_tpl_vars['item']['cssmnlv'] )): ?>
        <ul class="<?php echo $this->_tpl_vars['item']['cssmnlv']; ?>
">
    <?php endif; ?>
    
    <?php if (isset ( $this->_tpl_vars['item']['values'] )): ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['site_dir'])."/_nav.tpl", 'smarty_include_vars' => array('included_template' => $this->_tpl_vars['item']['values'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>        
    <?php endif; ?>
    
    <?php if (isset ( $this->_tpl_vars['item']['cssmnlv'] )): ?>
        </ul>
    <?php endif; ?>
    
    </li>
<?php endforeach; endif; unset($_from); ?>