<?php /* Smarty version Smarty-3.1.13, created on 2013-07-10 11:02:40
         compiled from "C:\wamp\www\ICextensions\application\views\modals\upload_website_modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2453851dae2bd6f2bd9-44102757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '691e11700c2d5828991e607cb0a55b42a46b0369' => 
    array (
      0 => 'C:\\wamp\\www\\ICextensions\\application\\views\\modals\\upload_website_modal.tpl',
      1 => 1373453740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2453851dae2bd6f2bd9-44102757',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51dae2bd8b6443_85032125',
  'variables' => 
  array (
    'site_url' => 0,
    'upload_web_alert' => 0,
    'account_type' => 0,
    'categories' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dae2bd8b6443_85032125')) {function content_51dae2bd8b6443_85032125($_smarty_tpl) {?><div id="upload_website" class="modal hide fade">

    <form id="load" class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
websites/upload" method="post" enctype="multipart/form-data">

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3>Upload Baranggay Website</h3>
        </div>

        <div class="modal-body">

            <?php if (isset($_smarty_tpl->tpl_vars['upload_web_alert']->value)){?>
                <?php echo $_smarty_tpl->tpl_vars['upload_web_alert']->value;?>

            <?php }?>

            <legend>Site Information</legend>

            <div class="control-group">
                <label class="control-label">Site Name: </label>
                <div class="controls">
                    <input type="text" name="site_name" placeholder="Brgy Name" />
                </div>
            </div>
            
            <div class="control-group">
                <label class="control-label">Web Files: </label>
                <div class="controls">
                    <input type="file" name="web_files" />
                    <span class="help-block">The file to be uploaded must be in zip format and have no spaces on its name. In a zip file, must have 1 folder and in that folder must have all the web files. The Folder's name(Barangay name) inside the zip file must match the zip's filename. For more information click <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
help" target="_blank">here</a></span>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Description: </label>
                <div class="controls">
                    <textarea name="description"></textarea>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">District: </label>
                <div class="controls">
                    <select name="district">
                        <option></option>
                        <option>District I</option>
                        <option>District II</option>
                        <option>District III</option>
                    </select>
                </div>
            </div>

            <!--
            <?php if (isset($_smarty_tpl->tpl_vars['account_type']->value)&&$_smarty_tpl->tpl_vars['account_type']->value=="Super Admin"){?>
                <div class="control-group">
                    <label class="control-label">Category: </label>
                    <div class="controls">
                        <select name="category">
                            <option></option>
                            
                            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</option>
                            <?php } ?>
                            
                        </select>
                    </div>
                </div>
            <?php }?>
            -->

            <div class="control-group">
                <label class="control-label">Logo: </label>
                <div class="controls">
                    <input type="file" name="logo" />
                    <span class="help-block">Recommended logo's dimensions: 200x200</span>
                </div>
            </div>

            <legend>Database Information</legend>

            <div class="control-group">
                <label class="control-label">Database Name: </label>
                <div class="controls">
                    <input type="text" name="database" />
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">SQL File: </label>
                <div class="controls">
                    <input type="file" name="sql" />
                </div>
            </div>

        </div>

        <div class="modal-footer">
            <a href="#" class="btn" data-dismiss="modal">Close</a>
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>
</div><?php }} ?>