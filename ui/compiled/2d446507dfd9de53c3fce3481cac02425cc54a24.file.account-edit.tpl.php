<?php /* Smarty version Smarty-3.1.13, created on 2020-10-12 22:05:54
         compiled from "ui\theme\softhash\account-edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14222910165f85199219afc0-23662663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d446507dfd9de53c3fce3481cac02425cc54a24' => 
    array (
      0 => 'ui\\theme\\softhash\\account-edit.tpl',
      1 => 1601325209,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14222910165f85199219afc0-23662663',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    '_url' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5f85199226c530_36087812',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f85199226c530_36087812')) {function content_5f85199226c530_36087812($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="row">
    <div class="col-md-6 col-sm-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit_Account'];?>
</h5>
            </div>
            <div class="ibox-content">
                <form role="form" name="accadd"  method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/edit-post" class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label" for="account"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account_Title'];?>
</label>
                        <input type="text" class="form-control" id="account" name="account" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->account;?>
">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="description"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</label>
                        <input type="text" class="form-control" id="description" name="description" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->description;?>
">
                    </div>


                    <div class="form-group">
                        <label class="control-label" for="account_number">Número de cuenta</label>
                        <input type="text" class="form-control" id="account_number" name="account_number" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->account_number;?>
">
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="contact_person">Contacto</label>
                        <input type="text" class="form-control" id="contact_person" name="contact_person" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->contact_person;?>
">
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="contact_phone"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
</label>
                        <input type="text" class="form-control" id="contact_phone" name="contact_phone" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->contact_phone;?>
">
                    </div>

                    <!-- <div class="form-group">
                        <label for="ib_url"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Internet Banking URL'];?>
</label>
                        <input type="text" class="form-control" id="ib_url" name="ib_url" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->ib_url;?>
">
                    </div> -->


<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                </form>
            </div>
        </div>
    </div> <!-- Widget-1 end-->

    <!-- Widget-2 end-->
</div>


<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>