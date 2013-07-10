<!DOCTYPE html>
<html class="no-js">
    <head>
        <link rel="icon" type="image/png" href="{$base_url}application/views/img/favicon.ico">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>{$title}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="{$base_url}application/views/css/bootstrap.css">
        <style>
            /*
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
            */

            #header{
                background-image: url('{$base_url}/application/views/img/header.png');
                background-repeat: no-repeat;
                height: 105px;
                /*margin-top: -20px;*/
                margin-bottom: -5px;
            }
            #footer{
                background-image: url('{$base_url}/application/views/img/footer.png');
                background-repeat: no-repeat;
                height: 40px;
            }
            .b_side{
                background: -moz-linear-gradient(center top, rgb(144,2,3) 0%, rgb(64,1,15) 100%) repeat scroll 0% 0% transparent;
                background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgb(144,2,3)), color-stop(100%, rgb(64,1,15))) repeat scroll 0% 0% transparent;
                background: -o-linear-gradient(center top, rgb(144,2,3) 0%, rgb(64,1,15) 100%) repeat scroll 0% 0% transparent;
                border-radius: 16px 16px 16px 16px;
                box-shadow: 7px 7px 5px rgb(51,0,0);
            }
            #gradient1{

                background: #a90329; /* Old browsers */
                background: -moz-linear-gradient(top, #a90329 0%, #8f0222 44%, #dd0408 78%, #6d0019 100%); /* FF3.6+ */
                background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#a90329), color-stop(44%,#8f0222), color-stop(78%,#dd0408), color-stop(100%,#6d0019)); /* Chrome,Safari4+ */
                background: -webkit-linear-gradient(top, #a90329 0%,#8f0222 44%,#dd0408 78%,#6d0019 100%); /* Chrome10+,Safari5.1+ */
                background: -o-linear-gradient(top, #a90329 0%,#8f0222 44%,#dd0408 78%,#6d0019 100%); /* Opera 11.10+ */
                background: -ms-linear-gradient(top, #a90329 0%,#8f0222 44%,#dd0408 78%,#6d0019 100%); /* IE10+ */
                background: linear-gradient(to bottom, #a90329 0%,#8f0222 44%,#dd0408 78%,#6d0019 100%); /* W3C */
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a90329', endColorstr='#6d0019',GradientType=0 ); /* IE6-9 */
            }

            #gradient2{
                background: #a90329; /* Old browsers */
                background: -moz-linear-gradient(top, #a90329 0%, #d80435 20%, #8f0222 44%, #6d0019 100%); /* FF3.6+ */
                background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#a90329), color-stop(20%,#d80435), color-stop(44%,#8f0222), color-stop(100%,#6d0019)); /* Chrome,Safari4+ */
                background: -webkit-linear-gradient(top, #a90329 0%,#d80435 20%,#8f0222 44%,#6d0019 100%); /* Chrome10+,Safari5.1+ */
                background: -o-linear-gradient(top, #a90329 0%,#d80435 20%,#8f0222 44%,#6d0019 100%); /* Opera 11.10+ */
                background: -ms-linear-gradient(top, #a90329 0%,#d80435 20%,#8f0222 44%,#6d0019 100%); /* IE10+ */
                background: linear-gradient(to bottom, #a90329 0%,#d80435 20%,#8f0222 44%,#6d0019 100%); /* W3C */
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a90329', endColorstr='#6d0019',GradientType=0 ); /* IE6-9 */    
            }

            #gradient3{
                background: #cc0000; /* Old browsers */
                background: -moz-linear-gradient(top, #cc0000 0%, #aa0011 49%, #bf0003 67%, #cc0000 100%); /* FF3.6+ */
                background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#cc0000), color-stop(49%,#aa0011), color-stop(67%,#bf0003), color-stop(100%,#cc0000)); /* Chrome,Safari4+ */
                background: -webkit-linear-gradient(top, #cc0000 0%,#aa0011 49%,#bf0003 67%,#cc0000 100%); /* Chrome10+,Safari5.1+ */
                background: -o-linear-gradient(top, #cc0000 0%,#aa0011 49%,#bf0003 67%,#cc0000 100%); /* Opera 11.10+ */
                background: -ms-linear-gradient(top, #cc0000 0%,#aa0011 49%,#bf0003 67%,#cc0000 100%); /* IE10+ */
                background: linear-gradient(to bottom, #cc0000 0%,#aa0011 49%,#bf0003 67%,#cc0000 100%); /* W3C */
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cc0000', endColorstr='#cc0000',GradientType=0 ); /* IE6-9 */    
            }

            #gradientbody{
                background: rgb(255,255,255); /* Old browsers */
                background: -moz-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(241,241,241,1) 50%, rgba(225,225,225,1) 51%, rgba(246,246,246,1) 100%); /* FF3.6+ */
                background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,1)), color-stop(50%,rgba(241,241,241,1)), color-stop(51%,rgba(225,225,225,1)), color-stop(100%,rgba(246,246,246,1))); /* Chrome,Safari4+ */
                background: -webkit-linear-gradient(top, rgba(255,255,255,1) 0%,rgba(241,241,241,1) 50%,rgba(225,225,225,1) 51%,rgba(246,246,246,1) 100%); /* Chrome10+,Safari5.1+ */
                background: -o-linear-gradient(top, rgba(255,255,255,1) 0%,rgba(241,241,241,1) 50%,rgba(225,225,225,1) 51%,rgba(246,246,246,1) 100%); /* Opera 11.10+ */
                background: -ms-linear-gradient(top, rgba(255,255,255,1) 0%,rgba(241,241,241,1) 50%,rgba(225,225,225,1) 51%,rgba(246,246,246,1) 100%); /* IE10+ */
                background: linear-gradient(to bottom, rgba(255,255,255,1) 0%,rgba(241,241,241,1) 50%,rgba(225,225,225,1) 51%,rgba(246,246,246,1) 100%); /* W3C */
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#f6f6f6',GradientType=0 ); /* IE6-9 */
            }
            #body{
                background-color: white;
            }


        </style>
        <link rel="stylesheet" href="{$base_url}application/views/css/bootstrap-responsive.css">
        <link rel="stylesheet" href="{$base_url}application/views/dataTables/DT_bootstrap.css">
        <link rel="stylesheet" href="{$base_url}application/views/bootstrap-lightbox/bootstrap-lightbox.css">
        <link rel="stylesheet" href="{$base_url}application/views/font_awesome/css/font-awesome.css">
        <link rel="stylesheet" href="{$base_url}application/views/css/main.css">

        <script src="{$base_url}application/views/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body id="gradientbody">
        <div class="container" style="margin-top: 15px; border: 1px solid black; -webkit-box-shadow: 5px 4px 3px 1px rgba(172, 172, 172, 1);
             box-shadow: 5px 4px 3px 1px rgba(172, 172, 172, 1);  border-radius: 10px;
             padding: 10px;">
            <div id="body" class="container">
                <div class="row">
                    <div class="span12">

                        {*Header*}
                        <div id="header"></div>

                        {*Header Navigation*}
                        <div class="navbar navbar-inverse">
                            <div class="navbar-inner">
                                <div class="container">
                                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    {*<a class="brand" href="{$site_url}administrator">USEP IC Extensions</a>*}
                                    <div class="nav-collapse collapse">
                                        <ul class="nav">
                                            <li {if $active_menu_item == "Home"}class="active"{/if}>
                                                <a href="{$site_url}administrator">Home</a>
                                            </li>
                                            <li class="dropdown {if $active_menu_item == "Websites"}active{/if}">
                                                <a href="{$site_url}websites">Websites</a>
                                            </li>
                                            {if isset($account_type) && $account_type == "Super Admin"}
                                                <li {if $active_menu_item == "Users"}class="active"{/if}>
                                                    <a href="{$site_url}users">Users</a>
                                                </li>
                                                <!--
                                                <li {if $active_menu_item == "Categories"}class="active"{/if}>
                                                    <a href="{$site_url}categories">Categories</a>
                                                </li>
                                                -->
                                            {/if}
                                        </ul>
                                        <ul class="nav pull-right">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hi! {$firstname} {$middle_initial} {$lastname} <b class="caret"></b></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#edit_settings" data-toggle="modal"><i class="icon-cog"></i>&nbsp;&nbsp;&nbsp;&nbsp; Settings</a></li>
                                                    <li><a href="{$site_url}administrator/logout"><i class="icon-off"></i>&nbsp;&nbsp;&nbsp;&nbsp Logout</a></li>
                                                </ul>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="span3">
                        <div class="well b_side">
                            <ul class="nav nav-list">
                                <li class="nav-header"><i class="icon-globe icon-white"></i>&nbsp;Shortcuts</li>
                                <hr style="margin-top: -1px; margin-bottom: 5px;"/>
                                <li><a href="#upload_website" data-toggle="modal">Upload Website</a></li>

                                {if isset($account_type) && $account_type == "Super Admin"}
                                    <li><a href="{$site_url}websites/discover_sites">Discover Sites</a></li>
                                    <li><a href="#add_user" data-toggle="modal">Add User Admin</a></li>
                                    <!-- <li><a href="#add_category" data-toggle="modal">Add Category</a></li>-->
                                {/if}

                                <li><a href="{$base_url}" target="_blank">View Homepage</a></li>

                                <li class="nav-header"><i class="icon-user icon-white"></i>&nbsp;User Navigation</li>
                                <hr style="margin-top: -1px; margin-bottom: 5px;"/>
                                <li><a href="#edit_settings" data-toggle="modal">Settings</a></li>
                                <li><a href="{$site_url}administrator/logout">Logout</a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="span9">
                        {if isset($content)}
                            {*Content*}
                            {include file=$content}
                        {/if}
                    </div>
                </div>
            </div>

            {if isset($footer)}
                {*Footer*}
                {include file=$footer}

            {/if}
        </div>
        {include file='upload_website_modal.tpl'}
        {include file='add_user_modal.tpl'}
        {include file='edit_settings.tpl'}
        {include file='edit_website_modal.tpl'}
        {include file='loading_modal.tpl'}
        {include file='add_category_modal.tpl'}

        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
        <script>window.jQuery || document.write('<script src="{$base_url}application/views/js/vendor/jquery-1.9.1.js"><\/script>');</script>
        <!--<script src="{$base_url}application/views/js/vendor/jquery-1.9.1.js"></script>-->
        <script src="{$base_url}application/views/js/vendor/bootstrap.js"></script>
        <script src="{$base_url}application/views/dataTables/jquery.dataTables.js"></script>
        <script src="{$base_url}application/views/dataTables/DT_bootstrap.js"></script>
        <script src="{$base_url}application/views/js/vendor/bootbox.js"></script>
        <script src="{$base_url}application/views/bootstrap-lightbox/bootstrap-lightbox.js"></script>

        <script type="text/javascript">
            var site_url = "{$site_url}";
        </script>

        <script src="{$base_url}application/views/js/main.js"></script>

        {if isset($add_user_alert)}
            {literal}
                <script type="text/javascript">
            $(document).ready(function() {
                $('#add_user').modal('show');
            });
                </script>
            {/literal}
        {/if}

        {if isset($add_category_alert)}
            {literal}
                <script type="text/javascript">
            $(document).ready(function() {
                $('#add_category').modal('show');
            });
                </script>
            {/literal}
        {/if}

        {if isset($upload_web_alert)}
            {literal}
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#upload_website').modal('show');
                    });
                </script>
            {/literal}
        {/if}

        {if isset($edit_settings_alert)}
            {literal}
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#edit_settings').modal('show');
                    });
                </script>
            {/literal}
        {/if}

        {if isset($edit_web_alert)}
            {literal}
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#edit_website').modal('show');
                    });
                </script>
            {/literal}
        {/if}

        {if isset($uri) && $uri == "edit"}
            <script type="text/javascript">

                {literal}
                    $(document).ready(function() {
                        $('#edit_website').modal('show');
                    });
                {/literal}
            </script>
        {/if}

        <script type="text/javascript">
            {if $alert != ''}
                $(document).ready(function() {
                bootbox.alert("{$alert}");
            });
            {/if}
        </script>
    </body>
</html>