{* header *}
{load_presentation_object filename=$smarty.template family=$family assign="obj"}
	
<section id="form"><!--form-->
        <div class="container">
                <div class="row">
                        <div class="col-sm-4 col-sm-offset-1">
                                {include file=$obj->filename|cat:"/"|cat:"_login_form.tpl" family=$family}
                        </div>
                        <div class="col-sm-1">
                                <h2 class="or">HOẶC</h2>
                        </div>
                        <div class="col-sm-4">
                                {include file=$obj->filename|cat:"/"|cat:"_signup_form.tpl" family=$family}
                        </div>
                </div>
        </div>
</section><!--/form-->