<?php
$this->breadcrumbs = array(
    'Kwitansis' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'List Kwitansi', 'url' => array('index')),
    array('label' => 'Manage Kwitansi', 'url' => array('admin')),
);
?>

<h1>Input Customer</h1>
<?php
$form = $this->beginWidget('booster.widgets.TbActiveForm', array(
    'id' => 'kwitansi-form',
    'enableAjaxValidation' => false,
//    'type' => 'horizontal',
        ));
?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

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
        'label' => 'Lanjutkan',
    ));
    ?>
</div>

<?php $this->endWidget(); ?>
