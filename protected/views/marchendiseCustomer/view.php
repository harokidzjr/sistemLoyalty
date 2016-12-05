<?php
$this->breadcrumbs=array(
	'Marchendise Customers'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List MarchendiseCustomer','url'=>array('index')),
array('label'=>'Create MarchendiseCustomer','url'=>array('create')),
array('label'=>'Update MarchendiseCustomer','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete MarchendiseCustomer','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage MarchendiseCustomer','url'=>array('admin')),
);
?>

<h1>View MarchendiseCustomer #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'id_tukar_point_marchendise',
		'id_customer',
),
)); ?>
