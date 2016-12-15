<div class="row">
    <div class="col-md-12">
        <h4>No Resi : <?= $modelKwitansi->no_resi ?></h4>
        <h4>Tenant  : <?= $modelKwitansi->idTenant->nama_toko ?></h4>
        <h4>Customer  : <?= $modelKwitansi->idCustomer->nama ?></h4>
    </div>
</div>
<?php
$this->widget('booster.widgets.TbGridView', array(
    'id' => 'item-kwitansi-grid',
    'dataProvider' => $modelList->search(),
    'type' => 'bordered condensed striped',
//    'filter' => $model,
    'columns' => array(
//        'id',
        'harga',
        'nama_barang',
        'jumlah',
        'kode_barang',
//        'no_resi',
    ),
));
?>
<br/>
<?php
$this->widget(
        'booster.widgets.TbButton', array(
    'label' => 'Tambah Item',
    'context' => 'primary',
    'htmlOptions' => array(
        'class' => 'btn btn-sm',
        'data-toggle' => 'modal',
        'data-target' => '#myModal',
    ),
        )
);
?>
<?php
$this->beginWidget(
        'booster.widgets.TbModal', array('id' => 'myModal')
);
?>

<div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h4>Tambah Item Kwitansi</h4>
</div>

<div class="modal-body">
    <?php
    $form = $this->beginWidget('booster.widgets.TbActiveForm', array(
        'id' => 'kwitansi-form',
        'enableAjaxValidation' => true,
//        'type' => 'horizontal',
    ));
    ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldGroup($model, 'kode_barang', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5', 'maxlength' => 50)))); ?>
    <?php echo $form->textFieldGroup($model, 'nama_barang', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5', 'maxlength' => 50)))); ?>
    <?php echo $form->textFieldGroup($model, 'harga', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5')))); ?>
    <?php echo $form->textFieldGroup($model, 'jumlah', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5')))); ?>


</div>

<div class="modal-footer">

    <?php
    $this->widget('booster.widgets.TbButton', array(
        'buttonType' => 'submit',
        'context' => 'primary',
        'label' => $model->isNewRecord ? 'Create' : 'Save',
    ));
    ?>

    <?php
    $this->widget(
            'booster.widgets.TbButton', array(
        'label' => 'Close',
        'url' => '#',
        'htmlOptions' => array('data-dismiss' => 'modal'),
            )
    );
    ?>
</div>
<?php $this->endWidget(); ?>
<?php $this->endWidget(); ?>