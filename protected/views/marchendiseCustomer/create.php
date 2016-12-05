<?php
$this->breadcrumbs=array(
	'Marchendise Customers'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List MarchendiseCustomer','url'=>array('index')),
array('label'=>'Manage MarchendiseCustomer','url'=>array('admin')),
);
?>

<h1>Create MarchendiseCustomer</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>