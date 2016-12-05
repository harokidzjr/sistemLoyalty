<?php
$this->breadcrumbs=array(
	'Tukar Point Marchendises'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List TukarPointMarchendise','url'=>array('index')),
array('label'=>'Create TukarPointMarchendise','url'=>array('create')),
array('label'=>'Update TukarPointMarchendise','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete TukarPointMarchendise','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage TukarPointMarchendise','url'=>array('admin')),
);
?>

<h1>View TukarPointMarchendise #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'nama_marchendise',
		'keterangan',
		'periode_awal',
		'periode_akhir',
		'harga_tukar',
),
)); ?>
