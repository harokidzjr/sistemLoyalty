<?php
$this->breadcrumbs=array(
	'Tukar Point Undians'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List TukarPointUndian','url'=>array('index')),
	array('label'=>'Create TukarPointUndian','url'=>array('create')),
	array('label'=>'View TukarPointUndian','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage TukarPointUndian','url'=>array('admin')),
	);
	?>

	<h1>Update TukarPointUndian <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>