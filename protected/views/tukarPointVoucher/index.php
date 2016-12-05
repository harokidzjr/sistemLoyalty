<?php
$this->breadcrumbs=array(
	'Tukar Point Vouchers',
);

$this->menu=array(
array('label'=>'Create TukarPointVoucher','url'=>array('create')),
array('label'=>'Manage TukarPointVoucher','url'=>array('admin')),
);
?>

<h1>Tukar Point Vouchers</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
