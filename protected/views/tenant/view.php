<?php
$this->breadcrumbs=array(
	'Tenants'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Tenant','url'=>array('index')),
array('label'=>'Create Tenant','url'=>array('create')),
array('label'=>'Update Tenant','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Tenant','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Tenant','url'=>array('admin')),
);
?>

<h1>View Tenant #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'nama_toko',
		'jns_jualan',
		'merk_dagang',
		'lisensi',
		'email_toko',
		'tlpn_toko',
		'wa_toko',
		'fb_toko',
		'instagram_toko',
		'status_toko',
		'id_lantai',
		'id_zoning',
		'id_blok',
		'id_owner',
),
)); ?>
