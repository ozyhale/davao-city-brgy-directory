<?php /* Smarty version Smarty-3.1.13, created on 2013-07-10 11:02:41
         compiled from "C:\wamp\www\ICextensions\application\views\modals\edit_website_modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128151dae2bdf11b04-18616472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03b33c71a0206549c12eb00b7a56e7422188e038' => 
    array (
      0 => 'C:\\wamp\\www\\ICextensions\\application\\views\\modals\\edit_website_modal.tpl',
      1 => 1373453740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128151dae2bdf11b04-18616472',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51dae2be205d92_69458981',
  'variables' => 
  array (
    'site_url' => 0,
    'id' => 0,
    'edit_web_alert' => 0,
    'val_name' => 0,
    'val_desc' => 0,
    'val_dist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dae2be205d92_69458981')) {function content_51dae2be205d92_69458981($_smarty_tpl) {?><div id="edit_website" class="modal hide fade">

    <form id="load" class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
websites/update/<?php if (isset($_smarty_tpl->tpl_vars['id']->value)){?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>" method="post" enctype="multipart/form-data">

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3>Edit Barangay Website</h3>
        </div>

        <div class="modal-body">

            <?php if (isset($_smarty_tpl->tpl_vars['edit_web_alert']->value)){?>
                <?php echo $_smarty_tpl->tpl_vars['edit_web_alert']->value;?>

            <?php }?>

            <legend>Site Information</legend>

            <div class="control-group">
                <label class="control-label">Name: </label>
                <div class="controls">
                    <input type="text" name="name" value="<?php if (isset($_smarty_tpl->tpl_vars['val_name']->value)){?><?php echo $_smarty_tpl->tpl_vars['val_name']->value;?>
<?php }?>" />
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Description: </label>
                <div class="controls">
                    <textarea name="description"><?php if (isset($_smarty_tpl->tpl_vars['val_desc']->value)){?><?php echo $_smarty_tpl->tpl_vars['val_desc']->value;?>
<?php }?></textarea>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">District: </label>
                <div class="controls">
                    <select name="district">
                        <option></option>
                        <option <?php if (isset($_smarty_tpl->tpl_vars['val_dist']->value)&&$_smarty_tpl->tpl_vars['val_dist']->value=="District I"){?>selected<?php }?>>District I</option>
                        <option <?php if (isset($_smarty_tpl->tpl_vars['val_dist']->value)&&$_smarty_tpl->tpl_vars['val_dist']->value=="District II"){?>selected<?php }?>>District II</option>
                        <option <?php if (isset($_smarty_tpl->tpl_vars['val_dist']->value)&&$_smarty_tpl->tpl_vars['val_dist']->value=="District III"){?>selected<?php }?>>District III</option>
                    </select>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Logo: </label>
                <div class="controls">
                    <input type="file" name="logo" />
                    <span class="help-block">Recommended logo's dimensions: 150x150</span>
                </div>
            </div>

        </div>

        <div class="modal-footer">
            <a href="#" class="btn" data-dismiss="modal">Close</a>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div><?php }} ?>