<?php
$this->breadcrumbs=array(
	'Undian Customers'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List UndianCustomer','url'=>array('index')),
array('label'=>'Manage UndianCustomer','url'=>array('admin')),
);
?>

<h1>Create UndianCustomer</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>