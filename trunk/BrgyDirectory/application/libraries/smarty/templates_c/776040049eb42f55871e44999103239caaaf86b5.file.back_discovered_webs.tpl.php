<?php /* Smarty version Smarty-3.1.13, created on 2013-07-08 16:03:15
         compiled from "C:\wamp\www\ICextensions\application\views\content\back_discovered_webs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212951dae2c3623484-32069891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '776040049eb42f55871e44999103239caaaf86b5' => 
    array (
      0 => 'C:\\wamp\\www\\ICextensions\\application\\views\\content\\back_discovered_webs.tpl',
      1 => 1373295024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212951dae2c3623484-32069891',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_url' => 0,
    'base_url' => 0,
    'added_websites' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51dae2c3726a41_61823842',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dae2c3726a41_61823842')) {function content_51dae2c3726a41_61823842($_smarty_tpl) {?><div class="navbar">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand">Discovered Websites</a>
            <ul class="nav pull-right">
                <li><a href="#upload_website" data-toggle="modal">Upload Website</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
websites/discover_sites">Discover Sites</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
" target="_blank">View Homepage</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
websites"><i class="icon-arrow-left"></i></a></li>
            </ul>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->tpl_vars['added_websites']->value;?>
<?php }} ?>