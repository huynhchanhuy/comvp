{* home *}
{load_presentation_object filename=$smarty.template family=$family assign="obj"}

<section id="slider"><!--slider-->
    {include file=$obj->filename|cat:"/"|cat:$obj->mIncludedTemplate.layouts.HOME_SLIDER.name famliy=$family}
</section><!--/slider-->

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                {include file=$obj->filename|cat:"/"|cat:$obj->mIncludedTemplate.layouts.HOME_LEFT_SIDEBAR.name family=$family }
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    {include file=$obj->filename|cat:"/"|cat:$obj->mIncludedTemplate.layouts.HOME_TODAY_ITEMS.name family=$family }
                </div><!--features_items-->

                <div class="category-tab"><!--category-tab-->
                    {include file=$obj->filename|cat:"/"|cat:$obj->mIncludedTemplate.layouts.HOME_CATEGORY_TAB.name family=$family }
                </div><!--/category-tab-->

                <div class="recommended_items"><!--recommended_items-->
                    {include file=$obj->filename|cat:"/"|cat:$obj->mIncludedTemplate.layouts.HOME_TOP_CHOICES.name family=$family }
                </div><!--/recommended_items-->

            </div>
        </div>
    </div>
</section>