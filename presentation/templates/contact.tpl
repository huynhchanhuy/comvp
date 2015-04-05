{* contact *}
{load_presentation_object filename=$smarty.template module=$module  assign="obj"}

<div id="contact-page" class="container">
    <div class="bg">
            <div class="row">    		
                    <div class="col-sm-12">    			   			
                                {include file=$smarty.const.PLUGIN_LAYOUT_NAME|cat:"/"|cat:#plugin_gmap_tpl# parent=$smarty.const.PLUGIN_LAYOUT_NAME}
                    </div>			 		
            </div>    	
            <div class="row">  	
                    <div class="col-sm-8">
                                {include file=$smarty.const.PLUGIN_LAYOUT_NAME|cat:"/"|cat:#plugin_contact_form_tpl# parent=$smarty.const.PLUGIN_LAYOUT_NAME}
                    </div>
                    <div class="col-sm-4">
                                {include file=$smarty.const.PLUGIN_LAYOUT_NAME|cat:"/"|cat:#plugin_contact_info_tpl# parent=$smarty.const.PLUGIN_LAYOUT_NAME}
                    </div>    			
            </div>  
    </div>	
</div><!--/#contact-page-->