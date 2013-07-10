<?php /* Smarty version Smarty-3.1.13, created on 2013-07-10 11:02:40
         compiled from "C:\wamp\www\ICextensions\application\views\modals\add_user_modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2765951dae2bd9e3296-02045652%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6148278b473505b7caacf0942ab56997401120e8' => 
    array (
      0 => 'C:\\wamp\\www\\ICextensions\\application\\views\\modals\\add_user_modal.tpl',
      1 => 1373453739,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2765951dae2bd9e3296-02045652',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51dae2bdc528c3_47689599',
  'variables' => 
  array (
    'site_url' => 0,
    'add_user_alert' => 0,
    'val_username' => 0,
    'val_email' => 0,
    'categories' => 0,
    'i' => 0,
    'val_assigned_to' => 0,
    'val_firstname' => 0,
    'val_middlename' => 0,
    'val_lastname' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dae2bdc528c3_47689599')) {function content_51dae2bdc528c3_47689599($_smarty_tpl) {?><div id="add_user" class="modal hide fade">
    <form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
users/add" method="post">

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3>Add User</h3>
        </div>

        <div class="modal-body">

            <?php if (isset($_smarty_tpl->tpl_vars['add_user_alert']->value)){?>
                <?php echo $_smarty_tpl->tpl_vars['add_user_alert']->value;?>

            <?php }?>

            <legend>Login Information</legend>

            <div class="control-group">
                <label class="control-label">Username: </label>
                <div class="controls">
                    <input type="text" name="username" value="<?php if (isset($_smarty_tpl->tpl_vars['val_username']->value)){?><?php echo $_smarty_tpl->tpl_vars['val_username']->value;?>
<?php }?>">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Password: </label>
                <div class="controls">
                    <input type="password" name="password">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Confirm Password: </label>
                <div class="controls">
                    <input type="password" name="confpass">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Email: </label>
                <div class="controls">
                    <input type="email" name="email" value="<?php if (isset($_smarty_tpl->tpl_vars['val_email']->value)){?><?php echo $_smarty_tpl->tpl_vars['val_email']->value;?>
<?php }?>">
                </div>
            </div>
                
            <!-- 
            <div class="control-group">
                <label class="control-label">Assign To Upload: </label>
                <div class="controls">
                    <select name="assigned_to">
                        <option></option>
                        
                        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['val_assigned_to']->value)&&$_smarty_tpl->tpl_vars['val_assigned_to']->value==$_smarty_tpl->tpl_vars['i']->value['id']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</option>
                        <?php } ?>
                        
                    </select>
                </div>
            </div>
            -->

            <legend>Personal Information</legend>

            <div class="control-group">
                <label class="control-label">First Name: </label>
                <div class="controls">
                    <input type="text" name="firstname" value="<?php if (isset($_smarty_tpl->tpl_vars['val_firstname']->value)){?><?php echo $_smarty_tpl->tpl_vars['val_firstname']->value;?>
<?php }?>">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Middle Name: </label>
                <div class="controls">
                    <input type="text" name="middlename" value="<?php if (isset($_smarty_tpl->tpl_vars['val_middlename']->value)){?><?php echo $_smarty_tpl->tpl_vars['val_middlename']->value;?>
<?php }?>">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Last Name: </label>
                <div class="controls">
                    <input type="text" name="lastname" value="<?php if (isset($_smarty_tpl->tpl_vars['val_lastname']->value)){?><?php echo $_smarty_tpl->tpl_vars['val_lastname']->value;?>
<?php }?>">
                </div>
            </div>

        </div>

        <div class="modal-footer">
            <a href="#" class="btn" data-dismiss="modal">Close</a>
            <button class="btn btn-primary" type="submit">Add</button>
        </div>
    </form>
</div><?php }} ?>