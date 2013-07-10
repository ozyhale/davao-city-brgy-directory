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
        <link rel="stylesheet" href="{$base_url}application/views/css/bootstrap-responsive.css">
        <link rel="stylesheet" href="{$base_url}application/views/css/main.css">
        <link rel="stylesheet" href="{$base_url}application/views/imageflow/imageflow.css">

        <script src="{$base_url}application/views/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

        <style>  

            #login_bg{
                background-image: url('{$base_url}/application/views/img/login_bg.png');
                background-repeat: no-repeat;
                width: 600px;
                height: 575px;  
            }

            #form_bg{
                background-image: url('{$base_url}/application/views/img/form_bg.png');
                background-repeat: no-repeat;
                height: 220px;
                width: 415px;
                margin-top: 180px;
                margin-left: 100px;
            }

        </style>
    </head>
    <body>
        <div class="container"><center/>

            <div id="login_bg" class="row">
                <div  id="form_bg" class="span5" style="margin-left: 100x; margin-top: 130px;" >

                    <form method="post" style="padding: 10px;" class="form-horizontal" action="{$site_url}administrator/login">

                        <legend>Administrator Login</legend>

                        <div class="control-group">
                            <label class="control-label">Username: </label>
                            <div class="controls">
                                <input type="text" placeholder="Enter Your Username" name = "username" autofocus required>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Password: </label>
                            <div class="controls">
                                <input type="password" placeholder="Enter Your Password" name = "password" required>
                                <button class="btn btn-primary" type="submit">Go to Cpanel</button>
                                <a class="btn" type="submit" href="{$base_url}"><i class="icon-home"></i></a>
                            </div>
                        </div>  


                    </form>

                    {include file='footer.tpl'}
                </div>
            </div>
        </div>

        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>-->
        <!--<script>window.jQuery || document.write('<script src="{$base_url}/application/views/js/vendor/jquery-1.9.1.js"><\/script>')</script>-->

        <script src="{$base_url}application/views/js/vendor/jquery-1.9.1.js"></script>
        <script src="{$base_url}application/views/js/vendor/bootstrap.js"></script>
        <script src="{$base_url}application/views/js/vendor/bootbox.js"></script>
        <script src="{$base_url}application/views/js/main.js"></script>

        <script type="text/javascript">
            {if $alert != ''}
                $(document).ready(function() {
                bootbox.alert("{$alert}");
            });
            {/if}
        </script>

    </body>
</html>
