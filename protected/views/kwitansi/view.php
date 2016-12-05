<?php
$this->breadcrumbs=array(
	'Kwitansis'=>array('index'),
	$model->no_resi,
);

$this->menu=array(
array('label'=>'List Kwitansi','url'=>array('index')),
array('label'=>'Create Kwitansi','url'=>array('create')),
array('label'=>'Update Kwitansi','url'=>array('update','id'=>$model->no_resi)),
array('label'=>'Delete Kwitansi','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->no_resi),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Kwitansi','url'=>array('admin')),
);
?>

<h1>View Kwitansi #<?php echo $model->no_resi; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'no_resi',
		'tanggal',
		'id_konversi',
		'id_tenant',
		'id_customer',
),
)); ?>
