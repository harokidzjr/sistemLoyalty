<?php
$this->breadcrumbs=array(
	'Points'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Point','url'=>array('index')),
array('label'=>'Create Point','url'=>array('create')),
array('label'=>'Update Point','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Point','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Point','url'=>array('admin')),
);
?>

<h1>View Point #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'tgl_topup',
		'point',
		'sudah_dipakai',
		'status',
		'date_expired',
		'no_resi',
),
)); ?>
