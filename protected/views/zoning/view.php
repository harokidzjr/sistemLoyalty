<?php
$this->breadcrumbs=array(
	'Zonings'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Zoning','url'=>array('index')),
array('label'=>'Create Zoning','url'=>array('create')),
array('label'=>'Update Zoning','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Zoning','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Zoning','url'=>array('admin')),
);
?>

<h1>View Zoning #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'nama',
),
)); ?>
