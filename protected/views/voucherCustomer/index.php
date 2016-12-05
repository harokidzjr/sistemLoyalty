<?php
$this->breadcrumbs=array(
	'Voucher Customers',
);

$this->menu=array(
array('label'=>'Create VoucherCustomer','url'=>array('create')),
array('label'=>'Manage VoucherCustomer','url'=>array('admin')),
);
?>

<h1>Voucher Customers</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
