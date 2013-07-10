<?php /* Smarty version Smarty-3.1.13, created on 2013-07-10 11:02:39
         compiled from "C:\wamp\www\ICextensions\application\views\templates\back.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1636751dae2bc7226b5-73368077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e68839174f33f040fe9fa4c7ca643e068a29b4f8' => 
    array (
      0 => 'C:\\wamp\\www\\ICextensions\\application\\views\\templates\\back.tpl',
      1 => 1373453747,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1636751dae2bc7226b5-73368077',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51dae2bd237c06_31731001',
  'variables' => 
  array (
    'base_url' => 0,
    'title' => 0,
    'active_menu_item' => 0,
    'site_url' => 0,
    'account_type' => 0,
    'firstname' => 0,
    'middle_initial' => 0,
    'lastname' => 0,
    'content' => 0,
    'footer' => 0,
    'add_user_alert' => 0,
    'add_category_alert' => 0,
    'upload_web_alert' => 0,
    'edit_settings_alert' => 0,
    'edit_web_alert' => 0,
    'uri' => 0,
    'alert' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dae2bd237c06_31731001')) {function content_51dae2bd237c06_31731001($_smarty_tpl) {?><!DOCTYPE html>
<html class="no-js">
    <head>
        <link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/img/favicon.ico">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/css/bootstrap.css">
        <style>
            /*
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
            */

            #header{
                background-image: url('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/application/views/img/header.png');
                background-repeat: no-repeat;
                height: 105px;
                /*margin-top: -20px;*/
                margin-bottom: -5px;
            }
            #footer{
                background-image: url('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/application/views/img/footer.png');
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
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/css/bootstrap-responsive.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/dataTables/DT_bootstrap.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/bootstrap-lightbox/bootstrap-lightbox.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/font_awesome/css/font-awesome.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/css/main.css">

        <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body id="gradientbody">
        <div class="container" style="margin-top: 15px; border: 1px solid black; -webkit-box-shadow: 5px 4px 3px 1px rgba(172, 172, 172, 1);
             box-shadow: 5px 4px 3px 1px rgba(172, 172, 172, 1);  border-radius: 10px;
             padding: 10px;">
            <div id="body" class="container">
                <div class="row">
                    <div class="span12">

                        
                        <div id="header"></div>

                        
                        <div class="navbar navbar-inverse">
                            <div class="navbar-inner">
                                <div class="container">
                                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    
                                    <div class="nav-collapse collapse">
                                        <ul class="nav">
                                            <li <?php if ($_smarty_tpl->tpl_vars['active_menu_item']->value=="Home"){?>class="active"<?php }?>>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
administrator">Home</a>
                                            </li>
                                            <li class="dropdown <?php if ($_smarty_tpl->tpl_vars['active_menu_item']->value=="Websites"){?>active<?php }?>">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
websites">Websites</a>
                                            </li>
                                            <?php if (isset($_smarty_tpl->tpl_vars['account_type']->value)&&$_smarty_tpl->tpl_vars['account_type']->value=="Super Admin"){?>
                                                <li <?php if ($_smarty_tpl->tpl_vars['active_menu_item']->value=="Users"){?>class="active"<?php }?>>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
users">Users</a>
                                                </li>
                                                <!--
                                                <li <?php if ($_smarty_tpl->tpl_vars['active_menu_item']->value=="Categories"){?>class="active"<?php }?>>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
categories">Categories</a>
                                                </li>
                                                -->
                                            <?php }?>
                                        </ul>
                                        <ul class="nav pull-right">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hi! <?php echo $_smarty_tpl->tpl_vars['firstname']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['middle_initial']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>
 <b class="caret"></b></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#edit_settings" data-toggle="modal"><i class="icon-cog"></i>&nbsp;&nbsp;&nbsp;&nbsp; Settings</a></li>
                                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
administrator/logout"><i class="icon-off"></i>&nbsp;&nbsp;&nbsp;&nbsp Logout</a></li>
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

                                <?php if (isset($_smarty_tpl->tpl_vars['account_type']->value)&&$_smarty_tpl->tpl_vars['account_type']->value=="Super Admin"){?>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
websites/discover_sites">Discover Sites</a></li>
                                    <li><a href="#add_user" data-toggle="modal">Add User Admin</a></li>
                                    <!-- <li><a href="#add_category" data-toggle="modal">Add Category</a></li>-->
                                <?php }?>

                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
" target="_blank">View Homepage</a></li>

                                <li class="nav-header"><i class="icon-user icon-white"></i>&nbsp;User Navigation</li>
                                <hr style="margin-top: -1px; margin-bottom: 5px;"/>
                                <li><a href="#edit_settings" data-toggle="modal">Settings</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
administrator/logout">Logout</a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="span9">
                        <?php if (isset($_smarty_tpl->tpl_vars['content']->value)){?>
                            
                            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['content']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                        <?php }?>
                    </div>
                </div>
            </div>

            <?php if (isset($_smarty_tpl->tpl_vars['footer']->value)){?>
                
                <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


            <?php }?>
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ('upload_website_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ('add_user_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ('edit_settings.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ('edit_website_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ('loading_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ('add_category_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
        <script>window.jQuery || document.write('<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/js/vendor/jquery-1.9.1.js"><\/script>');</script>
        <!--<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/js/vendor/jquery-1.9.1.js"></script>-->
        <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/js/vendor/bootstrap.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/dataTables/jquery.dataTables.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/dataTables/DT_bootstrap.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/js/vendor/bootbox.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/bootstrap-lightbox/bootstrap-lightbox.js"></script>

        <script type="text/javascript">
            var site_url = "<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
";
        </script>

        <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/js/main.js"></script>

        <?php if (isset($_smarty_tpl->tpl_vars['add_user_alert']->value)){?>
            
                <script type="text/javascript">
            $(document).ready(function() {
                $('#add_user').modal('show');
            });
                </script>
            
        <?php }?>

        <?php if (isset($_smarty_tpl->tpl_vars['add_category_alert']->value)){?>
            
                <script type="text/javascript">
            $(document).ready(function() {
                $('#add_category').modal('show');
            });
                </script>
            
        <?php }?>

        <?php if (isset($_smarty_tpl->tpl_vars['upload_web_alert']->value)){?>
            
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#upload_website').modal('show');
                    });
                </script>
            
        <?php }?>

        <?php if (isset($_smarty_tpl->tpl_vars['edit_settings_alert']->value)){?>
            
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#edit_settings').modal('show');
                    });
                </script>
            
        <?php }?>

        <?php if (isset($_smarty_tpl->tpl_vars['edit_web_alert']->value)){?>
            
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#edit_website').modal('show');
                    });
                </script>
            
        <?php }?>

        <?php if (isset($_smarty_tpl->tpl_vars['uri']->value)&&$_smarty_tpl->tpl_vars['uri']->value=="edit"){?>
            <script type="text/javascript">

                
                    $(document).ready(function() {
                        $('#edit_website').modal('show');
                    });
                
            </script>
        <?php }?>

        <script type="text/javascript">
            <?php if ($_smarty_tpl->tpl_vars['alert']->value!=''){?>
                $(document).ready(function() {
                bootbox.alert("<?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
");
            });
            <?php }?>
        </script>
    </body>
</html><?php }} ?>