<?php /* Smarty version Smarty-3.1.13, created on 2013-07-10 11:02:45
         compiled from "C:\wamp\www\ICextensions\application\views\content\back_websites.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2680651dae2cc696163-59467560%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7b4c5051244ff1a69818ca9e93f90508866b86f' => 
    array (
      0 => 'C:\\wamp\\www\\ICextensions\\application\\views\\content\\back_websites.tpl',
      1 => 1373453741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2680651dae2cc696163-59467560',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51dae2ccebd4b4_01310229',
  'variables' => 
  array (
    'account_type' => 0,
    'site_url' => 0,
    'base_url' => 0,
    'brgys' => 0,
    'i' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dae2ccebd4b4_01310229')) {function content_51dae2ccebd4b4_01310229($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\wamp\\www\\ICextensions\\application\\libraries\\smarty\\plugins\\modifier.capitalize.php';
?><div class="navbar">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand">List of Websites</a>
            <ul class="nav pull-right">
                <li>
                    <a href="#upload_website" data-toggle="modal">Upload Website</a>
                </li>

                <?php if (isset($_smarty_tpl->tpl_vars['account_type']->value)&&$_smarty_tpl->tpl_vars['account_type']->value=="Super Admin"){?>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
websites/discover_sites">Discover Sites</a>
                    </li>
                <?php }?>

                <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
" target="_blank">View Homepage</a></li>
            </ul>
        </div>
    </div>
</div>

<p class="well well-small">
    <button id="select_all" class="btn">Select All</button>
    <button id="select_none" class="btn">Select None</button>
    <button id="delete_selected" class="btn">Delete Selected</button>

    <?php if (isset($_smarty_tpl->tpl_vars['account_type']->value)&&$_smarty_tpl->tpl_vars['account_type']->value=="Super Admin"){?>
        <button id="activate_selected" class="btn">Activate Selected</button>
        <button id="deactivate_selected" class="btn">Deactivate Selected</button>
    <?php }?>

</p>

<table style="border-color: black;"class="table table-bordered table-hover data-table">

    <thead>
        <tr>
            <th style="border-color: black;">Name</th>  
            <th style="border-color: black;">Districts</th>
            <th style="border-color: black; max-width: 200px;">Description</th>
            <th style="border-color: black;">Date Activated</th>
            <!-- <th>Category</th>-->
            <th style="border-color: black;">Uploaded By</th>
            <th style="border-color: black;">Status</th>
            <th style="border-color: black;">Controls</th>
        </tr>
    </thead>

    <tbody>
        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brgys']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
            <tr>
                <td style="border-color: black;">
                    <label class="checkbox">
                        <input class="entry" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" /> <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['i']->value['name']);?>

                    </label>
                </td>
                <td style="border-color: black;"><?php echo $_smarty_tpl->tpl_vars['i']->value['district'];?>
</td>
                <td style="border-color: black;"><?php echo $_smarty_tpl->tpl_vars['i']->value['description'];?>
</td>
                <td style="border-color: black;"><?php echo $_smarty_tpl->tpl_vars['i']->value['date_registered'];?>
</td>
                <!-- <td><?php echo $_smarty_tpl->tpl_vars['i']->value['category'];?>
</td>-->
                <td style="border-color: black;"><?php echo $_smarty_tpl->tpl_vars['i']->value['uploaded_by'];?>
</td>

                <td style="border-color: black;">
                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['i']->value['status'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=='active'){?>
                        <span class="label label-success"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['i']->value['status']);?>
</span>
                    <?php }else{ ?>
                        <span class="label label-important"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['i']->value['status']);?>
</span>
                    <?php }?>

                    <div id="view_logo_<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" class="lightbox hide fade">
                        <div class='lightbox-header'>
                            <a href="#" class="close" data-dismiss="lightbox">&times;</a>
                        </div>
                        <div class='lightbox-content'>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['logo'];?>
" />
                        </div>
                    </div>

                </td>
                <td style="border-color: black;">

                    <div class="btn-group">
                        <button style="max-height: 26px;"class="btn dropdown-toggle btn-small" data-toggle="dropdown">
                            Action <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">

                            <?php if (isset($_smarty_tpl->tpl_vars['account_type']->value)&&$_smarty_tpl->tpl_vars['account_type']->value=="Super Admin"){?>

                                <?php if ($_smarty_tpl->tpl_vars['i']->value['status']=='active'){?>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
websites/deactivate/<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
">Deactivate</a></li>
                                    <?php }else{ ?>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
websites/activate/<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
">Activate</a></li>
                                    <?php }?>

                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['username']->value==$_smarty_tpl->tpl_vars['i']->value['uploaded_by']||$_smarty_tpl->tpl_vars['account_type']->value=="Super Admin"){?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
websites/edit/<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
">Edit</a></li>
                                <li><a href="#" onclick="deleteWebsite(<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
);">Delete</a></li>
                                <?php }?>

                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
" target="_blank">View Site</a></li>
                                <?php if (isset($_smarty_tpl->tpl_vars['i']->value['logo'])){?>
                                <li><a href="#view_logo_<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" data-toggle="lightbox">View Logo</a></li>
                                <?php }?>
                        </ul>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table><?php }} ?>