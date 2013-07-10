<?php /* Smarty version Smarty-3.1.13, created on 2013-07-10 10:56:41
         compiled from "C:\wamp\www\ICextensions\application\views\content\front_home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1062051dad20feeae07-03297325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4182183d88bc763dc4701c182997ca4de51c69a5' => 
    array (
      0 => 'C:\\wamp\\www\\ICextensions\\application\\views\\content\\front_home.tpl',
      1 => 1373453741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1062051dad20feeae07-03297325',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51dad2111da127_15185960',
  'variables' => 
  array (
    'searched' => 0,
    'search' => 0,
    'i' => 0,
    'base_url' => 0,
    'district1' => 0,
    'x' => 0,
    'k' => 0,
    'district2' => 0,
    'district3' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dad2111da127_15185960')) {function content_51dad2111da127_15185960($_smarty_tpl) {?><script>
    function myFunction(link) {

        var dump = link;
        window.open(dump, '_blank');
    }
</script>

<?php if (isset($_smarty_tpl->tpl_vars['searched']->value)){?>

    <div class="container">

        <div class="row">

            <div class="span12">
                <h3 class="text-info">Searched results for "<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
"</h2>
            </div>

            <?php if (empty($_smarty_tpl->tpl_vars['searched']->value)){?>
                <div class="span12">
                    <h3 class="text-error">Empty Results</h3>
                </div>
            <?php }else{ ?>
                <div class="span12">

                    <table style="border-color: black;" class="text-info table table-bordered table-hover data-table-no-search">

                        <thead>
                            <tr>
                                <th style="border-color: black;" >Name</th>
                                <th style="border-color: black;" >Description</th>
                                <th style="border-color: black;" >District</th>
                                <th style="border-color: black;" >Logo</th>
                                <th style="border-color: black;" >URL</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['searched']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                                <tr>
                                    <td style="border-color: black; color: rgb(32,77,92);"><?php echo str_replace($_smarty_tpl->tpl_vars['search']->value,"<span class='text-error'><u>".((string)$_smarty_tpl->tpl_vars['search']->value)."</u></span>",$_smarty_tpl->tpl_vars['i']->value['name']);?>
</td>
                                    <td style="border-color: black; color: rgb(32,77,92);"><?php echo $_smarty_tpl->tpl_vars['i']->value['description'];?>
</td>
                                    <td style="border-color: black; color: rgb(32,77,92);"><?php echo $_smarty_tpl->tpl_vars['i']->value['district'];?>
</td>
                                    <td style="border-color: black;"><img height="50" width="50" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
"/></td>
                                    <td style="border-color: black;"><a style="color: rgb(32,77,92);" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
</a></td>
                                    <?php } ?>
                        </tbody>
                    </table>

                </div>
            <?php }?>
        </div>
    </div>

<?php }else{ ?>

    <div class="container">
        <div class="row">

            <div class="span4">

                <?php if (!empty($_smarty_tpl->tpl_vars['district1']->value)){?>

                    <ul class="bxslider">

                        <?php $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['x']->step = 6;$_smarty_tpl->tpl_vars['x']->total = (int)ceil(($_smarty_tpl->tpl_vars['x']->step > 0 ? (count($_smarty_tpl->tpl_vars['district1']->value)-1)+1 - (0) : 0-((count($_smarty_tpl->tpl_vars['district1']->value)-1))+1)/abs($_smarty_tpl->tpl_vars['x']->step));
if ($_smarty_tpl->tpl_vars['x']->total > 0){
for ($_smarty_tpl->tpl_vars['x']->value = 0, $_smarty_tpl->tpl_vars['x']->iteration = 1;$_smarty_tpl->tpl_vars['x']->iteration <= $_smarty_tpl->tpl_vars['x']->total;$_smarty_tpl->tpl_vars['x']->value += $_smarty_tpl->tpl_vars['x']->step, $_smarty_tpl->tpl_vars['x']->iteration++){
$_smarty_tpl->tpl_vars['x']->first = $_smarty_tpl->tpl_vars['x']->iteration == 1;$_smarty_tpl->tpl_vars['x']->last = $_smarty_tpl->tpl_vars['x']->iteration == $_smarty_tpl->tpl_vars['x']->total;?>
                            <li>
                                <table style="border-color: black;" class="table table-bordered logos">

                                    <thead>
                                        <tr>
                                            <th colspan="3"><h4 class="text-info text-center">District I</h4></th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = array_slice($_smarty_tpl->tpl_vars['district1']->value,$_smarty_tpl->tpl_vars['x']->value,6,true); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['i']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['i']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
 $_smarty_tpl->tpl_vars['i']->iteration++;
 $_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['d1']['last'] = $_smarty_tpl->tpl_vars['i']->last;
?>

                                            <?php if ($_smarty_tpl->tpl_vars['k']->value%3==0){?>
                                                
                                                <tr>
                                                    <td>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
" target="_blank">
                                                            <img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
"/>
                                                        </a>
                                                        <p class="logo-caption">
                                                            <small>
                                                                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</a>
                                                            </small>
                                                        </p>
                                                    </td>

                                                    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['d1']['last']){?>
                                                        
                                                        <?php if (!$_smarty_tpl->tpl_vars['k']->value<2){?>
                                                            <td>&nbsp;</td>
                                                            <td>&nbsp;</td>
                                                            </tr>
                                                        <?php }else{ ?>
                                                            </tr>
                                                        <?php }?>
                                                        
                                                    <?php }?>

                                                <?php }elseif($_smarty_tpl->tpl_vars['k']->value%3==1){?>
                                                    
                                                    <td>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
" target="_blank">
                                                            <img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
"/>
                                                        </a>
                                                        <p class="logo-caption">
                                                            <small>
                                                                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</a>
                                                            </small>
                                                        </p>
                                                    </td>
                                                    
                                                    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['d1']['last']){?>
                                                        
                                                        <?php if (!($_smarty_tpl->tpl_vars['k']->value<2)){?>
                                                            <td>&nbsp;</td>
                                                            </tr>
                                                        <?php }else{ ?>
                                                            </tr>
                                                        <?php }?>
                                                        
                                                    <?php }?>
                                                    
                                                <?php }elseif($_smarty_tpl->tpl_vars['k']->value%3==2){?>
                                                    
                                                    <td>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
" target="_blank">
                                                            <img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
"/>
                                                        </a>
                                                        <p class="logo-caption">
                                                            <small>
                                                                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</a>
                                                            </small>
                                                        </p>
                                                    </td>
                                                </tr>
                                            <?php }?>

                                            <?php if (($_smarty_tpl->tpl_vars['k']->value+1)==6){?>
                                                <?php break 1?>
                                            <?php }?>

                                        <?php } ?>

                                    </tbody>
                                </table>
                            </li>
                        <?php }} ?>
                    </ul>
                <?php }?>

            </div>

            <div class="span4">

                <?php if (!empty($_smarty_tpl->tpl_vars['district2']->value)){?>

                    <ul class="bxslider">

                        <?php $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['x']->step = 6;$_smarty_tpl->tpl_vars['x']->total = (int)ceil(($_smarty_tpl->tpl_vars['x']->step > 0 ? (count($_smarty_tpl->tpl_vars['district2']->value)-1)+1 - (0) : 0-((count($_smarty_tpl->tpl_vars['district2']->value)-1))+1)/abs($_smarty_tpl->tpl_vars['x']->step));
if ($_smarty_tpl->tpl_vars['x']->total > 0){
for ($_smarty_tpl->tpl_vars['x']->value = 0, $_smarty_tpl->tpl_vars['x']->iteration = 1;$_smarty_tpl->tpl_vars['x']->iteration <= $_smarty_tpl->tpl_vars['x']->total;$_smarty_tpl->tpl_vars['x']->value += $_smarty_tpl->tpl_vars['x']->step, $_smarty_tpl->tpl_vars['x']->iteration++){
$_smarty_tpl->tpl_vars['x']->first = $_smarty_tpl->tpl_vars['x']->iteration == 1;$_smarty_tpl->tpl_vars['x']->last = $_smarty_tpl->tpl_vars['x']->iteration == $_smarty_tpl->tpl_vars['x']->total;?>
                            <li>
                                <table style="border-color: black;" class="table table-bordered logos">

                                    <thead>
                                        <tr>
                                            <th colspan="3"><h4 class="text-info text-center">District II</h4></th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = array_slice($_smarty_tpl->tpl_vars['district2']->value,$_smarty_tpl->tpl_vars['x']->value,6,true); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['i']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['i']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
 $_smarty_tpl->tpl_vars['i']->iteration++;
 $_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['d2']['last'] = $_smarty_tpl->tpl_vars['i']->last;
?>

                                            <?php if ($_smarty_tpl->tpl_vars['k']->value%3==0){?>
                                                
                                                <tr>
                                                    <td>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
" target="_blank">
                                                            <img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
"/>
                                                        </a>
                                                        <p class="logo-caption">
                                                            <small>
                                                                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</a>
                                                            </small>
                                                        </p>
                                                    </td>

                                                    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['d2']['last']){?>
                                                        
                                                        <?php if ($_smarty_tpl->tpl_vars['k']->value<2){?>
                                                            <td>&nbsp;</td>
                                                            <td>&nbsp;</td>
                                                            </tr>
                                                        <?php }else{ ?>
                                                            </tr>
                                                        <?php }?>
                                                        
                                                    <?php }?>

                                                <?php }elseif($_smarty_tpl->tpl_vars['k']->value%3==1){?>
                                                    
                                                    <td>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
" target="_blank">
                                                            <img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
"/>
                                                        </a>
                                                        <p class="logo-caption">
                                                            <small>
                                                                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</a>
                                                            </small>
                                                        </p>
                                                    </td>
                                                    
                                                    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['d2']['last']){?>
                                                        
                                                        <?php if (!($_smarty_tpl->tpl_vars['k']->value<2)){?>
                                                            <td>&nbsp;</td>
                                                            </tr>
                                                        <?php }else{ ?>
                                                            </tr>
                                                        <?php }?>
                                                        
                                                    <?php }?>
                                                    
                                                <?php }elseif($_smarty_tpl->tpl_vars['k']->value%3==2){?>
                                                    
                                                    <td>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
" target="_blank">
                                                            <img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
"/>
                                                        </a>
                                                        <p class="logo-caption">
                                                            <small>
                                                                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</a>
                                                            </small>
                                                        </p>
                                                    </td>
                                                </tr>
                                            <?php }?>

                                            <?php if (($_smarty_tpl->tpl_vars['k']->value+1)==6){?>
                                                <?php break 1?>
                                            <?php }?>

                                        <?php } ?>

                                    </tbody>
                                </table>
                            </li>
                        <?php }} ?>
                    </ul>
                <?php }?>

            </div>

            <div class="span4">

                <?php if (!empty($_smarty_tpl->tpl_vars['district3']->value)){?>

                    <ul class="bxslider">

                        <?php $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['x']->step = 6;$_smarty_tpl->tpl_vars['x']->total = (int)ceil(($_smarty_tpl->tpl_vars['x']->step > 0 ? (count($_smarty_tpl->tpl_vars['district3']->value)-1)+1 - (0) : 0-((count($_smarty_tpl->tpl_vars['district3']->value)-1))+1)/abs($_smarty_tpl->tpl_vars['x']->step));
if ($_smarty_tpl->tpl_vars['x']->total > 0){
for ($_smarty_tpl->tpl_vars['x']->value = 0, $_smarty_tpl->tpl_vars['x']->iteration = 1;$_smarty_tpl->tpl_vars['x']->iteration <= $_smarty_tpl->tpl_vars['x']->total;$_smarty_tpl->tpl_vars['x']->value += $_smarty_tpl->tpl_vars['x']->step, $_smarty_tpl->tpl_vars['x']->iteration++){
$_smarty_tpl->tpl_vars['x']->first = $_smarty_tpl->tpl_vars['x']->iteration == 1;$_smarty_tpl->tpl_vars['x']->last = $_smarty_tpl->tpl_vars['x']->iteration == $_smarty_tpl->tpl_vars['x']->total;?>
                            <li>
                                <table style="border-color: black;" class="table table-bordered logos">

                                    <thead>
                                        <tr>
                                            <th colspan="3"><h4 class="text-info text-center">District III</h4></th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = array_slice($_smarty_tpl->tpl_vars['district3']->value,$_smarty_tpl->tpl_vars['x']->value,6,true); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['i']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['i']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
 $_smarty_tpl->tpl_vars['i']->iteration++;
 $_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['d3']['last'] = $_smarty_tpl->tpl_vars['i']->last;
?>

                                            <?php if ($_smarty_tpl->tpl_vars['k']->value%3==0){?>
                                                
                                                <tr>
                                                    <td>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
" target="_blank">
                                                            <img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
"/>
                                                        </a>
                                                        <p class="logo-caption">
                                                            <small>
                                                                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</a>
                                                            </small>
                                                        </p>
                                                    </td>

                                                    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['d3']['last']){?>
                                                        
                                                        <?php if (!$_smarty_tpl->tpl_vars['k']->value<2){?>
                                                            <td>&nbsp;</td>
                                                            <td>&nbsp;</td>
                                                            </tr>
                                                        <?php }else{ ?>
                                                            </tr>
                                                        <?php }?>
                                                        
                                                    <?php }?>

                                                <?php }elseif($_smarty_tpl->tpl_vars['k']->value%3==1){?>
                                                    
                                                    <td>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
" target="_blank">
                                                            <img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
"/>
                                                        </a>
                                                        <p class="logo-caption">
                                                            <small>
                                                                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</a>
                                                            </small>
                                                        </p>
                                                    </td>
                                                    
                                                    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['d3']['last']){?>
                                                        
                                                        <?php if (!($_smarty_tpl->tpl_vars['k']->value<2)){?>
                                                            <td>&nbsp;</td>
                                                            </tr>
                                                        <?php }else{ ?>
                                                            </tr>
                                                        <?php }?>
                                                        
                                                    <?php }?>
                                                    
                                                <?php }elseif($_smarty_tpl->tpl_vars['k']->value%3==2){?>
                                                    
                                                    <td>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
" target="_blank">
                                                            <img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
"/>
                                                        </a>
                                                        <p class="logo-caption">
                                                            <small>
                                                                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</a>
                                                            </small>
                                                        </p>
                                                    </td>
                                                </tr>
                                            <?php }?>

                                            <?php if (($_smarty_tpl->tpl_vars['k']->value+1)==6){?>
                                                <?php break 1?>
                                            <?php }?>

                                        <?php } ?>

                                    </tbody>
                                </table>
                            </li>
                        <?php }} ?>
                    </ul>
                <?php }?>

            </div>
        </div>
    </div> 

<?php }?>
<?php }} ?>