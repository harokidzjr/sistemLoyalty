<?php
$this->breadcrumbs=array(
	'Jenis Jualans'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List JenisJualan','url'=>array('index')),
array('label'=>'Manage JenisJualan','url'=>array('admin')),
);
?>

<h1>Create JenisJualan</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>