<?php
$this->breadcrumbs=array(
	'Lisensis'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Lisensi','url'=>array('index')),
array('label'=>'Create Lisensi','url'=>array('create')),
array('label'=>'Update Lisensi','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Lisensi','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Lisensi','url'=>array('admin')),
);
?>

<h1>View Lisensi #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'lisensi',
),
)); ?>
