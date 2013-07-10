<?php /* Smarty version Smarty-3.1.13, created on 2013-07-10 10:56:40
         compiled from "C:\wamp\www\ICextensions\application\views\templates\front.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2263951dad20f7fcc89-08976485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e02e17c98eafa9e0e860973716d5814e2f700871' => 
    array (
      0 => 'C:\\wamp\\www\\ICextensions\\application\\views\\templates\\front.tpl',
      1 => 1373453747,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2263951dad20f7fcc89-08976485',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51dad20fd3a4c1_59696406',
  'variables' => 
  array (
    'base_url' => 0,
    'active_menu_item' => 0,
    'site_url' => 0,
    'search' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dad20fd3a4c1_59696406')) {function content_51dad20fd3a4c1_59696406($_smarty_tpl) {?><!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
        <link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/img/favicon.ico">
        <meta charset="utf-8">
        <title>Home</title>
        <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/css/bootstrap.css" media="screen">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/css/bootstrap-responsive.css" media="screen">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/css/style.css" media="screen"> 
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/css/style.responsive.css" media="all">

        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/css/default.css" media="all">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/css/demo2.css" media="all">

        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/dataTables/DT_bootstrap.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/bxslider/jquery.bxslider.css">

        <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/css/jquery.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/css/script.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/css/script.responsive.js"></script>

        <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/js/init.js" type="text/javascript"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/js/jquery.easing.js" type="text/javascript"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/js/scroller.js" type="text/javascript"></script>

        <style>
            #art-main
            {               
                background: url('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/templates/images/page.png') top center no-repeat scroll;
                margin:0 auto;
                font-size: 13px;
                font-family: Arial, 'Arial Unicode MS', Helvetica, Sans-Serif;
                position: relative;
                left: 0;
                top: 0;
                cursor:default;
                overflow:hidden;                 
            }

            /*
            #footermain
            {               
            background: url('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/img/footermain.png'); 
            background-repeat:no-repeat;
            background-position:bottom center;
            height: 280px;
        }
            */

            .ice_content{
                padding-left: 3px; padding-right: 3px;
                background: #FFF;
                background: url('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/img/footermain.png');
                background-repeat:no-repeat;
                background-position:bottom center;
                -moz-box-shadow: -1px 13px 19px #2C3A2D;
                -webkit-box-shadow: -1px 13px 19px #2C3A2D;
                box-shadow: -1px 13px 19px #2C3A2D;
                border: inherit 5px #000000;
                -moz-border-radius-bottomleft: 10px;
                -webkit-border-radius-bottomleft: 10px;
                border-radius-bottomleft: 10px;
                -moz-border-radius-bottomright: 10px;
                -webkit-border-radius-bottomright: 10px;
                border-radius-bottomright: 10px;
                border-radius-topright: 10px;
                -moz-border-radius-topright: 10px;
                -webkit-border-radius-topright: 10px;
                border-radius-topleft: 10px;
                -moz-border-radius-topleft: 10px;
                -webkit-border-radius-topleft: 10px;
                height:auto;
            }

            body{
                background: rgb(201,222,150); /* Old browsers */
                background: -moz-linear-gradient(top, rgba(201,222,150,1) 0%, rgba(138,182,107,1) 32%, rgba(57,130,53,1) 100%); /* FF3.6+ */
                background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(201,222,150,1)), color-stop(32%,rgba(138,182,107,1)), color-stop(100%,rgba(57,130,53,1))); /* Chrome,Safari4+ */
                background: -webkit-linear-gradient(top, rgba(201,222,150,1) 0%,rgba(138,182,107,1) 32%,rgba(57,130,53,1) 100%); /* Chrome10+,Safari5.1+ */
                background: -o-linear-gradient(top, rgba(201,222,150,1) 0%,rgba(138,182,107,1) 32%,rgba(57,130,53,1) 100%); /* Opera 11.10+ */
                background: -ms-linear-gradient(top, rgba(201,222,150,1) 0%,rgba(138,182,107,1) 32%,rgba(57,130,53,1) 100%); /* IE10+ */
                background: linear-gradient(to bottom, rgba(201,222,150,1) 0%,rgba(138,182,107,1) 32%,rgba(57,130,53,1) 100%); /* W3C */
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c9de96', endColorstr='#398235',GradientType=0 ); /* IE6-9 */
            }

            img.logo{
                max-height: 100px;
                max-width: 100px;
                display:block;
                margin:0 auto;
            }

            table.logos tbody tr td, table.logos thead tr th{
                border-color: black;
            }

            table.logos tbody tr td{
                height: 175px;
            }

            p.logo-caption{
                text-align: center;
                text-shadow: 0px 0px 12px #FFFFFF; 
                text-decoration: underline; 
                font-weight: bold;
            }

            .bx-wrapper .bx-controls-direction a {
                margin-top: -1px;         
            }
            
            .bx-wrapper .bx-viewport{
                background-color: transparent;
                border-color: transparent;
                box-shadow: 0pt 0pt 0px rgb(255,255,255);
            }
            
            #squarecontent{
                background-color: white;
            }
            
            #puzzle_div{
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <nav class="art-nav">
            <div class="art-nav-inner">
                <ul class="art-hmenu">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['active_menu_item']->value=="Home"){?>class="active"<?php }?>>Home</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['active_menu_item']->value!="Home"&&$_smarty_tpl->tpl_vars['active_menu_item']->value!="About"){?>class="active"<?php }?>>Districts</a>
                        <ul>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
