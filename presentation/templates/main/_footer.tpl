{* footer *}
{load_presentation_object filename=$smarty.template family=$family assign="obj"}
{assign var=plugins value=$smarty.const.PLUGIN} 
{*--> get from constant variables that were defined in config.php*}

{*<div class="footer-top">
        <div class="container">
                <div class="row">
                        <div class="col-sm-5">
                                {include file=$plugins|cat:"/"|cat:$obj->mIncludedTemplate.$plugins.layouts.gmap}
                        </div>
                        <div class="col-sm-4">
                                {include file=$plugins|cat:"/"|cat:$obj->mIncludedTemplate.$plugins.layouts.contact_info}
                        </div>
                        <div class="col-sm-3">
                                {include file=$plugins|cat:"/"|cat:$obj->mIncludedTemplate.$plugins.layouts.subscribed_form}
                        </div>
                </div>
        </div>
</div>*}

<div class="footer-bottom">
        <div class="container">
                <div class="row">
                        <p class="pull-left">Copyright © 2015 Cơm văn phòng. All rights reserved.</p>
                        <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span> | Edited by: Huy Huynh - Email: huynhchanhuy@gmail.com .</p>
                </div>
        </div>
</div>
