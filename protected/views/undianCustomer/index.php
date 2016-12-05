<?php
$this->breadcrumbs=array(
	'Undian Customers',
);

$this->menu=array(
array('label'=>'Create UndianCustomer','url'=>array('create')),
array('label'=>'Manage UndianCustomer','url'=>array('admin')),
);
?>

<h1>Undian Customers</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
