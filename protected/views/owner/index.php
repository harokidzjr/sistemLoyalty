<?php
$this->breadcrumbs=array(
	'Owners',
);

$this->menu=array(
array('label'=>'Create Owner','url'=>array('create')),
array('label'=>'Manage Owner','url'=>array('admin')),
);
?>

<h1>Owners</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
