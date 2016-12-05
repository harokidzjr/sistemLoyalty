<?php
$this->breadcrumbs=array(
	'Item Kwitansis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List ItemKwitansi','url'=>array('index')),
	array('label'=>'Create ItemKwitansi','url'=>array('create')),
	array('label'=>'View ItemKwitansi','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage ItemKwitansi','url'=>array('admin')),
	);
	?>

	<h1>Update ItemKwitansi <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>