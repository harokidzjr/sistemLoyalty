<?php
$this->breadcrumbs=array(
	'Merk Dagangs'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List MerkDagang','url'=>array('index')),
array('label'=>'Manage MerkDagang','url'=>array('admin')),
);
?>

<h1>Create MerkDagang</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>