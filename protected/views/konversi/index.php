<?php
$this->breadcrumbs=array(
	'Konversis',
);

$this->menu=array(
array('label'=>'Create Konversi','url'=>array('create')),
array('label'=>'Manage Konversi','url'=>array('admin')),
);
?>

<h1>Konversis</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
