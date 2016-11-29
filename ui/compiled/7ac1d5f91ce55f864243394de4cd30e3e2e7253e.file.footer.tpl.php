<?php /* Smarty version Smarty-3.1.13, created on 2016-09-07 09:25:31
         compiled from "ui\theme\ria\sections\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2869257d0154bbc90f8-09466104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ac1d5f91ce55f864243394de4cd30e3e2e7253e' => 
    array (
      0 => 'ui\\theme\\ria\\sections\\footer.tpl',
      1 => 1416807806,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2869257d0154bbc90f8-09466104',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_theme' => 0,
    'xfooter' => 0,
    'xjq' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57d0154bbe4671_96901767',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d0154bbe4671_96901767')) {function content_57d0154bbe4671_96901767($_smarty_tpl) {?><div class="modal fade" id="calculator" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog calc-modal">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Calculator</h4>
            </div>
            <div class="modal-body">
                <div class="calculator"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>


</div>
</div>
</div>


</div>
<div class="clearfix"></div>
</div>

<!-- Javascript files -->
<!-- jQuery -->
<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/js/jquery.js"></script>
<!-- Bootstrap JS -->
<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/js/bootstrap.min.js"></script>
<!-- jQuery UI -->
<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/js/jquery-ui.min.js"></script>
<!-- Date Time Picker JS -->

<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/js/bootstrap-wysihtml5.min.js"></script>


<!-- jQuery slim scroll -->
<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/js/jquery.slimscroll.min.js"></script>
<!-- Data Tables JS -->
<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/js/jquery.dataTables.min.js"></script>

<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/js/respond.min.js"></script>
<!-- HTML5 Support for IE -->
<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/js/html5shiv.js"></script>
<!-- Custom JS -->
<script src="ui/lib/js/bootbox.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/lib/calculator/jquery.blackcalculator-1.0.1.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/js/custom.js"></script>

<!-- Javascript for this page -->
<?php if (isset($_smarty_tpl->tpl_vars['xfooter']->value)){?>
    <?php echo $_smarty_tpl->tpl_vars['xfooter']->value;?>

<?php }?>
<script>
    jQuery(document).ready(function() {
        // initiate layout and plugins
        
        $('.calculator').blackCalculator({type:'advanced', allowKeyboard:true, css:'ui/theme/sysfrm/lib/calculator/'});
        
        <?php if (isset($_smarty_tpl->tpl_vars['xjq']->value)){?>
        <?php echo $_smarty_tpl->tpl_vars['xjq']->value;?>

        <?php }?>

    });

</script>

</body>
</html>
<?php }} ?>