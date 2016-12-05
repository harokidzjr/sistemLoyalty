<?php
$this->breadcrumbs=array(
	'Tenants',
);

$this->menu=array(
array('label'=>'Create Tenant','url'=>array('create')),
array('label'=>'Manage Tenant','url'=>array('admin')),
);
?>

<h1>Tenants</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
