<?php
$this->breadcrumbs=array(
	'Voucher Customers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List VoucherCustomer','url'=>array('index')),
	array('label'=>'Create VoucherCustomer','url'=>array('create')),
	array('label'=>'View VoucherCustomer','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage VoucherCustomer','url'=>array('admin')),
	);
	?>

	<h1>Update VoucherCustomer <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>