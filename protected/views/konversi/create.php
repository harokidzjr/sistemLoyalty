<?php
$this->breadcrumbs=array(
	'Konversis'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Konversi','url'=>array('index')),
array('label'=>'Manage Konversi','url'=>array('admin')),
);
?>

<h1>Create Konversi</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>