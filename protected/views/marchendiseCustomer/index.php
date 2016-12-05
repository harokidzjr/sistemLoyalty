<?php
$this->breadcrumbs=array(
	'Marchendise Customers',
);

$this->menu=array(
array('label'=>'Create MarchendiseCustomer','url'=>array('create')),
array('label'=>'Manage MarchendiseCustomer','url'=>array('admin')),
);
?>

<h1>Marchendise Customers</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
