<?php
$this->breadcrumbs=array(
	'Lisensis'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Lisensi','url'=>array('index')),
array('label'=>'Manage Lisensi','url'=>array('admin')),
);
?>

<h1>Create Lisensi</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>