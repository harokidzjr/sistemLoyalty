<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_topup')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_topup); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('point')); ?>:</b>
	<?php echo CHtml::encode($data->point); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sudah_dipakai')); ?>:</b>
	<?php echo CHtml::encode($data->sudah_dipakai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_expired')); ?>:</b>
	<?php echo CHtml::encode($data->date_expired); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_resi')); ?>:</b>
	<?php echo CHtml::encode($data->no_resi); ?>
	<br />


</div>