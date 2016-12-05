<?php
$this->breadcrumbs=array(
	'Owners'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Owner','url'=>array('index')),
array('label'=>'Create Owner','url'=>array('create')),
array('label'=>'Update Owner','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Owner','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Owner','url'=>array('admin')),
);
?>

<h1>View Owner #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'nama',
		'no_ktp',
		'tempat_lahir',
		'tgl_lahir',
		'alamat_ktp',
		'alamat_surat',
		'no_hp',
		'pin_bb',
		'no_wa',
		'email',
),
)); ?>
