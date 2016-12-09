<?php
$form = $this->beginWidget('booster.widgets.TbActiveForm', array(
    'id' => 'undian-customer-form',
    'enableAjaxValidation' => false,
        ));
?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

<?php // echo $form->textFieldGroup($model, 'no_undian', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5', 'maxlength' => 50)))); ?>

<?php // echo $form->textFieldGroup($model, 'id_tukar_point_undian', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5')))); ?>

<?php // echo $form->textFieldGroup($model, 'id_customer', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5')))); ?>
<?php
echo $form->select2Group(
        $model, 'id_tukar_point_undian', array(
    'wrapperHtmlOptions' => array(
        'class' => 'col-sm-5',
    ),
    'widgetOptions' => array(
        'asDropDownList' => true,
        'data' => CHtml::listData(TukarPointUndian::model()->findAll(), 'id', 'undianPoint'),
        'htmlOptions' => array(
            'placeholder' => '== Select Undian ==',
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
