{* contact *}
{load_presentation_object filename=$smarty.template family=$family assign="obj"}
{assign var=plugins value=$smarty.const.PLUGIN} 

<div id="contact-page" class="container">
    <div class="bg">
        <div class="row">
            <div class="col-sm-12">    			   			
                {include file=$plugins|cat:"/"|cat:$obj->mIncludedTemplate.$plugins.layouts.gmap}
            </div>
        </div>  
        <div class="row">                     
            <div class="col-sm-4">    			   			
                {include file=$plugins|cat:"/"|cat:$obj->mIncludedTemplate.$plugins.layouts.contact_info}
            </div>
            <div class="col-sm-8">    			   			
                {include file=$plugins|cat:"/"|cat:$obj->mIncludedTemplate.$plugins.layouts.contact_form}
            </div>

        </div>   
    </div>	
</div><!--/#contact-page-->
<script src="{#frontpage_js_dir#}vbdmap.js"></script>