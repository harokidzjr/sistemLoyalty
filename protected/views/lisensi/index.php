<?php
$this->breadcrumbs=array(
	'Lisensis',
);

$this->menu=array(
array('label'=>'Create Lisensi','url'=>array('create')),
array('label'=>'Manage Lisensi','url'=>array('admin')),
);
?>

<h1>Lisensis</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
