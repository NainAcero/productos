<?php /* Smarty version Smarty-3.1.13, created on 2020-10-12 22:07:31
         compiled from "ui\theme\softhash\add-ps.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118825797febb607c71-59714858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2387a78d8806ad78d4857bb17c9d53a59423d495' => 
    array (
      0 => 'ui\\theme\\softhash\\add-ps.tpl',
      1 => 1601325250,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118825797febb607c71-59714858',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5797febb9d4739_06135682',
  'variables' => 
  array (
    'type' => 0,
    '_L' => 0,
    '_url' => 0,
    '_c' => 0,
    'nxt' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5797febb9d4739_06135682')) {function content_5797febb9d4739_06135682($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">

        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>
                        <?php if ($_smarty_tpl->tpl_vars['type']->value=='Product'){?>
                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Product'];?>

                            <?php }else{ ?>
                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Service'];?>

                        <?php }?>


                    </h5>
                    <div class="ibox-tools">
                       <?php if ($_smarty_tpl->tpl_vars['type']->value=='Product'){?>
                           <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
ps/p-list" class="btn btn-primary btn-xs">Lista de Productos</a>

                       <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['type']->value=='Service'){?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
ps/s-list" class="btn btn-primary btn-xs">Lista de Servicios</a>
                        <?php }?>


                    </div>
                </div>
                <div class="ibox-content" id="ibox_form">
                    <div class="alert alert-danger" id="emsg">
                        <span id="emsgbody"></span>
                    </div>

                    <form class="form-horizontal" id="rform">

                        <div class="form-group"><label class="control-label" for="name"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</label>

                            <input type="text" id="name" name="name" class="form-control" autocomplete="off">


                        </div>

                        <div class="form-group"><label class="control-label" for="sales_price"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales Price'];?>
</label>

                            <input type="text" id="sales_price" name="sales_price" class="form-control amount" autocomplete="off" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 "  data-a-dec="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['_c']->value['thousands_sep'];?>
" data-d-group="2">

                        </div>
                        <div class="form-group"><label class="control-label" for="item_number"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item Number'];?>
</label>

                            <input type="text" id="item_number" value="<?php echo $_smarty_tpl->tpl_vars['nxt']->value;?>
" name="item_number" class="form-control" autocomplete="off">

                            
                        </div>
                        <div class="form-group"><label class="control-label" for="description"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</label>

                            <textarea id="description" class="form-control" rows="3"></textarea>

                            
                        </div>


<input type="hidden" id="type" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">



                        <div class="form-group">
                            <div >

                                <button class="btn btn-primary" type="submit" id="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>
<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>