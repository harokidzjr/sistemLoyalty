<?php
$this->breadcrumbs=array(
	'Undian Customers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List UndianCustomer','url'=>array('index')),
	array('label'=>'Create UndianCustomer','url'=>array('create')),
	array('label'=>'View UndianCustomer','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage UndianCustomer','url'=>array('admin')),
	);
	?>

	<h1>Update UndianCustomer <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>