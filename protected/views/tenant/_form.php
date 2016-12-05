<?php
$form = $this->beginWidget('booster.widgets.TbActiveForm', array(
    'id' => 'tenant-form',
    'enableAjaxValidation' => false,
    'type' => 'horizontal',
        ));
?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>
<?php
echo $form->select2Group(
        $model, 'id_owner', array(
    'wrapperHtmlOptions' => array(
        'class' => 'col-sm-5',
    ),
    'widgetOptions' => array(
        'asDropDownList' => true,
        'data' => CHtml::listData(Owner::model()->findAll(), 'id', 'namaKtp'),
        'options' => array(
            'placeholder' => 'Pemilik Tenant',
        )
    )
        )
);
?>
<?php
echo $form->dropDownListGroup(
        $model, 'id_blok', array(
    'wrapperHtmlOptions' => array(
        'class' => 'col-sm-5',
    ),
    'widgetOptions' => array(
        'data' => CHtml::listData(Block::model()->findAll(), 'id', 'nama'),
        'htmlOptions' => array(
            'class' => 'col-lg-5',
        ),
    )
        )
);
?>
<?php
echo $form->dropDownListGroup(
        $model, 'id_lantai', array(
    'wrapperHtmlOptions' => array(
        'class' => 'col-sm-5',
    ),
    'widgetOptions' => array(
        'data' => CHtml::listData(Floor::model()->findAll(), 'id', 'nama'),
        'htmlOptions' => array(
            'class' => 'col-lg-5',
        ),
    )
        )
);
?>
<?php
echo $form->dropDownListGroup(
        $model, 'id_zoning', array(
    'wrapperHtmlOptions' => array(
        'class' => 'col-sm-5',
    ),
    'widgetOptions' => array(
        'data' => CHtml::listData(Zoning::model()->findAll(), 'id', 'nama'),
        'htmlOptions' => array(
            'class' => 'col-lg-5',
        ),
    )
        )
);
?>

<?php echo $form->textFieldGroup($model, 'nama_toko', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5', 'maxlength' => 50)))); ?>

<?php // echo $form->textFieldGroup($model, 'jns_jualan', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5', 'maxlength' => 50))));  ?>
<?php
echo $form->select2Group(
        $model, 'jns_jualan', array(
    'wrapperHtmlOptions' => array(
        'class' => 'col-sm-5',
    ),
    'widgetOptions' => array(
        'asDropDownList' => false,
//        'data' => CHtml::listData(JenisJualan::model()->findAll(array('distinct'=>true)), 'id', 'nama'),
        'options' => array(
            'tags' => JenisJualan::model()->ambilSemuaData(),
            'placeholder' => 'Jenis Jualan Toko',
            /* 'width' => '40%', */
            'tokenSeparators' => array(',', ' ')
        )
    )
        )
);
?>
<?php // echo $form->textFieldGroup($model, 'merk_dagang', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5', 'maxlength' => 50)))); ?>
<?php
echo $form->select2Group(
        $model, 'merk_dagang', array(
    'wrapperHtmlOptions' => array(
        'class' => 'col-sm-5',
    ),
    'widgetOptions' => array(
        'asDropDownList' => false,
//        'data' => CHtml::listData(JenisJualan::model()->findAll(array('distinct'=>true)), 'id', 'nama'),
        'options' => array(
            'tags' => MerkDagang::model()->ambilSemuaData(),
            'placeholder' => 'Merek yang dijual',
            /* 'width' => '40%', */
            'tokenSeparators' => array(',', ' ')
        )
    )
        )
);
?>

<?php // echo $form->textFieldGroup($model, 'lisensi', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5', 'maxlength' => 50)))); ?>
<?php
echo $form->select2Group(
        $model, 'lisensi', array(
    'wrapperHtmlOptions' => array(
        'class' => 'col-sm-5',
    ),
    'widgetOptions' => array(
        'asDropDownList' => false,
//        'data' => CHtml::listData(JenisJualan::model()->findAll(array('distinct'=>true)), 'id', 'nama'),
        'options' => array(
            'tags' => Lisensi::model()->ambilSemuaData(),
            'placeholder' => 'Lisensi Toko',
            /* 'width' => '40%', */
            'tokenSeparators' => array(',', ' ')
        )
    )
        )
);
?>
<?php echo $form->textFieldGroup($model, 'email_toko', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5', 'maxlength' => 50)))); ?>

<?php echo $form->textFieldGroup($model, 'tlpn_toko', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5', 'maxlength' => 50)))); ?>

<?php echo $form->textFieldGroup($model, 'wa_toko', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5', 'maxlength' => 50)))); ?>

<?php echo $form->textFieldGroup($model, 'fb_toko', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5', 'maxlength' => 50)))); ?>

<?php echo $form->textFieldGroup($model, 'instagram_toko', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5', 'maxlength' => 50)))); ?>

<?php echo $form->textFieldGroup($model, 'status_toko', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5', 'maxlength' => 50)))); ?>

<?php // echo $form->textFieldGroup($model, 'id_lantai', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5'))));  ?>

<?php // echo $form->textFieldGroup($model, 'id_zoning', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5'))));  ?>

<?php // echo $form->textFieldGroup($model, 'id_blok', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5'))));  ?>

<?php // echo $form->textFieldGroup($model, 'id_owner', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5'))));  ?>

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
