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
    'type' => 'bordered condensed stripped',
    'dataProvider' => $model->search(),
    'columns' => array(
        'no_resi',
        'tanggal',
        'id_konversi',
        'id_tenant',
        'id_customer',
//        array(
//            'class' => 'booster.widgets.TbButtonColumn',
//        ),
        array(
            'header' => 'Action',
            'class' => 'booster.widgets.TbButtonColumn',
            'template' => '{item}',
            'htmlOptions' => array('class' => 'span2'),
            'buttons' => array(
                'item' => array(
                    'label' => 'Lihat Kwitansi',
                    'icon' => 'shopping-cart',
                    'url' => 'Yii::app()->createUrl("kwitansi/tambahItem", array("noResi"=>$data->no_resi))',
                    'options' => array(
                        'class' => 'btn btn-xs btn-success ',
                    ),
                ),
            ),
        ),
    ),
));
echo '<br>';
$this->widget('booster.widgets.TbButton', array(
    'buttonType' => 'link',
    'context' => 'success',
    'label' => 'Tambah Kwitansi',
    'url' => $this->createUrl('tambahKwitansiCustomer',array('idCustomer'=> $idCustomer)),
));
echo ' ';
$this->widget('booster.widgets.TbButton', array(
    'buttonType' => 'link',
    'context' => 'primary',
    'label' => 'Kembali',
    'url' => $this->createUrl('inputCustomer'),
));
?>
