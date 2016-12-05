<?php
$this->breadcrumbs=array(
	'Tukar Point Marchendises',
);

$this->menu=array(
array('label'=>'Create TukarPointMarchendise','url'=>array('create')),
array('label'=>'Manage TukarPointMarchendise','url'=>array('admin')),
);
?>

<h1>Tukar Point Marchendises</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
