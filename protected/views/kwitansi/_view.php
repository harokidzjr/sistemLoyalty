<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('no_resi')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->no_resi),array('view','id'=>$data->no_resi)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_konversi')); ?>:</b>
	<?php echo CHtml::encode($data->id_konversi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tenant')); ?>:</b>
	<?php echo CHtml::encode($data->id_tenant); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_customer')); ?>:</b>
	<?php echo CHtml::encode($data->id_customer); ?>
	<br />


</div>