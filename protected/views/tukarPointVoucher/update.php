<?php
$this->breadcrumbs=array(
	'Tukar Point Vouchers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List TukarPointVoucher','url'=>array('index')),
	array('label'=>'Create TukarPointVoucher','url'=>array('create')),
	array('label'=>'View TukarPointVoucher','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage TukarPointVoucher','url'=>array('admin')),
	);
	?>

	<h1>Update TukarPointVoucher <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>