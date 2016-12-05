<?php
$this->breadcrumbs = array(
    'Tenants' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Tenant', 'url' => array('index')),
    array('label' => 'Create Tenant', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('tenant-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Manage Tenants</h1>

<!--<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
        &lt;&gt;</b>
    or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php
$this->renderPartial('_search', array(
    'model' => $model,
));
?>
</div> search-form -->

<?php
$this->widget('booster.widgets.TbGridView', array(
    'id' => 'tenant-grid',
    'type' => 'bordered striped condensed',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        'nama_toko',
        'jns_jualan',
        'merk_dagang',
        'lisensi',
        'email_toko',
        /*
          'tlpn_toko',
          'wa_toko',
          'fb_toko',
          'instagram_toko',
          'status_toko',
          'id_lantai',
          'id_zoning',
          'id_blok',
          'id_owner',
         */
        array(
            'class' => 'booster.widgets.TbButtonColumn',
        ),
    ),
));
echo '<br>';
$this->widget('booster.widgets.TbButton', array(
    'buttonType' => 'link',
    'context' => 'primary',
    'label' => 'Tambah',
    'url' => $this->createUrl('create'),
));
?>