home/districts/1">District 1</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
home/districts/2">District 2</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
home/districts/3">District 3</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
about" <?php if ($_smarty_tpl->tpl_vars['active_menu_item']->value=="About"){?>class="active"<?php }?>>About</a></li>
                </ul>
            </div>
        </nav>

        <div class="container ice_content" id="squarecontent">

            <div class="row">
                <div class="span12">
                    <!--<img id="ice_header" style="border-radius: 8px;" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/img/puzzle-page.png" />-->

                    <div id="puzzle_div" >
                        <div style="text-align: center; ">
                            <img id="game" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/img/puzzle-page.png" height="340" style="max-width: 1170px;" />
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">

                <div class="span6 visible-desktop">
                    <p>
                        <!-- for debugging-->
                        <!--<button class="art-button" onclick="levelUp();">Level-up!</button>-->
                        <!-- /for debugging-->
                        <button id="play_puzzle" class="art-button hidden">Play puzzle</button>
                        <button id="give_up_puzzle" class="art-button">Give-up</button>
                        <button id="shuffle_puzzle" class="art-button">Shuffle</button>
                        <!-- <button id="retry_puzzle" class="art-button">Play Again</button>-->
                        <button id="help_puzzle" class="art-button">Help</button>
                        <span id="level_puzzle" style="color: black; font-size: larger; font-weight: bold;">| Level: <span id="level_value_puzzle"></span></span>
                        
                    </p>
                </div>

                <div class="span6">
                    <div class="pull-right">
                        <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
" class="art-search" method="get">

                            <?php if (isset($_smarty_tpl->tpl_vars['search']->value)){?>
                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
" name="search" />
                            <?php }else{ ?>
                                <input type="text" value="" name="search" />
                            <?php }?>

                            <input type="submit" value="Search" class="art-search-button" />
                        </form>
                    </div>
                </div>
            </div>

            <br />

            <!-- Content-->
            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['content']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>

        <div class="art-sheet clearfix"></div>

        

        <?php echo $_smarty_tpl->getSubTemplate ("help_puzzle_modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


        <footer class="art-footer">
            <div class="art-footer-inner">
                <p style="text-align: center;"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">Home</a>|<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
developer">Developers</a></p>
                <p style="text-align: center;"><span style="text-align: right;">Copyright © 2012-2013. USeP-IC Extension.</span><br></p>
            </div>
        </footer>

        <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/js/snapfit.js" type="text/javascript"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/js/vendor/bootstrap.js" type="text/javascript"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/js/vendor/bootbox.js" type="text/javascript"></script>

        <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/dataTables/jquery.dataTables.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/dataTables/DT_bootstrap.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/js/puzzle.js" type="text/javascript"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/bxslider/jquery.bxslider.min.js" type="text/javascript"></script>

        <script type="text/javascript">
            var base_url = '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
';

            $(document).ready(function() {
            $('.bxslider').bxSlider();
        });

        </script>
    </body>
</html>
<?php }} ?>