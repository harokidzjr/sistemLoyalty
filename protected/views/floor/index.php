<?php
$this->breadcrumbs=array(
	'Floors',
);

$this->menu=array(
array('label'=>'Create Floor','url'=>array('create')),
array('label'=>'Manage Floor','url'=>array('admin')),
);
?>

<h1>Floors</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
