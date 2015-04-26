<?php /* Smarty version 2.6.28, created on 2015-04-26 20:02:00
         compiled from article.tpl */ ?>
<script src="<?php echo $this->_config[0]['vars']['adminpage_style_dir']; ?>
/ckeditor/ckeditor.js"></script>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><?php echo $this->_tpl_vars['obj']->mHeaderCaption; ?>
</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<form action="http://localhost/eshopper/index.php?admin" method="POST">
    <textarea name="editor1" id="editor1" rows="10" cols="80">
        This is my textarea to be replaced with CKEditor.
    </textarea>
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
    </script>
</form>