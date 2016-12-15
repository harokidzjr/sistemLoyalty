<?php
$form = $this->beginWidget('booster.widgets.TbActiveForm', array(
    'id' => 'kwitansi-form',
    'enableAjaxValidation' => false,
//    'type' => 'verti',
        ));
?>

<?php echo $form->errorSummary($modelKwitansi); ?>

<?php echo $form->textFieldGroup($modelKwitansi, 'no_resi', array('widgetOptions' => array('htmlOptions' => array('class' => 'col-md-6')))); ?>

<?php echo $form->datePickerGroup($modelKwitansi, 'tanggal', array('widgetOptions' => array('options' => array('format' => 'yyyy-mm-dd'), 'htmlOptions' => array('class' => 'col-md-6')), 'prepend' => '<i class="glyphicon glyphicon-calendar"></i>')); ?>

<?php // echo $form->textFieldGroup($modelKwitansi, 'id_konversi', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5'))));  ?>
<?php
echo $form->select2Group(
        $modelKwitansi, 'id_konversi', array(
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
<?php // echo $form->textFieldGroup($modelKwitansi, 'id_tenant', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5')))); ?>
<?php
echo $form->select2Group(
        $modelKwitansi, 'id_tenant', array(
    'wrapperHtmlOptions' => array(
        'class' => 'col-md-6',
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
<?php // echo $form->textFieldGroup($modelKwitansi, 'id_customer', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5')))); ?>
<?php
//echo $form->select2Group(
//        $modelKwitansi, 'id_customer', array(
//    'wrapperHtmlOptions' => array(
//        'class' => 'col-md-6',
//    ),
//    'widgetOptions' => array(
//        'asDropDownList' => true,
//        'data' => CHtml::listData(Customer::model()->findAll(), 'id', 'namaKtp'),
//        'options' => array(
//            'placeholder' => 'Customer',
//        )
//    )
//        )
//);
?>
<div class="form-actions">
    <?php
    $this->widget('booster.widgets.TbButton', array(
        'buttonType' => 'link',
        'context' => 'warning',
        'label' => 'Batal',
        'url' => $this->createUrl('lihatKwitansi', array('idCustomer' => $idCustomer)),
    ));
    echo ' ';

    $this->widget('booster.widgets.TbButton', array(
        'buttonType' => 'submit',
        'context' => 'primary',
        'label' => 'Lanjutkan Ke Item',
    ));
    ?>
</div>

<?php $this->endWidget(); ?>