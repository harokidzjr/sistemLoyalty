<?php
$this->breadcrumbs = array(
    'Konversis' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Konversi', 'url' => array('index')),
    array('label' => 'Create Konversi', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('konversi-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<!--<h1>Manage Konversis</h1>

<p>
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
</div>-->

<?php
$this->widget('booster.widgets.TbGridView', array(
    'id' => 'konversi-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        'nilai_konversi',
//        'id_promo_or_tenant',        
        'tipe',
        array(
            'name' => 'id_promo_or_tenant',
            'type' => 'html',
            'value' => '$data->getPromoortenant($data->tipe)',
        ),
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
