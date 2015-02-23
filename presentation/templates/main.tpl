{* main *}
{config_load file="site.conf"}
{load_presentation_object filename=$smarty.template assign="obj"}
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>{$obj->mPageTitle} | {#site_title#}</title>
        <link href="{#css_dir#}bootstrap.min.css" rel="stylesheet">
        <link href="{#css_dir#}font-awesome.min.css" rel="stylesheet">
        <link href="{#css_dir#}prettyPhoto.css" rel="stylesheet">
        <link href="{#css_dir#}price-range.css" rel="stylesheet">
        <link href="{#css_dir#}animate.css" rel="stylesheet">
        <link href="{#css_dir#}main.css" rel="stylesheet">
        <link href="{#css_dir#}responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{#img_dir#}ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{#img_dir#}ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{#img_dir#}ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="{#img_dir#}ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->

    <body>
        <header id="header"><!--header-->
            {* Because mainpage does not have any plugin *}
            {include file=$this.filename|cat:"/"|cat:$obj->mIncludedTemplate.layouts.MAIN_HEADER.name parent=$this}
        </header><!--/header-->

        {include file=$obj->mContentsCell}

        <footer id="footer"><!--Footer-->
            {include file=$this.filename|cat:"/"|cat:$obj->mIncludedTemplate.layouts.MAIN_FOOTER.name parent=$this}
        </footer><!--/Footer-->

        <script src="{#js_dir#}jquery.js"></script>
        <script src="{#js_dir#}bootstrap.min.js"></script>
        <script src="{#js_dir#}jquery.scrollUp.min.js"></script>
        <script src="{#js_dir#}price-range.js"></script>
        <script src="{#js_dir#}jquery.prettyPhoto.js"></script>
        <script src="{#js_dir#}main.js"></script>
        <script src="{#js_dir#}private.js"></script>
    </body>
</html>