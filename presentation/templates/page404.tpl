{* 404 *}
{config_load file="site.conf"}
{page404 siteurl="obj"}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{#site_title#}</title>
    <link href="{#frontpage_css_dir#}/bootstrap.min.css" rel="stylesheet">
    <link href="{#frontpage_css_dir#}/font-awesome.min.css" rel="stylesheet">
    <link href="{#frontpage_css_dir#}/prettyPhoto.css" rel="stylesheet">
    <link href="{#frontpage_css_dir#}/price-range.css" rel="stylesheet">
    <link href="{#frontpage_css_dir#}/animate.css" rel="stylesheet">
	<link href="{#frontpage_css_dir#}/main.css" rel="stylesheet">
	<link href="{#frontpage_css_dir#}/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{#frontpage_img_dir#}/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{#frontpage_img_dir#}/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{#frontpage_img_dir#}/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="{#frontpage_img_dir#}/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<div class="container text-center">
		<div class="logo-404">
			<a href="{$obj}"><img src="{#frontpage_img_dir#}/home/logo.png" alt="" /></a>
		</div>
		<div class="content-404">
			<img src="{#_404_img_dir#}/404/404.png" class="img-responsive" alt="" />
			<h1><b>OPPS!</b> We Couldn’t Find this Page</h1>
			<p>Uh... So it looks like you brock something. The page you are looking for has up and Vanished.</p>
			<h2><a href="{$obj}">Bring me back Home</a></h2>
		</div>
	</div>

  
    <script src="{#frontpage_js_dir#}/jquery.js"></script>
	<script src{#frontpage_js_dir#}js/price-range.js"></script>
    <script src="{#frontpage_js_dir#}/jquery.scrollUp.min.js"></script>
	<script src="{#frontpage_js_dir#}/bootstrap.min.js"></script>
    <script src="{#frontpage_js_dir#}/jquery.prettyPhoto.js"></script>
    <script src="{#frontpage_js_dir#}/main.js"></script>
</body>
</html>