<?php
$this->breadcrumbs=array(
	'Konversis'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Konversi','url'=>array('index')),
array('label'=>'Create Konversi','url'=>array('create')),
array('label'=>'Update Konversi','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Konversi','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Konversi','url'=>array('admin')),
);
?>

<h1>View Konversi #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'nilai_konversi',
		'id_promo_or_tenant',
		'tipe',
),
)); ?>
