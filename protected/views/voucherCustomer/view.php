<?php
$this->breadcrumbs=array(
	'Voucher Customers'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List VoucherCustomer','url'=>array('index')),
array('label'=>'Create VoucherCustomer','url'=>array('create')),
array('label'=>'Update VoucherCustomer','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete VoucherCustomer','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage VoucherCustomer','url'=>array('admin')),
);
?>

<h1>View VoucherCustomer #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'kode_voucher',
		'id_tukar_point_voucher',
		'id_customer',
),
)); ?>
