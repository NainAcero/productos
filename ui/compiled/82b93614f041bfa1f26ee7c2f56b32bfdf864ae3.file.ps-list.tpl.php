<?php /* Smarty version Smarty-3.1.13, created on 2020-10-14 12:57:20
         compiled from "ui\theme\softhash\ps-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203785797fdb930c9e1-26168973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82b93614f041bfa1f26ee7c2f56b32bfdf864ae3' => 
    array (
      0 => 'ui\\theme\\softhash\\ps-list.tpl',
      1 => 1602688371,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203785797fdb930c9e1-26168973',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5797fdb95f8b13_62132495',
  'variables' => 
  array (
    'type' => 0,
    '_L' => 0,
    '_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5797fdb95f8b13_62132495')) {function content_5797fdb95f8b13_62132495($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="wrapper wrapper-content">

<div class="ibox">
<div class="ibox-title">
    <h5>Lista de <?php if ($_smarty_tpl->tpl_vars['type']->value=='Product'){?> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Products'];?>
 <?php }else{ ?> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Services'];?>
 <?php }?></h5>
    <div class="ibox-tools">
        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
ps/p-new" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Product'];?>
</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
ps/s-new" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Service'];?>
</a>
    </div>
</div>
<div class="ibox-content" id="ibox_form">

        <div class="form-group"><div class="input-group">
            <div class="input-group-addon">
                <span class="fa fa-search"></span>
            </div>
            <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Search'];?>
" id="txtsearch" class="form-control"> <span class="input-group-btn">
                                                <button type="button" id="search" class="btn btn-primary"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Search'];?>
</button> </span>
        </div></div>
        <input type="hidden" id="stype" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">


<div class="project-list">


<div id="sysfrm_ajaxrender">


</div>


</div>
</div>
</div>
</div>
<input type="hidden" id="_lan_are_you_sure" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['are_you_sure'];?>
">

<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>