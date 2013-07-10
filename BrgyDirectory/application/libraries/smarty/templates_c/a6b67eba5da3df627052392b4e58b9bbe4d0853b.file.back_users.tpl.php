<?php /* Smarty version Smarty-3.1.13, created on 2013-07-10 11:02:52
         compiled from "C:\wamp\www\ICextensions\application\views\content\back_users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2785751dd3f5c973537-67858748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6b67eba5da3df627052392b4e58b9bbe4d0853b' => 
    array (
      0 => 'C:\\wamp\\www\\ICextensions\\application\\views\\content\\back_users.tpl',
      1 => 1373453742,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2785751dd3f5c973537-67858748',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'users' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51dd3f5cb58992_67586620',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dd3f5cb58992_67586620')) {function content_51dd3f5cb58992_67586620($_smarty_tpl) {?><div class="navbar">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand">List of Users</a>
            <ul class="nav pull-right">
                <li><a href="#add_user" data-toggle="modal">Add User <!--<i class="icon-check"></i>--></a></li>
            </ul>
        </div>
    </div>
</div>

<p class="well well-small">
    <button id="select_all" class="btn">Select All</button>
    <button id="select_none" class="btn">Select None</button>
    <button id="delete_selected_users" class="btn">Delete Selected</button>
</p>

<table class="table table-bordered table-hover data-table">

    <thead>
        <tr>
            <th>Username</th>  
            <th>Name</th>
            <th>Email</th>
            <!-- <th>Assigned to upload</th>-->
            <th>Controls</th>
        </tr>
    </thead>

    <tbody>
        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
            <tr>
                <td>
                    <label class="checkbox">
                        <input class="entry" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" /> <?php echo $_smarty_tpl->tpl_vars['i']->value['username'];?>

                    </label>
                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value['middlename'];?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value['lastname'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['email'];?>
</td>
                <!-- <td><?php echo $_smarty_tpl->tpl_vars['i']->value['assigned_to'];?>
</td>-->

                <td>
                    <a href="#" class="btn btn-small" onclick="deleteUser(<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
);">Delete<!--<i class="icon-trash"></i>--></a>
                </td>
                
            </tr>
        <?php } ?>
    </tbody>
</table>
<?php }} ?>