<?php /* Smarty version Smarty-3.1.13, created on 2016-09-07 09:25:31
         compiled from "ui\theme\ria\dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1591057d0154ba07d05-43896239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '858fce591d68c4e3d4d58d2ddfc54b2fd129ac46' => 
    array (
      0 => 'ui\\theme\\ria\\dashboard.tpl',
      1 => 1417854782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1591057d0154ba07d05-43896239',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    '_c' => 0,
    'ti' => 0,
    'te' => 0,
    'mi' => 0,
    'me' => 0,
    'd' => 0,
    'ds' => 0,
    'mnth' => 0,
    'inc' => 0,
    'incs' => 0,
    '_url' => 0,
    'exp' => 0,
    'exps' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57d0154bacf0b8_27151564',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d0154bacf0b8_27151564')) {function content_57d0154bacf0b8_27151564($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="row">
    <div class="col-lg-3">
        <div class="widget style1 lazur-bg">
            <div class="row">
                <div class="col-xs-4">
                    <i class="fa fa-plus fa-5x"></i>
                </div>
                <div class="col-xs-8 text-right">
                    <span> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Income_Today'];?>
 </span>
                    <h4 class="font-bold text-white"><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['ti']->value,2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="widget style1 red-bg">
            <div class="row">
                <div class="col-xs-4">
                    <i class="fa fa-minus fa-5x"></i>
                </div>
                <div class="col-xs-8 text-right">
                    <span> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense_Today'];?>
 </span>
                    <h4 class="font-bold text-white"><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['te']->value,2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="widget style1 lazur-bg">
            <div class="row">
                <div class="col-xs-4">
                    <i class="fa fa-plus fa-5x"></i>
                </div>
                <div class="col-xs-8 text-right">
                    <span> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Income_This_Month'];?>
 </span>
                    <h4 class="font-bold text-white"><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['mi']->value,2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="widget style1 red-bg">
            <div class="row">
                <div class="col-xs-4">
                    <i class="fa fa-minus fa-5x"></i>
                </div>
                <div class="col-xs-8 text-right">
                    <span> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense_This_Month'];?>
 </span>
                    <h4 class="font-bold text-white"><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['me']->value,2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
    <div class="row">

        <div class="widget-1 col-md-6">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Financial_Balances'];?>
</h3>

                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
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
</span></td>
                            </tr>
                        <?php } ?>



                    </table>
                </div>
            </div>
        </div> <!-- Widget-1 end-->

        <div class="widget-4 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income_Vs_Expense'];?>
 (<?php echo $_smarty_tpl->tpl_vars['mnth']->value;?>
)</h3>
                </div>
                <div class="panel-body">
                    <div id="income-vs-expense" ></div>
                </div>
            </div>
        </div> <!-- Widget-2 end-->
    </div> <!-- Row end-->


    <div class="row">
         <!-- Widget-3 end-->
        <div class="widget-2 col-md-6">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Latest_5_Income'];?>
</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered">
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</th>
                        <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                        <?php  $_smarty_tpl->tpl_vars['incs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['incs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['inc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['incs']->key => $_smarty_tpl->tpl_vars['incs']->value){
$_smarty_tpl->tpl_vars['incs']->_loop = true;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['incs']->value['date'];?>
</td>
                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/manage/<?php echo $_smarty_tpl->tpl_vars['incs']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['incs']->value['description'];?>
</a> </td>
                                <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['incs']->value['amount'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</td>
                            </tr>
                        <?php } ?>



                    </table>
                </div>


            </div>
        </div>
        <div class="widget-4 col-md-6">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Latest_5_Expense'];?>
</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered">
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</th>
                        <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                        <?php  $_smarty_tpl->tpl_vars['exps'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['exps']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['exp']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['exps']->key => $_smarty_tpl->tpl_vars['exps']->value){
$_smarty_tpl->tpl_vars['exps']->_loop = true;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['exps']->value['date'];?>
</td>
                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/manage/<?php echo $_smarty_tpl->tpl_vars['exps']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['exps']->value['description'];?>
</a> </td>
                                <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['exps']->value['amount'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</td>
                            </tr>
                        <?php } ?>



                    </table>
                </div>
            </div>
        </div> <!-- Widget-4 end-->
    </div> <!-- Row end-->
<div class="row">
    <div class="widget-3 col-md-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income_Graph_This_Year'];?>
</h3>
            </div>
            <div class="panel-body">
                <div id="income-graph"></div>
            </div>
        </div>
    </div> <!-- Widget-3 end-->

    <div class="widget-4 col-md-6">
        <div class="panel panel-danger">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense_Graph_This_Year'];?>
</h3>
            </div>
            <div class="panel-body">
                <div id="expense-graph" ></div>
            </div>
        </div>
    </div> <!-- Widget-4 end-->
</div>
<div class="row">
    <div class="widget-3 col-md-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income_Calendar'];?>
</h3>

            </div>
            <div class="panel-body">



                <div id="icalendar"></div>
            </div>
        </div>
    </div> <!-- Widget-3 end-->

    <div class="widget-4 col-md-6">
        <div class="panel panel-danger">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense_Calendar'];?>
</h3>
            </div>
            <div class="panel-body">



                <div id="calendar"></div>
            </div>
        </div>
    </div> <!-- Widget-4 end-->
</div>
     <!-- Row end-->

    <?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>