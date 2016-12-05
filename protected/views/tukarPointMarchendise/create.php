<?php
$this->breadcrumbs=array(
	'Tukar Point Marchendises'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List TukarPointMarchendise','url'=>array('index')),
array('label'=>'Manage TukarPointMarchendise','url'=>array('admin')),
);
?>

<h1>Create TukarPointMarchendise</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>