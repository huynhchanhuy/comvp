{* main *}
{config_load file="site.conf"}
{load_presentation_object filename=$smarty.template family=0 assign="obj"}
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Com van phong">
        <meta name="author" content="Huy Huynh">
        <title>{$obj->mPageTitle} {if isset($obj->mPageTitle)}|{/if} {#site_title#}</title>
        <link href="{#frontpage_css_dir#}bootstrap.min.css" rel="stylesheet">
        <link href="{#frontpage_css_dir#}font-awesome.min.css" rel="stylesheet">
        <link href="{#frontpage_css_dir#}prettyPhoto.css" rel="stylesheet">
        <link href="{#frontpage_css_dir#}price-range.css" rel="stylesheet">
        <link href="{#frontpage_css_dir#}animate.css" rel="stylesheet">
        <link href="{#frontpage_css_dir#}main.css" rel="stylesheet">
        <link href="{#frontpage_css_dir#}responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{#frontpage_img_dir#}ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{#frontpage_img_dir#}ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{#frontpage_img_dir#}ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="{#frontpage_img_dir#}ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->

    <body>
        <header id="header"><!--header-->
            {* Because mainpage does not have any plugin *}
            {include file="`$obj->filename`/`$obj->mIncludedTemplate.layouts.header.name`" family=$family}
        </header><!--/header-->

        {include file=$obj->mContentsCell family=0}

        <footer id="footer"><!--Footer-->
            {include file="`$obj->filename`/`$obj->mIncludedTemplate.layouts.footer.name`"  family=$family}
        </footer><!--/Footer-->

        <script src="{#frontpage_js_dir#}jquery.js"></script>
        <script src="{#frontpage_js_dir#}bootstrap.min.js"></script>
        <script src="{#frontpage_js_dir#}jquery.scrollUp.min.js"></script>
        <script src="{#frontpage_js_dir#}price-range.js"></script>
        <script src="{#frontpage_js_dir#}jquery.prettyPhoto.js"></script>
        <script src="{#frontpage_js_dir#}private.js"></script>
        <script src="{#frontpage_js_dir#}main.js"></script>
    </body>
</html>