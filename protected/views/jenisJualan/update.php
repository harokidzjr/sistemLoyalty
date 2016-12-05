<?php
$this->breadcrumbs=array(
	'Jenis Jualans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List JenisJualan','url'=>array('index')),
	array('label'=>'Create JenisJualan','url'=>array('create')),
	array('label'=>'View JenisJualan','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage JenisJualan','url'=>array('admin')),
	);
	?>

	<h1>Update JenisJualan <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>