{load_presentation_object filename=$smarty.template family=$family assign="obj"}

<script src="{#adminpage_style_dir#}/ckeditor/ckeditor.js"></script>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">{$obj->mIncludedTemplate.captions}</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="container">
    <div class="row">
        <div class="contact-form">
            <form class="contact-form row" name="contact-form" enctype="multipart/form-data" action="{$obj->mUploadImgLink}" method="post">
                <div class="form-group col-md-12">
                    <textarea name="editor1" id="editor1" rows="10" cols="80">
                This is my textarea to be replaced with CKEditor.
                    </textarea>
                </div>
                <div class="row">
                    <div class="form-group col-md-8">
                    </div>
                    <div class="form-group col-md-2">
                        <input type="submit" name="update" class="btn btn-primary btn-full pull-right btn-block" value="Cập nhật">
                    </div>
                    <div class="form-group col-md-2">
                        <input type="button" name="clear" class="btn btn-primary btn-full pull-right btn-block" value="Xóa trắng">
                    </div>
                </div>
                </br>
                <div class="form-group col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <b>Tải thêm ảnh mới</b>
                        </div>
                        <div class="panel-body">
                            <div class="form-group col-md-12">
                                Chỉ được phép upload những file ảnh JPEG,PNG,JPG. Kích thước ảnh phải nhỏ hơn 5MB.
                            </div>
                            <div class="form-group col-md-12">
                                {$obj->mMsgUploadStatus}
                            </div>
                            <div id="filediv" class="form-group col-md-12">
                                <input name="file[]" type="file" id="file"/>
                            </div>
                            <div class="form-group col-md-2 "><input class="btn btn-full btn-primary pull-right btn-block" type="button" id="add_more" value="Thêm ảnh"/></div>
                            <div class="form-group col-md-2 "><input class="btn btn-full btn-primary pull-right btn-block" type="submit" value="Upload ảnh" name="upload" id="upload"/></div>
                            <div class="form-group col-md-8">
                            </div> 
                        </div>
                    </div>
                </div>
            </form>
            <!------- Including PHP Script here ------>
            <?php include "upload.php"; ?>
        </div>
    </div>
</div>