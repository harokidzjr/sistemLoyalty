<?php
$this->breadcrumbs=array(
	'Jenis Jualans'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List JenisJualan','url'=>array('index')),
array('label'=>'Create JenisJualan','url'=>array('create')),
array('label'=>'Update JenisJualan','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete JenisJualan','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage JenisJualan','url'=>array('admin')),
);
?>

<h1>View JenisJualan #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'jns_jualan',
),
)); ?>
