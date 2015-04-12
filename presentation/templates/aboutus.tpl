{* aboutus *}
{load_presentation_object filename=$smarty.template family=$family assign="obj"}

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 padding-right">
                <div id="intro" class="features_items"><!--features_items-->
                    {include file=$obj->filename|cat:"/"|cat:$obj->mIncludedTemplate.layouts.ABOUTUS_INTRO.name famliy=$family}

                </div><!--features_items-->

                <div id="help" class="category-tab"><!--category-tab-->
                    {include file=$obj->filename|cat:"/"|cat:$obj->mIncludedTemplate.layouts.ABOUTUS_HELP.name famliy=$family}

                </div><!--/category-tab-->

                <div id="faq" class="recommended_items"><!--recommended_items-->
                    {include file=$obj->filename|cat:"/"|cat:$obj->mIncludedTemplate.layouts.ABOUTUS_FAQ.name famliy=$family}

                    
                </div><!--/recommended_items-->

            </div>
        </div>
    </div>
</section>