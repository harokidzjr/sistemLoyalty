<?php
$form = $this->beginWidget('booster.widgets.TbActiveForm', array(
    'id' => 'point-form',
    'enableAjaxValidation' => false,
        ));
?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

<?php echo $form->datePickerGroup($model, 'tgl_topup', array('widgetOptions' => array('options' => array('format' => 'yyyy-mm-dd'), 'htmlOptions' => array('class' => 'span5')), 'prepend' => '<i class="glyphicon glyphicon-calendar"></i>', 'append' => 'Click on Month/Year to select a different Month/Year.')); ?>

<?php echo $form->textFieldGroup($model, 'point', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5')))); ?>

<?php // echo $form->textFieldGroup($model,'sudah_dipakai',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

<?php echo $form->dropDownListGroup($model, 'status', array('widgetOptions' => array('data' => array("Aktif" => "Aktif", "Tidak Aktif" => "Tidak Aktif"), 'htmlOptions' => array('class' => 'input-large')))); ?>

<?php echo $form->datePickerGroup($model, 'date_expired', array('widgetOptions' => array('options' => array('format' => 'yyyy-mm-dd'), 'htmlOptions' => array('class' => 'span5')), 'prepend' => '<i class="glyphicon glyphicon-calendar"></i>', 'append' => 'Click on Month/Year to select a different Month/Year.')); ?>

<?php // echo $form->textFieldGroup($model, 'no_resi', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5')))); ?>
<?php
echo $form->select2Group(
        $model, 'no_resi', array(
    'wrapperHtmlOptions' => array(
        'class' => 'col-sm-5',
    ),
    'widgetOptions' => array(
        'asDropDownList' => true,
        'data' => CHtml::listData(Kwitansi::model()->findAll(), 'id', 'resi'),
        'htmlOptions' => array(
            'placeholder' => '== Select No Resi ==',
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
