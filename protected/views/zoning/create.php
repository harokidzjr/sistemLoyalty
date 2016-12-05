<?php
$this->breadcrumbs=array(
	'Zonings'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Zoning','url'=>array('index')),
array('label'=>'Manage Zoning','url'=>array('admin')),
);
?>

<h1>Create Zoning</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>