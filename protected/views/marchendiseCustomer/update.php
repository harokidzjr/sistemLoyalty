<?php
$this->breadcrumbs=array(
	'Marchendise Customers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List MarchendiseCustomer','url'=>array('index')),
	array('label'=>'Create MarchendiseCustomer','url'=>array('create')),
	array('label'=>'View MarchendiseCustomer','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage MarchendiseCustomer','url'=>array('admin')),
	);
	?>

	<h1>Update MarchendiseCustomer <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>