<?php /* Smarty version Smarty-3.1.13, created on 2020-10-14 11:33:47
         compiled from "ui\theme\softhash\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3832579806365323f4-68812012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c825d94af4212b194dac377bb1e41e234c7dee23' => 
    array (
      0 => 'ui\\theme\\softhash\\login.tpl',
      1 => 1602688371,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3832579806365323f4-68812012',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57980636837d34_04402121',
  'variables' => 
  array (
    '_L' => 0,
    '_title' => 0,
    'app_url' => 0,
    '_theme' => 0,
    '_c' => 0,
    '_url' => 0,
    'notify' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57980636837d34_04402121')) {function content_57980636837d34_04402121($_smarty_tpl) {?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $_smarty_tpl->tpl_vars['_L']->value['Login'];?>
 - <?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
</title>
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
sysfrm/uploads/icon/favicon.ico" type="image/x-icon" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/lib/fa/css/font-awesome.min.css" rel="stylesheet">


    <!-- ionicons -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/logincss.css" rel="stylesheet">

    <?php if ($_smarty_tpl->tpl_vars['_c']->value['rtl']=='1'){?>
        <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/bootstrap-rtl.min.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/style-rtl.min.css" rel="stylesheet">
    <?php }?>


</head>

<body>
<div class="no-navigation preload">
    <div class="sign-in-wrapper">
        <div class="login-brand text-center">
            <img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
sysfrm/uploads/system/logo-black.svg" alt="Logo" width="190">
        </div>
        <div class="sign-in-inner">
            <form class="login" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
admin/post/">
                <h2 class="text-dark font-600 text-center">Iniciar sesión</h2>
                <?php if (isset($_smarty_tpl->tpl_vars['notify']->value)){?>
                <?php echo $_smarty_tpl->tpl_vars['notify']->value;?>

                <?php }?>
                <div class="form-group m-bottom-md">
                    <label for="username"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email Address'];?>
</label>
                    <div class="form-input">
                        <input type="text" class="form-control" id="username" name="username">
                        <i class="fa fa-exclamation-triangle"></i>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
</label>
                    <div class="form-input">
                        <input type="password" class="form-control" id="password" name="password">
                        <i class="fa fa-exclamation-triangle"></i>
                    </div>
                </div>



                <div class="m-top-md p-top-sm">

                    <button class="btn btn-success block full-width" name="login" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sign in'];?>
</button>
                </div>

                <div class="m-top-md p-top-sm">
                    <div class="font-14 text-center m-bottom-xs">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
admin/forgot-pw/" class="font-14"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Forgot password'];?>
</a>

                    </div>


                </div>
            </form>
        </div><!-- ./sign-in-inner -->
    </div><!-- ./sign-in-wrapper -->
</div><!-- /wrapper -->



<!-- Le javascript
================================================== -->
<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/js/validation.js"></script>
<!-- Placed at the end of the document so the pages load faster -->

<!-- Jquery -->
<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/js/jquery-1.10.2.js"></script>

<!-- Bootstrap -->
<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/js/bootstrap.min.js"></script>


</body>
</html>
<?php }} ?>