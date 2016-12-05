<?php
$this->breadcrumbs=array(
	'Voucher Customers'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List VoucherCustomer','url'=>array('index')),
array('label'=>'Manage VoucherCustomer','url'=>array('admin')),
);
?>

<h1>Create VoucherCustomer</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>