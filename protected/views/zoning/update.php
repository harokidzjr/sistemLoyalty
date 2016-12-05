<?php
$this->breadcrumbs=array(
	'Zonings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Zoning','url'=>array('index')),
	array('label'=>'Create Zoning','url'=>array('create')),
	array('label'=>'View Zoning','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Zoning','url'=>array('admin')),
	);
	?>

	<h1>Update Zoning <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>