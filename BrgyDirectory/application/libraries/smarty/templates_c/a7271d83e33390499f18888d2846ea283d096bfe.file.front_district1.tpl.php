<?php /* Smarty version Smarty-3.1.13, created on 2013-07-08 15:43:33
         compiled from "C:\wamp\www\ICextensions\application\views\content\front_district1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1431451dade2558ead3-64512374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7271d83e33390499f18888d2846ea283d096bfe' => 
    array (
      0 => 'C:\\wamp\\www\\ICextensions\\application\\views\\content\\front_district1.tpl',
      1 => 1373295025,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1431451dade2558ead3-64512374',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'district1' => 0,
    'i' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51dade25accf48_52799640',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dade25accf48_52799640')) {function content_51dade25accf48_52799640($_smarty_tpl) {?><script>
    function myFunction(link) {

    var dump = link;
    window.open(dump, '_blank');
}

</script>



<div id="content">

    <?php if (!empty($_smarty_tpl->tpl_vars['district1']->value)){?>

        <table style=" border-color: black;"class="text-info table table-bordered table-hover data-table-no-search">

            <thead>
                <tr>
                    <th style=" border-color: black;" colspan="3">DISTRICT 1</th>
                </tr>
                <tr>
                    <th style=" border-color: black;">Name</th>
                    <th style=" border-color: black;">Description</th>
                    <th style=" border-color: black;">URL</th>
                </tr>
            </thead>

            <tbody>
                <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['district1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                    <tr>
                        <td style="border-color: black;color: rgb(32,77,92);"><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</td>
                        <td style="border-color: black;color: rgb(32,77,92);"><?php echo $_smarty_tpl->tpl_vars['i']->value['description'];?>
</td>
                        <td style="border-color: black;"><a style="color: rgb(32,77,92);" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
</td>
                    <?php } ?>
            </tbody>
        </table>

        <div id="content">
            <h5 style="color: rgb(58,135,173); font-family: inherit; font-size: 35px;" class="title1">District 1</h5>
            <div class="scroller dist1">
                <div class="inside">

                    <?php if (count($_smarty_tpl->tpl_vars['district1']->value)<=2){?>
                        <a href="#" ><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/img/arrowleft.png"  alt="more"><button style="color: transparent; outline: 0px; position: absolute; background-color: transparent; left: 40%; top: 40%; bottom: 40%; height: 20px; width: 40px;" class="btn btn-link"></button></img></a>
                            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['district1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?> 
                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
" ><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['logo'];?>
"  alt="<?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
"><button style="color: transparent; outline: 0px; position: absolute; background-color: transparent; left: 40%; top: 40%; bottom: 40%; height: 30px; width: 40px;"onclick="myFunction('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
');" class="btn btn-link"></button></img></a>                           
                            <?php } ?>
                        <a href="#" ><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/img/arrowright.png"  alt="more"><button style="color: transparent; outline: 0px; position: absolute; background-color: transparent; left: 40%; top: 40%; bottom: 40%; height: 20px; width: 40px;" class="btn btn-link"></button></img></a>
                        <?php }else{ ?>
                        <a href="#" ><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/img/arrowleft.png"  alt="more"><button style="color: transparent; outline: 0px; position: absolute; background-color: transparent; left: 40%; top: 40%; bottom: 40%; height: 20px; width: 40px;" class="btn btn-link"></button></img></a>
                            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['district1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>                            
                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
" ><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['logo'];?>
"  alt="<?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
"><button style="color: transparent; outline: 0px; position: absolute; background-color: transparent; left: 40%; top: 40%; bottom: 40%; height: 20px; width: 40px;"onclick="myFunction('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
');" class="btn btn-link"></button></img></a>                           
                            <?php } ?>
                        <a href="#" ><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
application/views/img/arrowright.png"  alt="more"><button style="color: transparent; outline: 0px; position: absolute; background-color: transparent; left: 40%; top: 40%; bottom: 40%; height: 20px; width: 40px;" class="btn btn-link"></button></img></a>
                        <?php }?>          

                <?php }else{ ?>
                    <div class="span10">
                        <h2 class="text-info">District 1</h2>
                        <h3 class="muted">Empty Directory</h3>                  
                    </div>
                <?php }?> 


            </div>
        </div>
    </div>

</div>
<?php }} ?>