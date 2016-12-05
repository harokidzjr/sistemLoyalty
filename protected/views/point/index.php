<?php
$this->breadcrumbs=array(
	'Points',
);

$this->menu=array(
array('label'=>'Create Point','url'=>array('create')),
array('label'=>'Manage Point','url'=>array('admin')),
);
?>

<h1>Points</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
