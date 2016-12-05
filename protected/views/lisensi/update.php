<?php
$this->breadcrumbs=array(
	'Lisensis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Lisensi','url'=>array('index')),
	array('label'=>'Create Lisensi','url'=>array('create')),
	array('label'=>'View Lisensi','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Lisensi','url'=>array('admin')),
	);
	?>

	<h1>Update Lisensi <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>