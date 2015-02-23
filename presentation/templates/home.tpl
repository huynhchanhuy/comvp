{* home *}
{load_presentation_object filename=$smarty.template assign="obj"}

<section id="slider"><!--slider-->
    {include file=$this.filename|cat:"/"|cat:$obj->mIncludedTemplate.layouts.HOME_SLIDER.name parent=$this}
</section><!--/slider-->

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                {include file=$this.filename|cat:"/"|cat:$obj->mIncludedTemplate.layouts.HOME_LEFT_SIDEBAR.name parent=$this}
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    {include file=$this.filename|cat:"/"|cat:$obj->mIncludedTemplate.layouts.HOME_TODAY_ITEMS.name parent=$this}
                </div><!--features_items-->

                <div class="category-tab"><!--category-tab-->
                    {include file=$this.filename|cat:"/"|cat:$obj->mIncludedTemplate.layouts.HOME_CATEGORY_TAB.name parent=$this}
                </div><!--/category-tab-->

                <div class="recommended_items"><!--recommended_items-->
                    {include file=$this.filename|cat:"/"|cat:$obj->mIncludedTemplate.layouts.HOME_TOP_CHOICES.name parent=$this}
                </div><!--/recommended_items-->

            </div>
        </div>
    </div>
</section>