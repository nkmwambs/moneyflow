<?php /* Smarty version Smarty-3.1.13, created on 2016-09-07 09:25:22
         compiled from "ui\theme\ria\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186157d015421f3471-68084793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc6870e1efaa6be5ffa95e2d5d1615805dc3665d' => 
    array (
      0 => 'ui\\theme\\ria\\login.tpl',
      1 => 1418727384,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186157d015421f3471-68084793',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_title' => 0,
    '_L' => 0,
    '_theme' => 0,
    'notify' => 0,
    '_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57d015422e1934_69849960',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d015422e1934_69849960')) {function content_57d015422e1934_69849960($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- Title here -->
    <title><?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['_L']->value['Login'];?>
</title>
    <!-- Description, Keywords and Author -->

    <meta name="description" content="Your description">
    <meta name="keywords" content="Your,Keywords">
    <meta name="author" content="ResponsiveWebInc">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Styles -->
    <!-- Bootstrap CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom Color CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/less-style.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/style.css" rel="stylesheet">
<style type="text/css">
    .outer-page {
        background: #FFFFFF;

    }
</style>
    <!-- Favicon -->
    <link rel="shortcut icon" href="#">
</head>

<body>

<div class="outer-page">

    <!-- Login page -->
    <div class="login-page">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-justified">
            <li><a href="#login" data-toggle="tab" class="br-lblue"><i class="fa fa-leaf"></i> MoneyFlow</a></li>

        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane fade active in" id="login">
                <?php if (isset($_smarty_tpl->tpl_vars['notify']->value)){?>
                    <?php echo $_smarty_tpl->tpl_vars['notify']->value;?>

                <?php }?>
                <!-- Login form -->

                <form role="form"  method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
login/post">
                    <div class="form-group">
                        <label for="email">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Remember Me Next Time
                        </label>
                    </div>
                    <button type="submit" class="btn btn-info btn-sm" name="login">Admin Login</button>

                </form>

            </div>


        </div>

    </div>

</div>

<!-- Javascript files -->
<!-- jQuery -->
<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/js/jquery.js"></script>
<!-- Bootstrap JS -->
<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/js/bootstrap.min.js"></script>
<!-- Respond JS for IE8 -->
<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/js/respond.min.js"></script>
<!-- HTML5 Support for IE -->
<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/js/html5shiv.js"></script>

<!-- Javascript for this page -->

<!-- Javascript for this page -->



</body>
</html><?php }} ?>