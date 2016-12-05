<?php
$this->breadcrumbs=array(
	'Points'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Point','url'=>array('index')),
array('label'=>'Manage Point','url'=>array('admin')),
);
?>

<h1>Create Point</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>