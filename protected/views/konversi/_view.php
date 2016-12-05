<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nilai_konversi')); ?>:</b>
	<?php echo CHtml::encode($data->nilai_konversi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_promo_or_tenant')); ?>:</b>
	<?php echo CHtml::encode($data->id_promo_or_tenant); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipe')); ?>:</b>
	<?php echo CHtml::encode($data->tipe); ?>
	<br />


</div>