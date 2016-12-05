<?php
$this->breadcrumbs=array(
	'Konversis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Konversi','url'=>array('index')),
	array('label'=>'Create Konversi','url'=>array('create')),
	array('label'=>'View Konversi','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Konversi','url'=>array('admin')),
	);
	?>

	<h1>Update Konversi <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>