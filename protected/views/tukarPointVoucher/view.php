<?php
$this->breadcrumbs=array(
	'Tukar Point Vouchers'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List TukarPointVoucher','url'=>array('index')),
array('label'=>'Create TukarPointVoucher','url'=>array('create')),
array('label'=>'Update TukarPointVoucher','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete TukarPointVoucher','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage TukarPointVoucher','url'=>array('admin')),
);
?>

<h1>View TukarPointVoucher #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'nama_voucher',
		'keterangan',
		'periode_awal',
		'periode_akhir',
		'harga_tukar',
		'nilai_tukar',
),
)); ?>
