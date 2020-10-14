<?php /* Smarty version Smarty-3.1.13, created on 2020-10-14 16:17:53
         compiled from "ui\theme\softhash\add-quote.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2514284495f876b01a86116-33127988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db96e752b8e81c6801790584fbf4ca34a8b76993' => 
    array (
      0 => 'ui\\theme\\softhash\\add-quote.tpl',
      1 => 1602688371,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2514284495f876b01a86116-33127988',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    'c' => 0,
    'cs' => 0,
    'p_cid' => 0,
    'extra_fields' => 0,
    'idate' => 0,
    't' => 0,
    'ts' => 0,
    '_c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5f876b01b938b9_41545718',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f876b01b938b9_41545718')) {function content_5f876b01b938b9_41545718($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>
                   Crear Nuevo Presupuesto
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
                                    <input type="text" class="form-control" name="subject" id="subject">
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
                                            id="contact_add"><i
                                            class="fa fa-plus"></i>Nuevo Cliente</a></span>

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
                                                            <?php if ($_smarty_tpl->tpl_vars['p_cid']->value==($_smarty_tpl->tpl_vars['cs']->value['id'])){?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['cs']->value['account'];?>
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

                                        <div class="">
                                            <input type="text" class="form-control" id="invoicenum" name="invoicenum">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="cn"
                                               class="control-label">Numero de Presupuesto</label>

                                            <input type="text" class="form-control" id="cn" name="cn">
                                            <small class="help-block">Dejar en blanco para generar un numero automaticamente</small>
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
                                                   value="<?php echo $_smarty_tpl->tpl_vars['idate']->value;?>
">
                                    </div>

                                    <div class="form-group">
                                        <label for="edate"
                                               class="control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expiry Date'];?>
</label>

                                            <input type="text" class="form-control" id="edate" name="edate" datepicker
                                                   data-date-format="yyyy-mm-dd" data-auto-close="true"
                                                   value="<?php echo ib_after_1_month();?>
">
                                    </div>

                                    <div class="form-group">
                                        <label for="stage"
                                               class="control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Stage'];?>
</label>

                                            <select class="form-control" name="stage" id="stage">
                                                <option value="Draft"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Draft'];?>
</option>
                                                <option value="Delivered"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delivered'];?>
</option>
                                                <option value="Accepted"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Accepted'];?>
</option>
                                                <option value="Lost"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Lost'];?>
</option>
                                                <option value="Dead"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Dead'];?>
</option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tid" class="control-label">Impuesto</label>

                                            <select id="tid" name="tid" class="form-control">
                                                <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>
                                                <?php  $_smarty_tpl->tpl_vars['ts'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ts']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['t']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ts']->key => $_smarty_tpl->tpl_vars['ts']->value){
$_smarty_tpl->tpl_vars['ts']->_loop = true;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['ts']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ts']->value['name'];?>

                                                        (<?php ob_start();?><?php echo number_format($_smarty_tpl->tpl_vars['ts']->value['rate'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>

                                                        %)
                                                    </option>
                                                <?php } ?>

                                            </select>
                                            <input type="hidden" id="stax" name="stax" value="0.00">
                                            <input type="hidden" id="discount_amount" name="discount_amount" value="">
                                            <input type="hidden" id="discount_type" name="discount_type" value="p">
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
                                    <label for="proposal_text">Descripcion del presupuesto</label><span> (<?php echo $_smarty_tpl->tpl_vars['_L']->value['quote_help_top'];?>
)</span>
                                    <textarea class="form-control" id="proposal_text" name="proposal_text" rows="6"></textarea>
                                </div>
                                <hr>
                            </div>
                        </div>



                        <div class="table-responsive">
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
                                    <th width="10%">Impuesto</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr> <td></td> <td><textarea class="form-control item_name" name="desc[]" rows="3"></textarea> </td> <td><input type="text" class="form-control qty" value="" name="qty[]"></td> <td><input type="text" class="form-control item_price" name="amount[]" value=""></td> <td class="ltotal"><input type="text" class="form-control lvtotal" readonly="" value=""></td> <td> <select class="form-control taxed" name="taxed[]"> <option value="Yes">Yes</option> <option value="No" selected="">No</option></select></td></tr>

                                </tbody>
                            </table>

                            <hr>

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
                                    data-a-sep="" data-d-group="2">0.00
                                </td>
                            </tr>
                            <tr>
                                <td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Discount'];?>
 <span id="is_pt"></span> :</strong></td>
                                <td id="discount_amount_total" class="amount" data-a-sign=""
                                    data-a-dec="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
" data-a-sep="" data-d-group="2">0.00
                                </td>
                            </tr>
                            <tr>
                                <td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['TAX'];?>
 :</strong></td>
                                <td id="taxtotal" class="amount" data-a-sign="" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
"
                                    data-a-sep="" data-d-group="2">0.00
                                </td>
                            </tr>
                            <tr>
                                <td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['TOTAL'];?>
 :</strong></td>
                                <td id="total" class="amount" data-a-sign="" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
"
                                    data-a-sep="" data-d-group="2">0.00
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <hr>

                        <div class="form-group">
                            <label for="customer_notes"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer Notes'];?>
</label><span> (<?php echo $_smarty_tpl->tpl_vars['_L']->value['quote_help_footer'];?>
)</span>
                            <textarea class="form-control" id="customer_notes" name="customer_notes" rows="6"></textarea>
                        </div>

                        <div class="text-right">
                            <input type="hidden" id="_dec_point" name="_dec_point" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
">
                            <input type="hidden" id="taxed_type" name="taxed_type" value="individual">
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
<input type="hidden" id="_lan_no_results_found" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No results found'];?>
">
<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>