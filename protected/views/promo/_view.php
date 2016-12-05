<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('start_periode')); ?>:</b>
	<?php echo CHtml::encode($data->start_periode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end_periode')); ?>:</b>
	<?php echo CHtml::encode($data->end_periode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apply_in')); ?>:</b>
	<?php echo CHtml::encode($data->apply_in); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_expired')); ?>:</b>
	<?php echo CHtml::encode($data->date_expired); ?>
	<br />


</div>