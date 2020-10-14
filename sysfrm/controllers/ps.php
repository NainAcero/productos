<?php

_auth();
$ui->assign('_sysfrm_menu', 'ps');
$ui->assign('_title', $_L['Products n Services'].' - '. $config['CompanyName']);
$ui->assign('_st', $_L['Products n Services']);
$action = $routes['1'];
$user = User::_info();
$ui->assign('user', $user);
switch ($action) {

    case 'modal-list':

        $d = ORM::for_table('sys_items')->order_by_asc('name')->find_many();

        echo '
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h3>'.$_L['Products n Services'].'</h3>
</div>
<div class="modal-body">

<table class="table table-striped" id="items_table">
      <thead>
        <tr>
          <th width="10%">#</th>
          <th width="20%">'.$_L['Item Code'].'</th>
          <th width="55%">'.$_L['Item Name'].'</th>

          <th width="15%">'.$_L['Price'].'</th>
        </tr>
      </thead>
      <tbody>
       ';

        foreach($d as $ds){
           $price = number_format($ds['sales_price'],2,$config['dec_point'],$config['thousands_sep']);
            echo ' <tr>
          <td><input type="checkbox" class="si"></td>
          <td>'.$ds['item_number'].'</td>
          <td>'.$ds['name'].'</td>

          <td class="price">'.$price.'</td>
        </tr>';
        }

        echo '

      </tbody>
    </table>

</div>
<div class="modal-footer">

	<button type="button" data-dismiss="modal" class="btn">'.$_L['Close'].'</button>
	<button class="btn btn-primary update">'.$_L['Select'].'</button>
</div>';

        break;


    case 'p-new':



        $ui->assign('type','Product');
        $ui->assign('xfooter', Asset::js(array('numeric','jslib/add-ps')));
        $ui->assign('xjq', '
 $(\'.amount\').autoNumeric(\'init\');
 ');

        $max = ORM::for_table('sys_items')->max('id');
        $nxt = $max+1;
        $ui->assign('nxt',$nxt);
        $ui->display('add-ps.tpl');



        break;


    case 's-new':


        $ui->assign('type','Service');
        $ui->assign('xfooter', Asset::js(array('numeric','jslib/add-ps')));

        $ui->assign('xjq', '
 $(\'.amount\').autoNumeric(\'init\');
 ');

        $max = ORM::for_table('sys_items')->max('id');
        $nxt = $max+1;
        $ui->assign('nxt',$nxt);
        $ui->display('add-ps.tpl');



        break;


    case 'add-post':
        $name = _post('name');
        $sales_price = _post('sales_price');
        $sales_price = Finance::amount_fix($sales_price);
        $item_number = _post('item_number');
        $description = _post('description');
        $type = _post('type');

        $msg = '';

        if($name == ''){
            $msg .= 'Item Name is required <br>';
        }
       if(!is_numeric($sales_price)){
           $sales_price = '0.00';
       }


        if($msg == ''){


            $d = ORM::for_table('sys_items')->create();
            $d->name = $name;
            $d->sales_price = $sales_price;
            $d->item_number = $item_number;
            $d->description = $description;
            $d->type = $type;
//others
            $d->unit = '';
            $d->e = '';
            $d->save();

            _msglog('s',$_L['Item Added Successfully']);

            echo $d->id();
        }
        else{
            echo $msg;
        }
        break;


    case 'view':
//        $id  = $routes['2'];
//        $d = ORM::for_table('sys_items')->find_one($id);
//        if($d){
//
//            //find all activity for this user
//            $ac = ORM::for_table('sys_activity')->where('cid',$id)->limit(20)->order_by_desc('id')->find_many();
//            $ui->assign('ac',$ac);
//            $ui->assign('countries',Countries::all($d['country']));
//
//            $ui->assign('xheader', '
//<link rel="stylesheet" type="text/css" href="' . $_theme . '/lib/select2/select2.css"/>
//
//');
//            $ui->assign('xfooter', '
//<script type="text/javascript" src="' . $_theme . '/lib/select2/select2.min.js"></script>
//<script type="text/javascript" src="' . $_theme . '/lib/profile.js"></script>
//
//');
//
//            $ui->assign('xjq', '
// $("#country").select2();
//
// ');
//            $ui->assign('d',$d);
//            $ui->display('ps-view.tpl');
//
//        }
//        else{
//         //   r2(U . 'customers/list', 'e', $_L['Account_Not_Found']);
//
//        }

        break;




    case 'p-list':
        $paginator = Paginator::bootstrap('sys_items','type','Product');
        $d = ORM::for_table('sys_items')->where('type','Product')->offset($paginator['startpoint'])->limit($paginator['limit'])->order_by_desc('id')->find_many();
        $ui->assign('d',$d);
        $ui->assign('type','Product');
        $ui->assign('paginator',$paginator);
        $ui->assign('xheader', '
<link rel="stylesheet" type="text/css" href="' . $_theme . '/css/modal.css"/>

');
        $ui->assign('xfooter', '
        <script type="text/javascript" src="' . $_theme . '/lib/modal.js"></script>
<script type="text/javascript" src="' . $_theme . '/lib/ps-list.js"></script>

');
        $ui->display('ps-list.tpl');
        break;

    case 's-list':

        $paginator = Paginator::bootstrap('sys_items','type','Service');
        $d = ORM::for_table('sys_items')->where('type','Service')->offset($paginator['startpoint'])->limit($paginator['limit'])->order_by_desc('id')->find_many();
        $ui->assign('d',$d);
        $ui->assign('type','Service');
        $ui->assign('paginator',$paginator);
        $ui->assign('xheader', '
<link rel="stylesheet" type="text/css" href="' . $_theme . '/css/modal.css"/>

');
        $ui->assign('xfooter', '
                <script type="text/javascript" src="' . $_theme . '/lib/modal.js"></script>
<script type="text/javascript" src="' . $_theme . '/lib/ps-list.js"></script>
');
        $ui->display('ps-list.tpl');
        break;


    case 'edit-post':
        $msg = '';
        $id = _post('id');
        $price = _post('price');
        $price = Finance::amount_fix($price);
        $name = _post('name');
        $item_number = _post('item_number');
        $description = _post('description');
        if($name == ''){
            $msg .= 'Name is Required <br>';
        }
        if(!is_numeric($price)){
            $msg .= 'Invalid Sales Price <br>';
        }


        if($msg == ''){
            $d = ORM::for_table('sys_items')->find_one($id);
            if($d){
                $d->name = $name;
                $d->item_number = $item_number;
                $d->sales_price = $price;
                $d->description = $description;
                $d->save();
                echo $d->id();
            }
            else{
                echo 'Not Found';
            }


        }
        else{
            echo $msg;
        }


        break;
    case 'delete':
        $id = $routes['2'];
        if($_app_stage == 'Demo'){
            r2(U . 'accounts/list', 'e', 'Sorry! Deleting Account is disabled in the demo mode.');
        }
        $d = ORM::for_table('sys_accounts')->find_one($id);
        if($d){
            $d->delete();
            r2(U . 'accounts/list', 's', $_L['account_delete_successful']);
        }

        break;

    case 'edit-form':

        $id = $routes['2'];
        $d = ORM::for_table('sys_items')->find_one($id);
        if($d){
            $price = number_format(($d['sales_price']),2,$config['dec_point'],$config['thousands_sep']);
            echo '
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h3>'.$_L['Edit'].'</h3>
</div>
<div class="modal-body">

<form class="form-horizontal" role="form" id="edit_form" method="post">
  <div class="form-group">
    <label for="name" class="control-label">'.$_L['Name'].'</label>
      <input type="text" class="form-control" value="'.$d['name'].'" name="name" id="name">
  </div>
  <div class="form-group">
    <label for="rate" class="control-label">'.$_L['Item Number'].'</label>
      <input type="text" class="form-control" name="item_number" value="'.$d['item_number'].'" id="item_number">
      <input type="hidden" name="id" value="'.$d['id'].'">
  </div>
  <div class="form-group">
    <label for="rate" class="control-label">'.$_L['Price'].'</label>
      <input type="text" class="form-control" name="price" value="'.$price.'" id="price">
      <input type="hidden" name="id" value="'.$d['id'].'">
  </div>
    <div class="form-group">
    <label for="name" class="control-label">'.$_L['Description'].'</label>

      <textarea id="description" name="description" class="form-control" rows="3">'.$d['description'].'</textarea>

  </div>
</form>

</div>
<div class="modal-footer">

	<button type="button" data-dismiss="modal" class="btn">'.$_L['Close'].'</button>
	<button id="update" class="btn btn-primary">'.$_L['Update'].'</button>
</div>';
        }
        else{
            echo 'not found';
        }



        break;



    case 'post':

        break;

    default:
        echo 'action not defined';
}