<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_marchendise')); ?>:</b>
	<?php echo CHtml::encode($data->nama_marchendise); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan')); ?>:</b>
	<?php echo CHtml::encode($data->keterangan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('periode_awal')); ?>:</b>
	<?php echo CHtml::encode($data->periode_awal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('periode_akhir')); ?>:</b>
	<?php echo CHtml::encode($data->periode_akhir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga_tukar')); ?>:</b>
	<?php echo CHtml::encode($data->harga_tukar); ?>
	<br />


</div>