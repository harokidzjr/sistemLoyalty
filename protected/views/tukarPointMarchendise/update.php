<?php
$this->breadcrumbs=array(
	'Tukar Point Marchendises'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List TukarPointMarchendise','url'=>array('index')),
	array('label'=>'Create TukarPointMarchendise','url'=>array('create')),
	array('label'=>'View TukarPointMarchendise','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage TukarPointMarchendise','url'=>array('admin')),
	);
	?>

	<h1>Update TukarPointMarchendise <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>