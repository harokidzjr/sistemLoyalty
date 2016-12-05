<?php
$this->breadcrumbs=array(
	'Merk Dagangs'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List MerkDagang','url'=>array('index')),
array('label'=>'Create MerkDagang','url'=>array('create')),
array('label'=>'Update MerkDagang','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete MerkDagang','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage MerkDagang','url'=>array('admin')),
);
?>

<h1>View MerkDagang #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'merk_dagang',
),
)); ?>
