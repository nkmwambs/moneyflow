<?php /* Smarty version Smarty-3.1.13, created on 2016-09-17 06:13:58
         compiled from "ui\theme\ria\repeating-income.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1834057dd1766f3f1b7-16007054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb1de05582688841bf833b2bff57855923c06afc' => 
    array (
      0 => 'ui\\theme\\ria\\repeating-income.tpl',
      1 => 1418719312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1834057dd1766f3f1b7-16007054',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    '_url' => 0,
    'd' => 0,
    'ds' => 0,
    'mdate' => 0,
    'prs' => 0,
    'pr' => 0,
    'cats' => 0,
    'cat' => 0,
    'pms' => 0,
    'pm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57dd17670b4751_22901612',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57dd17670b4751_22901612')) {function content_57dd17670b4751_22901612($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="row">
    <div class="widget-1 col-md-6 col-sm-12">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add_Repeating_Income'];?>
</h3>
            </div>
            <div class="panel-body">
                <form role="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
repeating/income-post">
                    <div class="form-group">
                        <label for="description"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</label>
                        <input type="text" class="form-control" id="description" name="description">
                    </div>
                    <div class="form-group">
                        <label for="amount"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</label>
                        <input type="text" class="form-control" id="amount" name="amount">
                    </div>

                    <div class="form-group">
                        <label for="frequency"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Frequency'];?>
</label>
                        <select class="form-control" id="frequency" name="frequency">
                            <option value="Monthly"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Monthly'];?>
</option>
                            <option value="Weekly"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Weekly'];?>
</option>
                            <option value="Bi Weekly"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Bi_Weekly'];?>
</option>
                            <option value="Weekly"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Everyday'];?>
</option>
                            <option value="Every 30 Days"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Every_30_Days'];?>
</option>
                            <option value="Every 2 Month"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Every_2_Month'];?>
</option>
                            <option value="Quarterly"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quarterly'];?>
</option>
                            <option value="Every 6 Month"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Every_6_Month'];?>
</option>
                            <option value="Yearly"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Yearly'];?>
</option>
                            <option value="Once Only"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Once_Only'];?>
</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="np"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Number_of_Payment'];?>
</label>
                        <input type="text" class="form-control" id="np" name="np">
                        <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['frequency_help'];?>
</span>
                    </div>
                    <div class="form-group">
                        <label for="account"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</label>
                        <select id="account" name="account">
                            <?php  $_smarty_tpl->tpl_vars['ds'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ds']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->key => $_smarty_tpl->tpl_vars['ds']->value){
$_smarty_tpl->tpl_vars['ds']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
"><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</option>
                            <?php } ?>


                        </select>
                    </div>
                    <div class="form-group">
                        <label for="dp1">First Occurrence Date (Put Upcoming Future Date Here)</label>
                        <div class="input-append date" id="date" data-date-format="dd-mm-yyyy">

                            <div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-calendar"></i>
													</span>
                                <input type="text" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['mdate']->value;?>
" name="date" id="dp1">
                            </div>


                        </div>
                    </div>


                    <div class="form-group">
                        <label for="payer"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Payer'];?>
</label>

                        <select id="payer" name="payer">

                            <?php  $_smarty_tpl->tpl_vars['pr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pr']->key => $_smarty_tpl->tpl_vars['pr']->value){
$_smarty_tpl->tpl_vars['pr']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['pr']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['pr']->value['name'];?>
</option>
                            <?php } ?>


                        </select>
                    </div>

                    <div class="form-group">
                        <label for="cats"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Category'];?>
</label>
                        <select id="cats" name="cats">
                            <option value="Uncategorized"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Uncategorized'];?>
</option>
                            <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</option>
                            <?php } ?>


                        </select>
                    </div>

                    <div class="form-group">
                        <label for="pmethod"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Payment Method'];?>
</label>

                        <select id="pmethod" name="pmethod">

                            <?php  $_smarty_tpl->tpl_vars['pm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pms']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pm']->key => $_smarty_tpl->tpl_vars['pm']->value){
$_smarty_tpl->tpl_vars['pm']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['pm']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['pm']->value['name'];?>
</option>
                            <?php } ?>


                        </select>
                    </div>

                    <div class="form-group">
                        <label for="ref"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Ref'];?>
#</label>
                        <input type="text" class="form-control" id="ref" name="ref">
                        <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['ref_help'];?>
</span>
                    </div>





                    <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                </form>
            </div>
        </div>
    </div> <!-- Widget-1 end-->

    <!-- Widget-2 end-->
</div>


<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>