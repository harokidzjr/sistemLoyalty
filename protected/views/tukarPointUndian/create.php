<?php
$this->breadcrumbs=array(
	'Tukar Point Undians'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List TukarPointUndian','url'=>array('index')),
array('label'=>'Manage TukarPointUndian','url'=>array('admin')),
);
?>

<h1>Create TukarPointUndian</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>