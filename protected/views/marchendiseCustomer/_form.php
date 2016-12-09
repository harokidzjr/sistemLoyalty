<?php
$form = $this->beginWidget('booster.widgets.TbActiveForm', array(
    'id' => 'marchendise-customer-form',
    'enableAjaxValidation' => false,
    'type' => 'horizontal',
        ));
?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

<?php
echo $form->select2Group(
        $model, 'id_tukar_point_marchendise', array(
    'wrapperHtmlOptions' => array(
        'class' => 'col-sm-5',
    ),
    'widgetOptions' => array(
        'asDropDownList' => true,
        'data' => CHtml::listData(TukarPointMarchendise::model()->findAll(), 'id', 'marchendisePoint'),
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
