<?php
$this->breadcrumbs=array(
	'Kwitansis',
);

$this->menu=array(
array('label'=>'Create Kwitansi','url'=>array('create')),
array('label'=>'Manage Kwitansi','url'=>array('admin')),
);
?>

<h1>Kwitansis</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
