<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
        <link rel="icon" type="image/png" href="{$base_url}application/views/img/favicon.ico">
        <meta charset="utf-8">
        <title>Home</title>
        <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

        <link rel="stylesheet" href="{$base_url}application/views/css/bootstrap.css" media="screen">
        <link rel="stylesheet" href="{$base_url}application/views/css/bootstrap-responsive.css" media="screen">
        <link rel="stylesheet" href="{$base_url}application/views/css/style.css" media="screen"> 
        <link rel="stylesheet" href="{$base_url}application/views/css/style.responsive.css" media="all">

        <link rel="stylesheet" href="{$base_url}application/views/css/default.css" media="all">
        <link rel="stylesheet" href="{$base_url}application/views/css/demo2.css" media="all">

        <link rel="stylesheet" href="{$base_url}application/views/dataTables/DT_bootstrap.css">
        <link rel="stylesheet" href="{$base_url}application/views/bxslider/jquery.bxslider.css">

        <script src="{$base_url}application/views/css/jquery.js"></script>
        <script src="{$base_url}application/views/css/script.js"></script>
        <script src="{$base_url}application/views/css/script.responsive.js"></script>

        <script src="{$base_url}application/views/js/init.js" type="text/javascript"></script>
        <script src="{$base_url}application/views/js/jquery.easing.js" type="text/javascript"></script>
        <script src="{$base_url}application/views/js/scroller.js" type="text/javascript"></script>

        <style>
            #art-main
            {               
                background: url('{$base_url}application/views/templates/images/page.png') top center no-repeat scroll;
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
            background: url('{$base_url}application/views/img/footermain.png'); 
            background-repeat:no-repeat;
            background-position:bottom center;
            height: 280px;
        }
            */

            .ice_content{
                padding-left: 3px; padding-right: 3px;
                background: #FFF;
                background: url('{$base_url}application/views/img/footermain.png');
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
                display:block;
                margin:0 auto;
            }

            table.logos tbody tr td, table.logos thead tr th{
                border-color: black;
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
        <link rel="stylesheet" href="{$base_url}application/views/css/dcbd-responsive.css" media="screen">
    </head>
    <body>
        <nav class="art-nav">
            <div class="art-nav-inner">
                <ul class="art-hmenu">
                    <li><a href="{$base_url}" {if $active_menu_item == "Home"}class="active"{/if}>Home</a></li>
                    <li><a href="{$site_url}" {if $active_menu_item != "Home" && $active_menu_item != "About"}class="active"{/if}>Districts</a>
                        <ul>
                            <li><a href="{$site_url}home/districts/1">District 1</a></li>
                            <li><a href="{$site_url}home/districts/2">District 2</a></li>
                            <li><a href="{$site_url}home/districts/3">District 3</a></li>
                        </ul>
                    </li>
                    <li><a href="{$site_url}about" {if $active_menu_item == "About"}class="active"{/if}>About</a></li>
                </ul>
            </div>
        </nav>

        <div class="container ice_content" id="squarecontent">

            <div class="row">
                <div class="span12">
                    <!--<img id="ice_header" style="border-radius: 8px;" src="{$base_url}application/views/img/puzzle-page.png" />-->

                    <img class="hidden-desktop" src="{$base_url}application/views/img/puzzle-page.png" />
                    
                    <div id="puzzle_div" class="visible-desktop">
                        <div style="text-align: center; ">
                            <img id="game" src="{$base_url}application/views/img/puzzle-page.png" <!--height="340" style="max-width: 1170px;"--> />
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
                        <form action="{$base_url}" class="art-search" method="get">

                            {if isset($search)}
                                <input type="text" value="{$search}" name="search" />
                            {else}
                                <input type="text" value="" name="search" />
                            {/if}

                            <input type="submit" value="Search" class="art-search-button" />
                        </form>
                    </div>
                </div>
            </div>

            <br />

            <!-- Content-->
            {include file=$content}
        </div>

        <div class="art-sheet clearfix"></div>

        {*
        <div id="art-main">
        <nav class="art-nav">
        <div class="art-nav-inner">
        <ul class="art-hmenu">
        <li><a href="{$base_url}" class="active">Home</a></li>
        <li><a href="{$site_url}">Districts</a>
        <ul>
        <li><a href="{$site_url}home/districts/1">District 1</a></li>
        <li><a href="{$site_url}home/districts/2">District 2</a></li>
        <li><a href="{$site_url}home/districts/3">District 3</a></li>
        </ul>
        </li>
        <li><a href="{$site_url}about">About</a></li>
        </ul>
        </div>
        </nav>
        <!-- Header-->

        <div id="puzzle_div" >
        <div style="text-align: center; ">
        <img id="game" src="{$base_url}application/views/img/puzzle-page.png" height="340" style="max-width: 1207px;" />
        </div>
        </div>

        <header class="art-header">

        <div class="art-shapes">
        <h1 class="art-headline" data-left="3.39%">
        <a href="{$site_url}">Davao City Barangay Directory</a>
        </h1>
        <h2 class="art-slogan" data-left="40.88%">A Barangay Site Directory</h2>
        </div>

        </header>

        <div class="container">

        <p class="pull-right">
        <!-- for debugging-->
        <!--<button class="art-button" onclick="levelUp();">Level-up!</button>-->
        <!-- /for debugging-->
        <button id="play_puzzle" class="art-button">Play puzzle</button>
        <button id="give_up_puzzle" class="art-button">Give-up</button>
        <button id="shuffle_puzzle" class="art-button">Shuffle</button>
        <button id="retry_puzzle" class="art-button">Play Again</button>
        <button id="help_puzzle" class="art-button">Help</button>
        <span id="level_puzzle">| Level: <span id="level_value_puzzle"></span></span>
        </p>

        <div class="container">
        <form action="{$base_url}" class="art-search" method="get">

        {if isset($search)}
        <input type="text" value="{$search}" name="search" />
        {else}
        <input type="text" value="" name="search" />
        {/if}

        <input type="submit" value="Search" class="art-search-button" />
        </form>
        </div>
        </div>

        <div class="art-sheet clearfix">
        <div class="art-layout-wrapper">
        <div class="art-content-layout">
        <div class="art-content-layout-row">
        <div class="art-layout-cell art-content">
        <div class="art-block clearfix">
        <div class="art-blockcontent">

        </div>
        </div>
        <div class="art-blockcontent">
        <!-- Content-->
        {include file=$content}
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>

        <!-- Footer-->
        <div style="text-align: center;" id="footermain"> </div>
        <footer class="art-footer">
        <div class="art-footer-inner">
        <p style="text-align: center;"><a href="{$site_url}">Home</a>|<a href="{$site_url}developer">Developers</a></p>
        <p style="text-align: center;"><span style="text-align: right;">Copyright © 2012-2013. USeP-IC Extension.</span><br></p>
        </div>
        </footer>

        </div>
        *}

        {include file="help_puzzle_modal.tpl"}

        <footer class="art-footer">
            <div class="art-footer-inner">
                <p style="text-align: center;"><a href="{$site_url}">Home</a>|<a href="{$site_url}developer">Developers</a></p>
                <p style="text-align: center;"><span style="text-align: right;">Copyright © 2012-2013. USeP-IC Extension.</span><br></p>
            </div>
        </footer>

        <script src="{$base_url}application/views/js/snapfit.js" type="text/javascript"></script>
        <script src="{$base_url}application/views/js/vendor/bootstrap.js" type="text/javascript"></script>
        <script src="{$base_url}application/views/js/vendor/bootbox.js" type="text/javascript"></script>

        <script src="{$base_url}application/views/dataTables/jquery.dataTables.js"></script>
        <script src="{$base_url}application/views/dataTables/DT_bootstrap.js"></script>
        <script src="{$base_url}application/views/js/puzzle.js" type="text/javascript"></script>
        <script src="{$base_url}application/views/bxslider/jquery.bxslider.min.js" type="text/javascript"></script>

        <script type="text/javascript">
            var base_url = '{$base_url}';

            $(document).ready(function() {
                $('.bxslider').bxSlider();
            });

        </script>
    </body>
</html>
