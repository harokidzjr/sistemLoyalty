<?php
$this->breadcrumbs=array(
	'Item Kwitansis',
);

$this->menu=array(
array('label'=>'Create ItemKwitansi','url'=>array('create')),
array('label'=>'Manage ItemKwitansi','url'=>array('admin')),
);
?>

<h1>Item Kwitansis</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
