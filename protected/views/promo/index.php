<?php
$this->breadcrumbs=array(
	'Promos',
);

$this->menu=array(
array('label'=>'Create Promo','url'=>array('create')),
array('label'=>'Manage Promo','url'=>array('admin')),
);
?>

<h1>Promos</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
