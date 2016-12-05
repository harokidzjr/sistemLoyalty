<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_undian')); ?>:</b>
	<?php echo CHtml::encode($data->no_undian); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tukar_point_undian')); ?>:</b>
	<?php echo CHtml::encode($data->id_tukar_point_undian); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_customer')); ?>:</b>
	<?php echo CHtml::encode($data->id_customer); ?>
	<br />


</div>