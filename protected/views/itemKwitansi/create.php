<?php
$this->breadcrumbs=array(
	'Item Kwitansis'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List ItemKwitansi','url'=>array('index')),
array('label'=>'Manage ItemKwitansi','url'=>array('admin')),
);
?>

<h1>Create ItemKwitansi</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>