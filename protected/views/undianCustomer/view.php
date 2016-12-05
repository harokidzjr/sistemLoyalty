<?php
$this->breadcrumbs=array(
	'Undian Customers'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List UndianCustomer','url'=>array('index')),
array('label'=>'Create UndianCustomer','url'=>array('create')),
array('label'=>'Update UndianCustomer','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete UndianCustomer','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage UndianCustomer','url'=>array('admin')),
);
?>

<h1>View UndianCustomer #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'no_undian',
		'id_tukar_point_undian',
		'id_customer',
),
)); ?>
