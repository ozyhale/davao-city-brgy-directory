<?php /* Smarty version Smarty-3.1.13, created on 2013-07-10 11:02:29
         compiled from "C:\wamp\www\ICextensions\application\views\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:951351dd3f45e1b632-07278578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e4ba5bc718014b4ccb493b572bbf2cd9f5c9e2c' => 
    array (
      0 => 'C:\\wamp\\www\\ICextensions\\application\\views\\templates\\login.tpl',
      1 => 1373453747,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '951351dd3f45e1b632-07278578',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
    'title' => 0,
    'site_url' => 0,
    'alert' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51dd3f477104e6_47125070',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dd3f477104e6_47125070')) {function content_51dd3f477104e6_47125070($_smarty_tpl) {?><!DOCTYPE html>
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
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/css/bootstrap-responsive.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/css/main.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/imageflow/imageflow.css">

        <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

        <style>  

            #login_bg{
                background-image: url('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/application/views/img/login_bg.png');
                background-repeat: no-repeat;
                width: 600px;
                height: 575px;  
            }

            #form_bg{
                background-image: url('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/application/views/img/form_bg.png');
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

                    <form method="post" style="padding: 10px;" class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
administrator/login">

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
                                <a class="btn" type="submit" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
"><i class="icon-home"></i></a>
                            </div>
                        </div>  


                    </form>

                    <?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                </div>
            </div>
        </div>

        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>-->
        <!--<script>window.jQuery || document.write('<script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/application/views/js/vendor/jquery-1.9.1.js"><\/script>')</script>-->

        <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/js/vendor/jquery-1.9.1.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/js/vendor/bootstrap.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/js/vendor/bootbox.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/js/main.js"></script>

        <script type="text/javascript">
            <?php if ($_smarty_tpl->tpl_vars['alert']->value!=''){?>
                $(document).ready(function() {
                bootbox.alert("<?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
");
            });
            <?php }?>
        </script>

    </body>
</html>
<?php }} ?>