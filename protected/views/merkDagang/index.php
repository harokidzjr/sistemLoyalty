<?php
$this->breadcrumbs=array(
	'Merk Dagangs',
);

$this->menu=array(
array('label'=>'Create MerkDagang','url'=>array('create')),
array('label'=>'Manage MerkDagang','url'=>array('admin')),
);
?>

<h1>Merk Dagangs</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
