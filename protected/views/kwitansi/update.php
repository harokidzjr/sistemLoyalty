<?php
$this->breadcrumbs=array(
	'Kwitansis'=>array('index'),
	$model->no_resi=>array('view','id'=>$model->no_resi),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Kwitansi','url'=>array('index')),
	array('label'=>'Create Kwitansi','url'=>array('create')),
	array('label'=>'View Kwitansi','url'=>array('view','id'=>$model->no_resi)),
	array('label'=>'Manage Kwitansi','url'=>array('admin')),
	);
	?>

	<h1>Update Kwitansi <?php echo $model->no_resi; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>