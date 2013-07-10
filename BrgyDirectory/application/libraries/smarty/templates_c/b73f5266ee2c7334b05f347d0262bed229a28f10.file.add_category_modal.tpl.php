<?php /* Smarty version Smarty-3.1.13, created on 2013-07-10 11:02:41
         compiled from "C:\wamp\www\ICextensions\application\views\modals\add_category_modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1584751dae2be305944-44328748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b73f5266ee2c7334b05f347d0262bed229a28f10' => 
    array (
      0 => 'C:\\wamp\\www\\ICextensions\\application\\views\\modals\\add_category_modal.tpl',
      1 => 1373453740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1584751dae2be305944-44328748',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51dae2be3917a6_12276826',
  'variables' => 
  array (
    'site_url' => 0,
    'add_category_alert' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dae2be3917a6_12276826')) {function content_51dae2be3917a6_12276826($_smarty_tpl) {?><div id="add_category" class="modal hide fade">
    <form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
categories/add" method="post">

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3>Add Category</h3>
        </div>

        <div class="modal-body">

            <?php if (isset($_smarty_tpl->tpl_vars['add_category_alert']->value)){?>
                <?php echo $_smarty_tpl->tpl_vars['add_category_alert']->value;?>

            <?php }?>
            
            <div class="control-group">
                <label class="control-label">Category Name: </label>
                <div class="controls">
                    <input type="text" name="category" value="" autofocus>
                </div>
            </div>

        </div>

        <div class="modal-footer">
            <a href="#" class="btn" data-dismiss="modal">Close</a>
            <button class="btn btn-primary" type="submit">Add</button>
        </div>
    </form>
</div><?php }} ?>