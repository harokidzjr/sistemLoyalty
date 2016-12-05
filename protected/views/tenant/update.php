<?php
$this->breadcrumbs=array(
	'Tenants'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Tenant','url'=>array('index')),
	array('label'=>'Create Tenant','url'=>array('create')),
	array('label'=>'View Tenant','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Tenant','url'=>array('admin')),
	);
	?>

	<h1>Update Tenant <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>