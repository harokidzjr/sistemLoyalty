<?php
$this->breadcrumbs=array(
	'Tukar Point Undians',
);

$this->menu=array(
array('label'=>'Create TukarPointUndian','url'=>array('create')),
array('label'=>'Manage TukarPointUndian','url'=>array('admin')),
);
?>

<h1>Tukar Point Undians</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
