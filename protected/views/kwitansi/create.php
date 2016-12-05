<?php
$this->breadcrumbs=array(
	'Kwitansis'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Kwitansi','url'=>array('index')),
array('label'=>'Manage Kwitansi','url'=>array('admin')),
);
?>

<h1>Create Kwitansi</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>