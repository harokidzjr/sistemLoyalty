<?php
$this->breadcrumbs=array(
	'Tukar Point Vouchers'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List TukarPointVoucher','url'=>array('index')),
array('label'=>'Manage TukarPointVoucher','url'=>array('admin')),
);
?>

<h1>Create TukarPointVoucher</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>