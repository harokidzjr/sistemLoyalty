<?php
$this->breadcrumbs=array(
	'Item Kwitansis'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List ItemKwitansi','url'=>array('index')),
array('label'=>'Create ItemKwitansi','url'=>array('create')),
array('label'=>'Update ItemKwitansi','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete ItemKwitansi','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage ItemKwitansi','url'=>array('admin')),
);
?>

<h1>View ItemKwitansi #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'harga',
		'nama_barang',
		'jumlah',
		'kode_barang',
		'no_resi',
),
)); ?>
