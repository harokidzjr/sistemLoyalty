<?php
$form = $this->beginWidget('booster.widgets.TbActiveForm', array(
    'id' => 'konversi-form',
    'enableAjaxValidation' => false,
        ));
?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

<?php echo $form->textFieldGroup($model, 'nilai_konversi', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5')))); ?>

<?php
echo $form->dropDownListGroup($model, 'tipe', array(
    'widgetOptions' => array(
        'data' => array("Promo" => "Promo", "Tenant" => "Tenant"),
        'htmlOptions' => array(
            'prompt' => '== Select Tipe ==',
            'class' => 'input-large',
            'ajax' => array(
                'data' => array('tipe' => 'js:this.value'),
                'type' => 'POST',
                'url' => Yii::app()->createUrl('konversi/promoortenant'),
                'update' => '#' . CHtml::activeId($model, 'id_promo_or_tenant')
            ),
        )
    ),
));
?>

<?php
echo $form->dropDownListGroup($model, 'id_promo_or_tenant', array(
    'widgetOptions' => array(
        'data' => empty($model->tipe) ?
                array('placeholder'=>'== Select Promo Or Tenant ==') : $model->getUpdatePromoortenant($model->tipe),
        'htmlOptions' => array(
            'class' => 'span5',
            
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
