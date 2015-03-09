{* header *}
{load_presentation_object filename=$smarty.template assign="obj"}
	
<section id="form"><!--form-->
        <div class="container">
                <div class="row">
                        <div class="col-sm-4 col-sm-offset-1">
                                {include file=$this.filename|cat:"/"|cat:"_login_form.tpl" parent=$this}
                        </div>
                        <div class="col-sm-1">
                                <h2 class="or">HOẶC</h2>
                        </div>
                        <div class="col-sm-4">
                                {include file=$this.filename|cat:"/"|cat:"_signup_form.tpl" parent=$this}
                        </div>
                </div>
        </div>
</section><!--/form-->