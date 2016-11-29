<?php /* Smarty version Smarty-3.1.13, created on 2016-09-07 09:25:31
         compiled from "ui\theme\ria\sections\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1495157d0154baea641-59657593%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3593d105c97063afc59ea84a632c5549eaa07cfb' => 
    array (
      0 => 'ui\\theme\\ria\\sections\\header.tpl',
      1 => 1429216392,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1495157d0154baea641-59657593',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_title' => 0,
    '_theme' => 0,
    '_c' => 0,
    'xheader' => 0,
    '_url' => 0,
    '_L' => 0,
    '_sysfrm_menu' => 0,
    '_user' => 0,
    '_pagehead' => 0,
    'notify' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57d0154bbadb72_28160111',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d0154bbadb72_28160111')) {function content_57d0154bbadb72_28160111($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Title here -->
    <title><?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
</title>
    <!-- Description, Keywords and Author -->
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your,Keywords">
    <meta name="author" content="sysfrm">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Styles -->
    <!-- Bootstrap CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/font-awesome.min.css" rel="stylesheet">
    <!-- jQuery gritter -->

    <!-- Custom Color CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/less-style.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/style.css" rel="stylesheet">

        <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/<?php echo $_smarty_tpl->tpl_vars['_c']->value['nstyle'];?>
.css" rel="stylesheet">


   <?php if ($_smarty_tpl->tpl_vars['_c']->value['rtl']=='1'){?>
        <link rel="stylesheet" href="ui/lib/css/bootstrap-rtl.min.css">
       <style type="text/css">
           .mainbar {

               margin-right: 210px;
               margin-left: 0;

           }
       </style>
    <?php }?>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/img/favicon.ico">
    <?php if (isset($_smarty_tpl->tpl_vars['xheader']->value)){?>
        <?php echo $_smarty_tpl->tpl_vars['xheader']->value;?>

    <?php }?>
</head>

<body>

<div class="outer">

    <div class="sidebar">

        <div class="sidey">

            <!-- Logo -->
            <div class="logo">
                <h1><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
dashboard"><i class="fa fa-leaf br-red"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['MoneyFlow'];?>
 </a></h1>
            </div>

            <!-- Sidebar navigation starts -->

            <!-- Responsive dropdown -->
            <div class="sidebar-dropdown"><a href="#" class="br-red"><i class="fa fa-bars"></i></a></div>

            <div class="side-nav">

                <div class="side-nav-block">
                    <!-- Sidebar heading -->
                    <h4>Main</h4>
                    <!-- Sidebar links -->
                    <ul class="list-unstyled">

                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
dashboard" <?php if ($_smarty_tpl->tpl_vars['_sysfrm_menu']->value=='dashboard'){?>class="active"<?php }?>><i class="fa fa-desktop"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Dashboard'];?>
</a></li>


                        <!-- Mainmenu with submenu -->
                        <li class="has_submenu">
                            <a href="#" <?php if ($_smarty_tpl->tpl_vars['_sysfrm_menu']->value=='accounts'){?>class="active"<?php }?>><i class="fa fa-building-o"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Accounts'];?>
 <span class="nav-caret fa fa-caret-down"></span></a>
                            <!-- Submenu -->
                            <ul class="list-unstyled">
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/balances"><i class="fa fa-angle-double-right"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Account_Balances'];?>
</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/add"><i class="fa fa-angle-double-right"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Ad_An_Account'];?>
</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/list"><i class="fa fa-angle-double-right"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage_Accounts'];?>
</a></li>

                            </ul>
                        </li>
                        <li class="has_submenu">
                            <a href="#" <?php if ($_smarty_tpl->tpl_vars['_sysfrm_menu']->value=='transactions'){?>class="active"<?php }?>><i class="fa fa-file-text-o"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Transactions'];?>
<span class="nav-caret fa fa-caret-down"></span></a>
                            <!-- Submenu -->
                            <ul class="list-unstyled">
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/deposit"><i class="fa fa-angle-double-right"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add_Deposit'];?>
</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/expense"><i class="fa fa-angle-double-right"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add_Expense'];?>
</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/transfer"><i class="fa fa-angle-double-right"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Transfer'];?>
</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/list"><i class="fa fa-angle-double-right"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['View_Transactions'];?>
</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/list_adv"><i class="fa fa-angle-double-right"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Search_Transaction'];?>
</a></li>

                            </ul>
                        </li>

                        
                            
                            
                            

                                
                                

                            
                        
                        <li class="has_submenu">
                            <a href="#" <?php if ($_smarty_tpl->tpl_vars['_sysfrm_menu']->value=='repeating'){?>class="active"<?php }?>><i class="fa fa-exchange"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Recurring'];?>
<span class="nav-caret fa fa-caret-down"></span></a>
                            <!-- Submenu -->
                            <ul class="list-unstyled">
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
repeating/income"><i class="fa fa-angle-double-right"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Repeating_Income'];?>
</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
repeating/expense"><i class="fa fa-angle-double-right"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Repeating_Expense'];?>
</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
repeating/income-calendar"><i class="fa fa-angle-double-right"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Income_Calendar'];?>
</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
repeating/expense-calendar"><i class="fa fa-angle-double-right"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense_Calendar'];?>
</a></li>

                            </ul>
                        </li>

                        <li class="has_submenu">
                            <a href="#" <?php if ($_smarty_tpl->tpl_vars['_sysfrm_menu']->value=='reports'){?>class="active"<?php }?>><i class="fa fa-bar-chart-o"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Reports'];?>
<span class="nav-caret fa fa-caret-down"></span></a>
                            <!-- Submenu -->
                            <ul class="list-unstyled">
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/statement"><i class="fa fa-angle-double-right"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Account_Statement'];?>
</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/by-date"><i class="fa fa-angle-double-right"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Reports_by_Date'];?>
</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/income"><i class="fa fa-angle-double-right"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Income_Reports'];?>
</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/expense"><i class="fa fa-angle-double-right"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense_Reports'];?>
</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/income-vs-expense"><i class="fa fa-angle-double-right"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Income_Vs_Expense'];?>
</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/categories"><i class="fa fa-angle-double-right"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Reports_Categories'];?>
</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/payees"><i class="fa fa-angle-double-right"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Reports_Payees'];?>
</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/payers"><i class="fa fa-angle-double-right"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Reports_Payers'];?>
</a></li>
                            </ul>
                        </li>
                        <?php if (($_smarty_tpl->tpl_vars['_user']->value['user_type'])=='Admin'){?>
                            <li class="has_submenu">
                                <a href="#" <?php if ($_smarty_tpl->tpl_vars['_sysfrm_menu']->value=='settings'){?>class="active"<?php }?>><i class="fa fa-cogs"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Settings'];?>
<span class="nav-caret fa fa-caret-down"></span></a>
                                <!-- Submenu -->
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/expense-categories"><i class="fa fa-angle-double-right"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense_Categories'];?>
</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/income-categories"><i class="fa fa-angle-double-right"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Income_Categories'];?>
</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/payee"><i class="fa fa-angle-double-right"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Payees'];?>
</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/payer"><i class="fa fa-angle-double-right"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Payers'];?>
</a></li>
                                    
                                    
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/pmethods"><i class="fa fa-angle-double-right"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Payment_Methods'];?>
</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users"><i class="fa fa-angle-double-right"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Users'];?>
</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/app"><i class="fa fa-angle-double-right"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Application_Settings'];?>
</a></li>

                                </ul>
                            </li>
                            <?php }?>

                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users"><i class="fa fa-user"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Users'];?>
</a></li>


                    </ul>
                </div>

                <div class="side-nav-block">
                    <h4>Quick Access</h4>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/balances"><i class="fa fa-list"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Account_Balances'];?>
</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/deposit"><i class="fa fa-plus-circle"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add_Deposit'];?>
</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/expense"><i class="fa fa-minus-circle"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add_Expense'];?>
</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/by-date"><i class="fa fa-calendar"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Reports_by_Date'];?>
</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/list"><i class="fa fa-th-list"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['View_Transactions'];?>
</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/app"><i class="fa fa-cog"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Application_Settings'];?>
</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
logout"><i class="fa fa-sign-out"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Logout'];?>
</a></li>
                    </ul>
                </div>


            </div>

            <!-- Sidebar navigation ends -->

        </div>
    </div>

    <div class="mainbar">

        <div class="main-head">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-6">
                        <!-- Page title -->
                        <h2><?php echo $_smarty_tpl->tpl_vars['_pagehead']->value;?>
</h2>
                    </div>

                    <div class="col-md-3 col-sm-4 col-xs-6">
                        <!-- Search block -->

                    </div>

                    <div class="col-md-3 col-sm-4 hidden-xs">
                        <!-- Notifications -->
                        <div class="head-noty text-center">

                            <!-- Notifications -->


                            <!-- Messages -->

                            <a href="#calculator" data-toggle="modal" data-target="#calculator">
                                <img style="max-width:100px; margin-top: -7px;"
                                     src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/img/calculator-icon.png">
                            </a>



                            <!-- Users -->


                        </div>
                        <div class="clearfix"></div>
                    </div>


                    <div class="col-md-3 hidden-sm hidden-xs">
                        <!-- Head user -->
                        <div class="head-user dropdown pull-right">
                            <a href="#" class="btn btn-primary" data-toggle="dropdown" id="profile">
                                <!-- Icon
                                <i class="fa fa-user"></i>  -->



                                <!-- User name -->
<?php echo $_smarty_tpl->tpl_vars['_L']->value['Welcome'];?>
 <?php echo $_smarty_tpl->tpl_vars['_user']->value['fullname'];?>
 !
                                <i class="fa fa-caret-down"></i>
                            </a>
                            <!-- Dropdown -->
                            <ul class="dropdown-menu" aria-labelledby="profile">
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-edit/<?php echo $_smarty_tpl->tpl_vars['_user']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit_Profile'];?>
</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/change-password"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Change_Password'];?>
</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
logout"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Logout'];?>
</a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

        </div>

        <div class="main-content">

            <div class="container">

                <?php if (isset($_smarty_tpl->tpl_vars['notify']->value)){?>
                    <?php echo $_smarty_tpl->tpl_vars['notify']->value;?>

                <?php }?>





<?php }} ?>