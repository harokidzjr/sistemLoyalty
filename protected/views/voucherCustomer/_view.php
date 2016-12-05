<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_voucher')); ?>:</b>
	<?php echo CHtml::encode($data->kode_voucher); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tukar_point_voucher')); ?>:</b>
	<?php echo CHtml::encode($data->id_tukar_point_voucher); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_customer')); ?>:</b>
	<?php echo CHtml::encode($data->id_customer); ?>
	<br />


</div>