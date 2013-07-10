<?php /* Smarty version Smarty-3.1.13, created on 2013-07-10 11:02:41
         compiled from "C:\wamp\www\ICextensions\application\views\modals\edit_settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:279251dae2bdd3bf43-50331914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d509c2ccf237de93d406a946b69a84076fca768' => 
    array (
      0 => 'C:\\wamp\\www\\ICextensions\\application\\views\\modals\\edit_settings.tpl',
      1 => 1373453739,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '279251dae2bdd3bf43-50331914',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51dae2bde3df86_70869677',
  'variables' => 
  array (
    'site_url' => 0,
    'edit_settings_alert' => 0,
    'username' => 0,
    'email' => 0,
    'firstname' => 0,
    'middlename' => 0,
    'lastname' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dae2bde3df86_70869677')) {function content_51dae2bde3df86_70869677($_smarty_tpl) {?><div id="edit_settings" class="modal hide fade">

    <form class="form-horizontal" method="post" action="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
administrator/update_settings">

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3>Account Settings</h3>
        </div>

        <div class="modal-body">

            <?php if (isset($_smarty_tpl->tpl_vars['edit_settings_alert']->value)){?>
                <?php echo $_smarty_tpl->tpl_vars['edit_settings_alert']->value;?>

            <?php }?>
            
            <legend>Login Information</legend>
            <div class="control-group">
                <label class="control-label">Username: </label>
                <div class="controls">
                    <input type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
">
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
                    <input type="password" name="passconf">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Email: </label>
                <div class="controls">
                    <input type="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
">
                </div>
            </div>

            <legend>Personal Information</legend>

            <div class="control-group">
                <label class="control-label">First Name: </label>
                <div class="controls">
                    <input type="text" name="firstname" value="<?php echo $_smarty_tpl->tpl_vars['firstname']->value;?>
">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Middle Name: </label>
                <div class="controls">
                    <input type="text" name="middlename" value="<?php echo $_smarty_tpl->tpl_vars['middlename']->value;?>
">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Last Name: </label>
                <div class="controls">
                    <input type="text" name="lastname" value="<?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>
">
                </div>
            </div>

            <legend>Authentication</legend>

            <div class="control-group">
                <label class="control-label">Password: </label>
                <div class="controls">
                    <input type="password" name="authpass">
                </div>
            </div>
            
        </div>

        <div class="modal-footer">
            <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
administrator" class="btn" data-dismiss="modal">Close</a>
            <button type="submit" class="btn btn-primary">Save</button> 
        </div>
    </form>
</div>
<?php }} ?>