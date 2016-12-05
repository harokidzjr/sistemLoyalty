<?php
$this->breadcrumbs=array(
	'Zonings',
);

$this->menu=array(
array('label'=>'Create Zoning','url'=>array('create')),
array('label'=>'Manage Zoning','url'=>array('admin')),
);
?>

<h1>Zonings</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
