<?php
$form = $this->beginWidget('booster.widgets.TbActiveForm', array(
    'id' => 'promo-form',
    'enableAjaxValidation' => false,
        ));
?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

<?php echo $form->datePickerGroup($model, 'start_periode', array('widgetOptions' => array('options' => array('format'=>'yyyy-mm-dd'), 'htmlOptions' => array('class' => 'span5')), 'prepend' => '<i class="glyphicon glyphicon-calendar"></i>', 'append' => 'Click on Month/Year to select a different Month/Year.')); ?>

<?php echo $form->datePickerGroup($model, 'end_periode', array('widgetOptions' => array('options' => array('format'=>'yyyy-mm-dd'), 'htmlOptions' => array('class' => 'span5')), 'prepend' => '<i class="glyphicon glyphicon-calendar"></i>', 'append' => 'Click on Month/Year to select a different Month/Year.')); ?>

<?php // echo $form->textFieldGroup($model, 'apply_in', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5', 'maxlength' => 50)))); ?>
<?php
echo $form->select2Group(
        $model, 'apply_in', array(
    'wrapperHtmlOptions' => array(
        'class' => 'col-sm-5',
    ),
    'widgetOptions' => array(
        'asDropDownList' => false,
//        'data' => CHtml::listData(JenisJualan::model()->findAll(array('distinct'=>true)), 'id', 'nama'),
        'options' => array(
            'tags' => Apply::model()->ambilSemuaData(),
            'placeholder' => 'Jenis Jualan Toko',
            /* 'width' => '40%', */
            'tokenSeparators' => array(',', ' ')
        )
    )
        )
);
?>
<?php echo $form->dropDownListGroup($model, 'status', array('widgetOptions' => array('data' => array("Berlaku" => "Berlaku", "Tidak Berlaku" => "Tidak Berlaku"), 'htmlOptions' => array('class' => 'input-large')))); ?>

<?php echo $form->datePickerGroup($model, 'date_expired', array('widgetOptions' => array('options' => array('format'=>'yyyy-mm-dd'), 'htmlOptions' => array('class' => 'span5')), 'prepend' => '<i class="glyphicon glyphicon-calendar"></i>', 'append' => 'Click on Month/Year to select a different Month/Year.')); ?>

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
