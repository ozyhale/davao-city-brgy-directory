<?php /* Smarty version Smarty-3.1.13, created on 2013-07-10 11:02:40
         compiled from "C:\wamp\www\ICextensions\application\views\content\back_home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1510051dae2bd56db11-46685180%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af1bf36fb3e82eee6c958686fdbb47ff1e802bc5' => 
    array (
      0 => 'C:\\wamp\\www\\ICextensions\\application\\views\\content\\back_home.tpl',
      1 => 1373453740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1510051dae2bd56db11-46685180',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51dae2bd5ed3a0_77703319',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dae2bd5ed3a0_77703319')) {function content_51dae2bd5ed3a0_77703319($_smarty_tpl) {?>
<div class="hero-unit" style="padding: 0px;">

    <div id="myCarousel" class="carousel slide" data-interval="2000" >

        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">

            <div id="gradient1" style="border-radius: 1px;" class="active item"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/img/step1.png"/></div>
            <div id="gradient2" style="border-radius: 1px;" class="item"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/img/step2.png"/></div>
            <div id="gradient3" style="border-radius: 1px;" class="item"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/img/step3.png"/></div>
        </div>

    </div>

</div>
<?php }} ?>