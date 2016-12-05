<?php
$this->breadcrumbs=array(
	'Merk Dagangs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List MerkDagang','url'=>array('index')),
	array('label'=>'Create MerkDagang','url'=>array('create')),
	array('label'=>'View MerkDagang','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage MerkDagang','url'=>array('admin')),
	);
	?>

	<h1>Update MerkDagang <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>