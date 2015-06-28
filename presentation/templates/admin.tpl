{* admin *}
{config_load file="site.conf"}
{config_load file="htmlcode.conf"}
{load_presentation_object filename=$smarty.template family=0 assign="obj"}
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Huy Huynh">

        <title>{$obj->mPageTitle} {if isset($obj->mPageTitle)}|{/if} {#site_title#}</title>

        <!-- Bootstrap Core CSS -->
        <link href="{#adminpage_style_dir#}bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="{#adminpage_style_dir#}bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="{#adminpage_style_dir#}dist/css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{#adminpage_style_dir#}dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="{#adminpage_style_dir#}bower_components/morrisjs/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{#adminpage_style_dir#}bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <link rel="stylesheet" type="text/css" href="{#adminpage_style_dir#}ext/css/upload.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-brand" style="float:left" href="{$obj->mAdminUrl}"><b><font face="Bradley Hand ITC" size="6">[ -- ADMINISTRATOR -- ]</font></b></a>
                </div>
                <div class="navbar-header" style="float:right">
                    <a class="navbar-brand" href="{$obj->mSiteUrl}" style="color: #0088cc"><i class="fa fa-long-arrow-left fa-fw"></i> <i>Quay Về Trang Chủ</i></a>
                </div>
                <!-- /.navbar-header -->

                {include file="`$obj->filename`/`$obj->mIncludedTemplate.layouts.leftsidebar.name`" site_dir=$obj->filename family=$family included_template=$obj->mIncludedTemplate}
                <!-- /.navbar-static-side -->
            </nav>

            <div id="page-wrapper">
                {*tpl file in Content Cell is root file has the same level with admin in directory*}
                {include file=$obj->mContentsCell family=0 site_dir=$obj->filename}
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="{#adminpage_style_dir#}bower_components/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{#adminpage_style_dir#}bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{#adminpage_style_dir#}bower_components/metisMenu/dist/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="{#adminpage_style_dir#}bower_components/raphael/raphael-min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{#adminpage_style_dir#}dist/js/sb-admin-2.js"></script>
        <script src="{#adminpage_style_dir#}ext/js/upload.js"></script>

        <script src="{#adminpage_style_dir#}ext/js/main.js"></script>

    </body>

</html>
