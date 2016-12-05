<?php
$this->breadcrumbs=array(
	'Tukar Point Undians'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List TukarPointUndian','url'=>array('index')),
array('label'=>'Create TukarPointUndian','url'=>array('create')),
array('label'=>'Update TukarPointUndian','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete TukarPointUndian','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage TukarPointUndian','url'=>array('admin')),
);
?>

<h1>View TukarPointUndian #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'nama_undian',
		'keterangan',
		'periode_awal',
		'periode_akhir',
		'harga_tukar',
),
)); ?>
