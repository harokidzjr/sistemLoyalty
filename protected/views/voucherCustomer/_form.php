<?php
$form = $this->beginWidget('booster.widgets.TbActiveForm', array(
    'id' => 'voucher-customer-form',
    'enableAjaxValidation' => false,
        ));
?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

<?php // echo $form->textFieldGroup($model, 'kode_voucher', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5')))); ?>

<?php // echo $form->textFieldGroup($model, 'id_tukar_point_voucher', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5')))); ?>

<?php // echo $form->textFieldGroup($model, 'id_customer', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5')))); ?>
<?php
echo $form->select2Group(
        $model, 'id_tukar_point_voucher', array(
    'wrapperHtmlOptions' => array(
        'class' => 'col-sm-5',
    ),
    'widgetOptions' => array(
        'asDropDownList' => true,
        'data' => CHtml::listData(TukarPointVoucher::model()->findAll(), 'id', 'voucherPoint'),
        'htmlOptions' => array(
            'placeholder' => '== Select Marchendise ==',
        )
    )
));
?>
<?php
echo $form->select2Group(
        $model, 'id_customer', array(
    'wrapperHtmlOptions' => array(
        'class' => 'col-sm-5',
    ),
    'widgetOptions' => array(
        'asDropDownList' => true,
        'data' => CHtml::listData(Customer::model()->findAll(), 'id', 'namaKtp'),
        'htmlOptions' => array(
            'placeholder' => '== Select Customer ==',
        )
    )
));
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
