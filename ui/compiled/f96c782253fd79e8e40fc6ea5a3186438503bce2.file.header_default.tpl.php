<?php /* Smarty version Smarty-3.1.13, created on 2020-10-14 11:34:11
         compiled from "ui\theme\softhash\sections\header_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34225797fca63a56a1-05074978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f96c782253fd79e8e40fc6ea5a3186438503bce2' => 
    array (
      0 => 'ui\\theme\\softhash\\sections\\header_default.tpl',
      1 => 1602688371,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34225797fca63a56a1-05074978',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5797fca7c177b2_80613810',
  'variables' => 
  array (
    '_title' => 0,
    'app_url' => 0,
    '_theme' => 0,
    '_c' => 0,
    'plugin_ui_header_admin' => 0,
    'plugin_ui_header_add' => 0,
    'xheader' => 0,
    'admin_extra_nav' => 0,
    '_sysfrm_menu' => 0,
    '_url' => 0,
    '_L' => 0,
    'sub_menu_admin' => 0,
    'sm_crm' => 0,
    'sm_report' => 0,
    'user' => 0,
    'sm_settings' => 0,
    '_st' => 0,
    'notify' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5797fca7c177b2_80613810')) {function content_5797fca7c177b2_80613810($_smarty_tpl) {?><!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
</title>
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
sysfrm/uploads/icon/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
sysfrm/uploads/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
sysfrm/uploads/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
sysfrm/uploads/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
sysfrm/uploads/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
sysfrm/uploads/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
sysfrm/uploads/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
sysfrm/uploads/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
sysfrm/uploads/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
sysfrm/uploads/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
sysfrm/uploads/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
sysfrm/uploads/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
sysfrm/uploads/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
sysfrm/uploads/icon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
sysfrm/uploads/icon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
sysfrm/uploads/icon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/lib/fa/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/lib/icheck/skins/all.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/css/animate.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/toggle/bootstrap-toggle.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/style.css?ver=2.0.1" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/component.css?ver=2.0.1" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/custom.css" rel="stylesheet">

    <link href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/icons/css/ibilling_icons.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/material.css" rel="stylesheet">

    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/<?php echo $_smarty_tpl->tpl_vars['_c']->value['nstyle'];?>
.css" rel="stylesheet">

<?php  $_smarty_tpl->tpl_vars['plugin_ui_header_add'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plugin_ui_header_add']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plugin_ui_header_admin']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plugin_ui_header_add']->key => $_smarty_tpl->tpl_vars['plugin_ui_header_add']->value){
$_smarty_tpl->tpl_vars['plugin_ui_header_add']->_loop = true;
?>
    <?php echo $_smarty_tpl->tpl_vars['plugin_ui_header_add']->value;?>

<?php } ?>

    <?php if ($_smarty_tpl->tpl_vars['_c']->value['rtl']=='1'){?>
        <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/bootstrap-rtl.min.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/style-rtl.min.css" rel="stylesheet">
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['xheader']->value)){?>
        <?php echo $_smarty_tpl->tpl_vars['xheader']->value;?>

    <?php }?>
</head>

<body class="fixed-nav <?php if ($_smarty_tpl->tpl_vars['_c']->value['mininav']){?>mini-navbar<?php }?>">
<section>
    <div id="wrapper">
        <div id="sidebar" class="sidebar">
            <nav class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
    
                        <?php echo $_smarty_tpl->tpl_vars['admin_extra_nav']->value[0];?>

                        <li <?php if ($_smarty_tpl->tpl_vars['_sysfrm_menu']->value=='dashboard'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['_c']->value['redirect_url'];?>
/"><i class="fa fa-th-large"></i> <span class="nav-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Dashboard'];?>
</span></a></li>
                        <?php echo $_smarty_tpl->tpl_vars['admin_extra_nav']->value[1];?>

                        <li class="<?php if ($_smarty_tpl->tpl_vars['_sysfrm_menu']->value=='contacts'){?>active<?php }?>">
                            <a href="#"><i class="icon-users"></i> <span class="nav-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['CRM'];?>
</span><span class="fa fa-angle-right"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/add/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Contact'];?>
</a></li>
    
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/list/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['List Contacts'];?>
</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/groups/">Grupos</a></li>
                                <?php  $_smarty_tpl->tpl_vars['sm_crm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sm_crm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sub_menu_admin']->value['crm']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sm_crm']->key => $_smarty_tpl->tpl_vars['sm_crm']->value){
$_smarty_tpl->tpl_vars['sm_crm']->_loop = true;
?>
    
                                    <?php echo $_smarty_tpl->tpl_vars['sm_crm']->value;?>

    
    
                                <?php } ?>
                            </ul>
                        </li>
                        <?php echo $_smarty_tpl->tpl_vars['admin_extra_nav']->value[2];?>

                        <?php if ($_smarty_tpl->tpl_vars['_c']->value['accounting']=='1'){?>
                            <li class="<?php if ($_smarty_tpl->tpl_vars['_sysfrm_menu']->value=='transactions'){?>active<?php }?>">
                                <a href="#"><i class="fa fa-database"></i> <span class="nav-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Transactions'];?>
</span><span class="fa fa-angle-right"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/deposit/">Depósitos</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/expense/">Gastos</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/transfer/">Transferencias</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/list/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['View Transactions'];?>
</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
generate/balance-sheet/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Balance Sheet'];?>
</a></li>
                                </ul>
                            </li>
                        <?php }?>
                        <?php echo $_smarty_tpl->tpl_vars['admin_extra_nav']->value[3];?>

                        
    
                        <?php if (($_smarty_tpl->tpl_vars['_c']->value['invoicing']=='1')||($_smarty_tpl->tpl_vars['_c']->value['quotes']=='1')){?>
    
                            <li class="<?php if ($_smarty_tpl->tpl_vars['_sysfrm_menu']->value=='invoices'){?>active<?php }?>">
                                <a href="#"><i class="icon-credit-card-1"></i> <span class="nav-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales'];?>
</span><span class="fa fa-angle-right"></span></a>
                                <ul class="nav nav-second-level">
    
                                    <?php if ($_smarty_tpl->tpl_vars['_c']->value['invoicing']=='1'){?>
                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/list/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoices'];?>
</a></li>
                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/list-recurring/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recurring Invoices'];?>
</a></li>
                                    <?php }?>
    
                                    <?php if ($_smarty_tpl->tpl_vars['_c']->value['quotes']=='1'){?>
                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
quotes/list/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quotes'];?>
</a></li>
                                        <!-- <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
quotes/new/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Create New Quote'];?>
</a></li> -->
                                    <?php }?>
    
                                </ul>
                            </li>
    
                        <?php }?>
                        <?php echo $_smarty_tpl->tpl_vars['admin_extra_nav']->value[4];?>

                        <?php if ($_smarty_tpl->tpl_vars['_c']->value['accounting']=='1'){?>
                            <li class="<?php if ($_smarty_tpl->tpl_vars['_sysfrm_menu']->value=='accounts'){?>active<?php }?>">
                                <a href="#"><i class="fa fa-building-o"></i> <span class="nav-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Bank n Cash'];?>
</span><span class="fa fa-angle-right"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/add/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['New Account'];?>
</a></li>
    
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/list/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['List Accounts'];?>
</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/balances/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account_Balances'];?>
</a></li>
    
                                </ul>
                            </li>
                        <?php }?>
                        <?php if (($_smarty_tpl->tpl_vars['_c']->value['invoicing']=='1')||($_smarty_tpl->tpl_vars['_c']->value['quotes']=='1')){?>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['_sysfrm_menu']->value=='ps'){?>active<?php }?>">
                            <a href="#"><i class="fa fa-cube"></i> <span class="nav-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Products n Services'];?>
</span><span class="fa fa-angle-right"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
ps/p-list/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Products'];?>
</a></li>
                                <!-- <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
ps/p-new/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['New Product'];?>
</a></li> -->
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
ps/s-list/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Services'];?>
</a></li>
                                <!-- <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
ps/s-new/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['New Service'];?>
</a></li> -->


                            </ul>
                        </li>
                    <?php }?>
                    <?php echo $_smarty_tpl->tpl_vars['admin_extra_nav']->value[6];?>

    
                    <?php if ($_smarty_tpl->tpl_vars['_c']->value['accounting']=='1'){?>

                        <li class="<?php if ($_smarty_tpl->tpl_vars['_sysfrm_menu']->value=='reports'){?>active<?php }?>">
                            <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Reports'];?>
 </span><span class="fa fa-angle-right"></span></a>
                            <ul class="nav nav-second-level">


                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/statement/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account Statement'];?>
</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/income/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income Reports'];?>
</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/expense/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense Reports'];?>
</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/income-vs-expense/">Ingresos vs Gastos</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/by-date/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Reports by Date'];?>
</a></li>


                                <?php  $_smarty_tpl->tpl_vars['sm_report'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sm_report']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sub_menu_admin']->value['reports']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sm_report']->key => $_smarty_tpl->tpl_vars['sm_report']->value){
$_smarty_tpl->tpl_vars['sm_report']->_loop = true;
?>

                                    <?php echo $_smarty_tpl->tpl_vars['sm_report']->value;?>



                                <?php } ?>


                            </ul>
                        </li>

                    <?php }?>

                    <?php if (($_smarty_tpl->tpl_vars['user']->value['user_type'])=='Admin'){?>

                        <li class="<?php if ($_smarty_tpl->tpl_vars['_sysfrm_menu']->value=='util'){?>active<?php }?>">
                            <a href="#"><i class="icon-article"></i> <span class="nav-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Utilities'];?>
 </span><span class="fa fa-angle-right"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/activity/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Activity Log'];?>
</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/sent-emails/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email Message Log'];?>
</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/dbstatus/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Database Status'];?>
</a></li>
                            </ul>
                        </li>

                    <?php }?>


                    <li class="<?php if ($_smarty_tpl->tpl_vars['_sysfrm_menu']->value=='my_account'){?>active<?php }?>">
                        <a href="#"><i class="icon-user-1"></i> <span class="nav-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['My Account'];?>
 </span><span class="fa fa-angle-right"></span></a>
                        <ul class="nav nav-second-level">

                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-edit/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit Profile'];?>
</a></li>



                        </ul>
                    </li>
                    <?php if (($_smarty_tpl->tpl_vars['user']->value['user_type'])=='Admin'){?>
                    <li class="<?php if ($_smarty_tpl->tpl_vars['_sysfrm_menu']->value=='settings'){?>active<?php }?>">
                        <a href="#"><i class="icon-params"></i> <span class="nav-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Settings'];?>
 </span><span class="fa fa-angle-right"></span></a>
                        <ul class="nav nav-second-level">
                            <!-- <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/app/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['General Settings'];?>
</a></li> -->
                            <!-- <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/plugins/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plugins'];?>
</a></li> -->
                            <!-- <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/localisation/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Localisation'];?>
</a></li> -->
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage Users'];?>
</a></li>
                            <!-- <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/pg/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Payment Gateways'];?>
</a></li> -->

                            <?php if ($_smarty_tpl->tpl_vars['_c']->value['accounting']=='1'){?>
                                <!-- <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/expense-categories/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense Categories'];?>
</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/income-categories/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income Categories'];?>
</a></li> -->
                                <!-- <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/tags/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage Tags'];?>
</a></li> -->
                                <!-- <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/pmethods/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Payment Methods'];?>
</a></li> -->
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
tax/list/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales Taxes'];?>
</a></li>
                            <?php }?>


                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/emls/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email Settings'];?>
</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/email-templates/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email Templates'];?>
</a></li>
                            <!-- <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/customfields/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Custom Contact Fields'];?>
</a></li> -->
                            <!-- <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/automation/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Automation Settings'];?>
</a></li> -->
                            <!-- <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/api/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['API Access'];?>
</a></li> -->
                            <?php  $_smarty_tpl->tpl_vars['sm_settings'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sm_settings']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sub_menu_admin']->value['settings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sm_settings']->key => $_smarty_tpl->tpl_vars['sm_settings']->value){
$_smarty_tpl->tpl_vars['sm_settings']->_loop = true;
?>

                                <?php echo $_smarty_tpl->tpl_vars['sm_settings']->value;?>



                            <?php } ?>
                            <!-- <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/features/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Choose Features'];?>
</a></li> -->
                            
                        </ul>
                    </li>
                    <?php }?> 
                                         
                    <!--  -->
                    </ul>
    
                </div>
            </nav>
        </div>
        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-fixed-top white-bg" role="navigation" style="margin-bottom: 0">

                    <div class="navbar-logo">
                        <img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
sysfrm/uploads/system/logo-img.png" alt="Logo">
                        <img class="hidden-xs logo" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
sysfrm/uploads/system/logo.svg" alt="Logo">
                    </div>
                    
                    <div class="navbar-container">
                        <div class="left-nav">
                            <div class="navbar-header">
                                <a class="navbar-minimalize minimalize-styl-2" href="#"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-text-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-4-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm4-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-4-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                                  </svg></a>
                            </div>
                            <div class="nav-form hidden-xs">
                                <form class="m-n p-n" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/list/">
                                    <div class="input-group full-width">
                                        <input type="text" class="form-control" name="name" placeholder="Buscar clientes">
                                        <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div> 

                        <ul class="nav navbar-top-links navbar-right">    
                            
                            
                            
    
                            
    
                            <li class="dropdown">
                                <a class="dropdown-toggle count-info" data-toggle="dropdown" id="get_activity" href="#" aria-expanded="true">
                                    <svg width="1.4em" height="1.4em" viewBox="0 0 16 16" class="bi bi-bell" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2z"/>
                                        <path fill-rule="evenodd" d="M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                                      </svg></a>
                                      <div class="dropdown-backdrop"></div>
                                      <ul class="dropdown-menu dropdown-alerts" id="activity_loaded">
                                        <li id="activity_wait">
                                            <div class="text-center link-block">
                                                <a href="javascript:void(0)">


                                                </a>
                                            </div>
                                        </li>
                                  </ul>
                            </li>
                            <li class="dropdown navbar-user">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <?php if ($_smarty_tpl->tpl_vars['user']->value['img']=='gravatar'){?>
                                        <!-- <img src="http://www.gravatar.com/avatar/<?php echo md5(($_smarty_tpl->tpl_vars['user']->value['username']));?>
?s=200&d=mp" class="img-circle" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['fullname'];?>
"> -->
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/imgs/default-user-avatar.png" alt="">
                                    <?php }elseif($_smarty_tpl->tpl_vars['user']->value['img']==''){?>
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/imgs/default-user-avatar.png" alt="">
                                    <?php }else{ ?>
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['user']->value['img'];?>
" class="img-circle" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['fullname'];?>
">
                                    <?php }?>
    
                                    <span class="hidden-xs m-r-xs"> <?php echo $_smarty_tpl->tpl_vars['user']->value['fullname'];?>
</span> <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="arrow"></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-edit/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit Profile'];?>
</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/change-password/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Change Password'];?>
</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
logout/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Logout'];?>
</a></li>
                                </ul>
                            </li>
    
                        </ul>
                    </div>

                </nav>
            </div>

            <div class="row wrapper page-heading">
                <div class="col-lg-12">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_st']->value;?>


                </div>

            </div>

            <div class="wrapper wrapper-content">
                <?php if (isset($_smarty_tpl->tpl_vars['notify']->value)){?>
                <?php echo $_smarty_tpl->tpl_vars['notify']->value;?>

<?php }?><?php }} ?>