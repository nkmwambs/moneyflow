<?php /* Smarty version Smarty-3.1.13, created on 2016-09-17 06:13:54
         compiled from "ui\theme\ria\account-balances.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3026357dd17623ef830-88351316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c967385d2887b70b7765aea722b681088437565' => 
    array (
      0 => 'ui\\theme\\ria\\account-balances.tpl',
      1 => 1417261178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3026357dd17623ef830-88351316',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    'd' => 0,
    'ds' => 0,
    '_c' => 0,
    'tbal' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57dd17626685d0_27935568',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57dd17626685d0_27935568')) {function content_57dd17626685d0_27935568($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="row">
    <div class="widget-1 col-md-12">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Financial_Balances'];?>
</h3>
            </div>
            <div class="panel-body">
                <table class="table table-striped table-bordered">
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
                    <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Balance'];?>
</th>
<?php  $_smarty_tpl->tpl_vars['ds'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ds']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->key => $_smarty_tpl->tpl_vars['ds']->value){
$_smarty_tpl->tpl_vars['ds']->_loop = true;
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</td>
        <td class="text-right"><span <?php if ($_smarty_tpl->tpl_vars['ds']->value['balance']<0){?>class="text-red"<?php }?>><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['ds']->value['balance'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</span> </td>
    </tr>
<?php } ?>


                    <tr>
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
:</strong></td>
                        <td class="text-right"><strong><span <?php if ($_smarty_tpl->tpl_vars['tbal']->value<0){?>class="text-red"<?php }?>><?php echo number_format($_smarty_tpl->tpl_vars['tbal']->value,2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</span></strong></td>
                    </tr>
                </table>
            </div>
        </div>
    </div> <!-- Widget-1 end-->

     <!-- Widget-2 end-->
</div> <!-- Row end-->


 <!-- Row end-->


 <!-- Row end-->

<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>