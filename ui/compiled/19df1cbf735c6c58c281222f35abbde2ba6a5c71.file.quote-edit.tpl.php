<?php /* Smarty version Smarty-3.1.13, created on 2020-10-14 16:19:20
         compiled from "ui\theme\softhash\quote-edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12543817475f876b58169145-55547296%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19df1cbf735c6c58c281222f35abbde2ba6a5c71' => 
    array (
      0 => 'ui\\theme\\softhash\\quote-edit.tpl',
      1 => 1602688371,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12543817475f876b58169145-55547296',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    'd' => 0,
    'c' => 0,
    'cs' => 0,
    'i' => 0,
    'extra_fields' => 0,
    't' => 0,
    'ts' => 0,
    '_c' => 0,
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5f876b582ece77_63052999',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f876b582ece77_63052999')) {function content_5f876b582ece77_63052999($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\xampp\\htdocs\\arduino\\sysfrm\\lib\\smarty\\libs\\plugins\\modifier.replace.php';
?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>
                    Editar Presupuesto
                </h5>

            </div>
            <div class="ibox-content" id="ibox_form">
                <form id="invform" method="post">
                    <div class="ibox-content">
                        <div class="row">
                            <div class="alert alert-danger" id="emsg">
                                <span id="emsgbody"></span>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="subject"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subject'];?>
</label>
                                    <input type="text" class="form-control" name="subject" id="subject" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['subject'];?>
">
                                </div>
                                <hr>
                            </div>
                        </div>

                        <div class="row">


                            <div class="col-md-6">
                                <div class="form-horizontal">





                                    <div class="form-group">
                                        <label for="cid" class="control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
</label>
                                        <span class="help-block"><a href="#"
                                            id="contact_add"><i class="fa fa-plus"></i>Añadir Cliente</a> </span>

                                            <select id="cid" name="cid" class="form-control">
                                                <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select Contact'];?>
...</option>
                                                <?php  $_smarty_tpl->tpl_vars['cs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['c']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cs']->key => $_smarty_tpl->tpl_vars['cs']->value){
$_smarty_tpl->tpl_vars['cs']->_loop = true;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['cs']->value['id'];?>
"
                                                            <?php if ($_smarty_tpl->tpl_vars['i']->value['account']==$_smarty_tpl->tpl_vars['cs']->value['account']){?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['cs']->value['account'];?>
 <?php if ($_smarty_tpl->tpl_vars['cs']->value['email']!=''){?>- <?php echo $_smarty_tpl->tpl_vars['cs']->value['email'];?>
<?php }?></option>
                                                <?php } ?>

                                            </select>
                                    </div>

                                    <?php echo $_smarty_tpl->tpl_vars['extra_fields']->value;?>


                                    <div class="form-group">
                                        <label for="inputPassword3"
                                               class="control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</label>
                                            <textarea id="address" readonly class="form-control" rows="5"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="invoicenum"
                                               class="control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quote Prefix'];?>
</label>

                                            <input type="text" class="form-control" id="invoicenum" name="invoicenum" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['invoicenum'];?>
">

                                    </div>

                                    <div class="form-group">
                                        <label for="cn"
                                               class="control-label">Número de Presupuesto</label>

                                            <input type="text" class="form-control" id="cn" name="cn" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['cn'];?>
">
                                            <small class="help-block">Dejar en blanco para generar un número automaticamente</small>
                                    </div>


                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <label for="inputEmail3"
                                               class="control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date Created'];?>
</label>

                                            <input type="text" class="form-control" id="idate" name="idate" datepicker
                                                   data-date-format="yyyy-mm-dd" data-auto-close="true"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['d']->value['datecreated'];?>
">
                                    </div>

                                    <div class="form-group">
                                        <label for="edate"
                                               class="control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expiry Date'];?>
</label>

                                            <input type="text" class="form-control" id="edate" name="edate" datepicker
                                                   data-date-format="yyyy-mm-dd" data-auto-close="true"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['d']->value['validuntil'];?>
">
                                    </div>

                                    <div class="form-group">
                                        <label for="stage"
                                               class="control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Stage'];?>
</label>

                                            <select class="form-control" name="stage" id="stage">
                                                <option value="Draft" <?php if ($_smarty_tpl->tpl_vars['d']->value['stage']=='Draft'){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Draft'];?>
</option>
                                                <option value="Delivered" <?php if ($_smarty_tpl->tpl_vars['d']->value['stage']=='Delivered'){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delivered'];?>
</option>
                                                <option value="Accepted" <?php if ($_smarty_tpl->tpl_vars['d']->value['stage']=='Accepted'){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Accepted'];?>
</option>
                                                <option value="Lost" <?php if ($_smarty_tpl->tpl_vars['d']->value['stage']=='Lost'){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Lost'];?>
</option>
                                                <option value="Dead" <?php if ($_smarty_tpl->tpl_vars['d']->value['stage']=='Dead'){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Dead'];?>
</option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tid" class="control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales TAX'];?>
</label>

                                            <select id="tid" name="tid" class="form-control">
                                                <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>
                                                <?php  $_smarty_tpl->tpl_vars['ts'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ts']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['t']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ts']->key => $_smarty_tpl->tpl_vars['ts']->value){
$_smarty_tpl->tpl_vars['ts']->_loop = true;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['ts']->value['id'];?>
"
                                                            <?php if ($_smarty_tpl->tpl_vars['ts']->value['name']==$_smarty_tpl->tpl_vars['i']->value['taxname']){?>selected="selected" <?php }?> ><?php echo $_smarty_tpl->tpl_vars['ts']->value['name'];?>

                                                        (<?php ob_start();?><?php echo number_format($_smarty_tpl->tpl_vars['ts']->value['rate'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>

                                                        %)
                                                    </option>
                                                <?php } ?>

                                            </select>
                                            <input type="hidden" id="stax" name="stax" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['taxrate'];?>
">
                                            <input type="hidden" id="discount_amount" name="discount_amount" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['discount_value'];?>
">
                                            <input type="hidden" id="discount_type" name="discount_type" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['discount_type'];?>
">
                                    </div>

                                    <div class="form-group">
                                        <label for="add_discount"
                                               class="control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Discount'];?>
</label>


                                            <a href="#" id="add_discount" class="btn-block"
                                               style="margin-top: 5px;"><i
                                                        class="fa fa-plus-square"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Set Discount'];?>
</a>
                                    </div>


                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <div class="form-group">
                                    <label for="proposal_text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Proposal Text'];?>
</label><span> (<?php echo $_smarty_tpl->tpl_vars['_L']->value['quote_help_top'];?>
)</span>

                                    <textarea class="form-control" id="proposal_text" name="proposal_text" rows="6"><?php echo $_smarty_tpl->tpl_vars['d']->value['proposal'];?>
</textarea>
                                </div>
                                <hr>
                            </div>
                        </div>



                        <div class="table-responsive m-t">

                            <table class="table invoice-table" id="invoice_items">
                                <thead>
                                <tr>
                                    <th width="10%">Codigo</th>
                                    <th width="50%">Nombre</th>
                                    <th width="10%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Qty'];?>
</th>
                                    <th width="10%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Price'];?>
</th>
                                    <th width="10%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</th>
                                    <th width="10%">Tax</th>

                                </tr>
                                </thead>
                                <tbody>

                                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                    <tr> <td><?php echo $_smarty_tpl->tpl_vars['item']->value['itemcode'];?>
</td> <td><textarea class="form-control item_name" name="desc[]" rows="3"><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</textarea> </td> <td><input type="text" class="form-control qty" value="<?php if (($_smarty_tpl->tpl_vars['_c']->value['dec_point'])==','){?><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['qty'],'.',',');?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['item']->value['qty'];?>
<?php }?>" name="qty[]"></td> <td><input type="text" class="form-control item_price" name="amount[]" value="<?php if (($_smarty_tpl->tpl_vars['_c']->value['dec_point'])==','){?><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['amount'],'.',',');?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['item']->value['amount'];?>
<?php }?>"></td> <td class="ltotal"><input type="text" class="form-control lvtotal" readonly="" value="<?php if (($_smarty_tpl->tpl_vars['_c']->value['dec_point'])==','){?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['item']->value['total'];?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_modifier_replace($_tmp2,'.',',');?>
<?php }else{ ?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['item']->value['total'];?>
<?php $_tmp3=ob_get_clean();?><?php echo $_tmp3;?>
<?php }?>"></td> <td> <select class="form-control taxed" name="taxed[]"> <option value="Yes" <?php if ($_smarty_tpl->tpl_vars['item']->value['taxable']=='1'){?>selected=""<?php }?>>Yes</option> <option value="No" <?php if ($_smarty_tpl->tpl_vars['item']->value['taxable']=='0'){?>selected=""<?php }?>>No</option></select></td></tr>
                                <?php } ?>



                                </tbody>
                            </table>



                        </div>
                        <!-- /table-responsive -->
                        <button type="button" class="btn btn-gray" id="blank-add"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add blank Line'];?>
</button>
                        <button type="button" class="btn btn-gray" id="item-add"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Product OR Service'];?>
</button>
                        <button type="button" class="btn btn-danger" id="item-remove"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</button>
                        <table class="table invoice-total">
                            <tbody>
                            <tr>
                                <td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sub Total'];?>
 :</strong></td>
                                <td id="sub_total" class="amount" data-a-sign="" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
"
                                    data-a-sep="" data-d-group="2"><?php echo $_smarty_tpl->tpl_vars['d']->value['subtotal'];?>

                                </td>
                            </tr>
                            <tr>
                                <td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Discount'];?>
 <span id="is_pt"></span> :</strong></td>
                                <td id="discount_amount_total" class="amount" data-a-sign=""
                                    data-a-dec="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
" data-a-sep="" data-d-group="2"><?php echo $_smarty_tpl->tpl_vars['d']->value['discount'];?>

                                </td>
                            </tr>
                            <tr>
                                <td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['TAX'];?>
 :</strong></td>
                                <td id="taxtotal" class="amount" data-a-sign="" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
"
                                    data-a-sep="" data-d-group="2"><?php echo $_smarty_tpl->tpl_vars['d']->value['tax1'];?>

                                </td>
                            </tr>
                            <tr>
                                <td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['TOTAL'];?>
 :</strong></td>
                                <td id="total" class="amount" data-a-sign="" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
"
                                    data-a-sep="" data-d-group="2"><?php echo $_smarty_tpl->tpl_vars['d']->value['total'];?>

                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <hr>

                        <div class="form-group">
                            <label for="customer_notes"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer Notes'];?>
</label><span> (<?php echo $_smarty_tpl->tpl_vars['_L']->value['quote_help_footer'];?>
)</span>
                            <textarea class="form-control" id="customer_notes" name="customer_notes" rows="6"><?php echo $_smarty_tpl->tpl_vars['d']->value['customernotes'];?>
</textarea>
                        </div>

                        <div class="text-right">
                            <input type="hidden" id="qid" name="qid" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
                            <input type="hidden" id="_dec_point" name="_dec_point" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
">
                            <input type="hidden" id="taxed_type" name="taxed_type" value="individual">
                            <button class="btn btn-info" id="save_n_close"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Save n Close'];?>
</button>
                            <button class="btn btn-primary" id="submit"><i class="fa fa-save"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>

                            </button>
                        </div>


                    </div>
                </form>


            </div>
        </div>
    </div>

</div>



<input type="hidden" id="_lan_set_discount" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Set Discount'];?>
">
<input type="hidden" id="_lan_discount" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Discount'];?>
">
<input type="hidden" id="_lan_discount_type" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Discount Type'];?>
">
<input type="hidden" id="_lan_percentage" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Percentage'];?>
">
<input type="hidden" id="_lan_fixed_amount" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Fixed Amount'];?>
">
<input type="hidden" id="_lan_btn_save" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
">

<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>