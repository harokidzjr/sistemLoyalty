<?php
$this->breadcrumbs = array(
    'Kwitansis' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Kwitansi', 'url' => array('index')),
    array('label' => 'Create Kwitansi', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('kwitansi-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Kwitansi Customer</h1>

<?php
$this->widget('booster.widgets.TbGridView', array(
    'id' => 'kwitansi-grid',
    'dataProvider' => $model->search(),
    'columns' => array(
        'no_resi',
        'tanggal',
        'id_konversi',
        'id_tenant',
        'id_customer',
        array(
            'class' => 'booster.widgets.TbButtonColumn',
        ),
    ),
));
echo '<br>';
$this->widget('booster.widgets.TbButton', array(
    'buttonType' => 'link',
    'context' => 'primary',
    'label' => 'Kemabli',
    'url' => $this->createUrl('inputCustomer'),
));
?>
