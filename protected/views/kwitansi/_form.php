<?php
$form = $this->beginWidget('booster.widgets.TbActiveForm', array(
    'id' => 'kwitansi-form',
    'enableAjaxValidation' => false,
    'type' => 'horizontal',
        ));
?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

<?php echo $form->textFieldGroup($model, 'no_resi', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5')))); ?>

<?php echo $form->datePickerGroup($model, 'tanggal', array('widgetOptions' => array('options' => array('format' => 'yyyy-mm-dd'), 'htmlOptions' => array('class' => 'span5')), 'prepend' => '<i class="glyphicon glyphicon-calendar"></i>', 'append' => 'Click on Month/Year to select a different Month/Year.')); ?>

<?php // echo $form->textFieldGroup($model, 'id_konversi', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5'))));  ?>
<?php
echo $form->select2Group(
        $model, 'id_konversi', array(
    'wrapperHtmlOptions' => array(
        'class' => 'col-sm-5',
    ),
    'widgetOptions' => array(
        'asDropDownList' => true,
        'data' => CHtml::listData(Konversi::model()->findAll(), 'id', 'konversi'),
        'options' => array(
            'placeholder' => 'Konversi',
        )
    )
        )
);
?>
<?php // echo $form->textFieldGroup($model, 'id_tenant', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5')))); ?>
<?php
echo $form->select2Group(
        $model, 'id_tenant', array(
    'wrapperHtmlOptions' => array(
        'class' => 'col-sm-5',
    ),
    'widgetOptions' => array(
        'asDropDownList' => true,
        'data' => CHtml::listData(Tenant::model()->findAll(), 'id', 'nama_toko'),
        'options' => array(
            'placeholder' => 'Tenant',
        )
    )
        )
);
?>
<?php // echo $form->textFieldGroup($model, 'id_customer', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5')))); ?>
<?php
echo $form->select2Group(
        $model, 'id_customer', array(
    'wrapperHtmlOptions' => array(
        'class' => 'col-sm-5',
    ),
    'widgetOptions' => array(
        'asDropDownList' => true,
        'data' => CHtml::listData(Customer::model()->findAll(), 'id', 'namaKtp'),
        'options' => array(
            'placeholder' => 'Customer',
        )
    )
        )
);
?>
<div class="form-actions">
    <?php
    $this->widget('booster.widgets.TbButton', array(
        'buttonType' => 'submit',
        'context' => 'primary',
        'label' => $model->isNewRecord ? 'Create' : 'Save',
    ));
    ?>
</div>

<?php $this->endWidget(); ?>
