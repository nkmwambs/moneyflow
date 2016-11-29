<?php /* Smarty version Smarty-3.1.13, created on 2016-10-26 10:10:24
         compiled from "ui\theme\ria\users-add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:135835810b95038c3d4-47889371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '853b195a78646941a6254f475954dd1a63704035' => 
    array (
      0 => 'ui\\theme\\ria\\users-add.tpl',
      1 => 1418729768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135835810b95038c3d4-47889371',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    '_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5810b950541c98_53121865',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5810b950541c98_53121865')) {function content_5810b950541c98_53121865($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="row">
    <div class="widget-1 col-md-6 col-sm-12">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add_New_User'];?>
</h3>
            </div>
            <div class="panel-body">
                <form role="form" name="accadd" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-post">
                    <div class="form-group">
                        <label for="username"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="fullname"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Full_Name'];?>
</label>
                        <input type="text" class="form-control" id="fullname" name="fullname">
                    </div>
                    <div class="form-group">
                        <label for="user_type"><?php echo $_smarty_tpl->tpl_vars['_L']->value['User_Type'];?>
</label>
                        <select name="user_type" id="user_type" class="form-control">
                            <option value="Admin"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Full_Administrator'];?>
</option>
                            <option value="Employee"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Employee'];?>
</option>

                        </select>
                        <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['user_type_help'];?>
</span>
                    </div>
                    <div class="form-group">
                        <label for="password"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                    <div class="form-group">
                        <label for="cpassword"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Confirm_Password'];?>
</label>
                        <input type="password" class="form-control" id="cpassword" name="cpassword">
                    </div>


                    <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                    Or <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
</a>
                </form>
            </div>
        </div>
    </div> <!-- Widget-1 end-->

    <!-- Widget-2 end-->
</div>


<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>