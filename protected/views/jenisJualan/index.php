<?php
$this->breadcrumbs=array(
	'Jenis Jualans',
);

$this->menu=array(
array('label'=>'Create JenisJualan','url'=>array('create')),
array('label'=>'Manage JenisJualan','url'=>array('admin')),
);
?>

<h1>Jenis Jualans</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
