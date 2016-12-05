<?php
$this->breadcrumbs = array(
    'Owners' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Owner', 'url' => array('index')),
    array('label' => 'Create Owner', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('owner-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Manage Owners</h1>

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
    'id' => 'owner-grid',
    'type' => 'bordered striped condensed',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        'nama',
        'no_ktp',
        'tempat_lahir',
        'tgl_lahir',
        'alamat_ktp',
        /*
          'alamat_surat',
          'no_hp',
          'pin_bb',
          'no_wa',
          'email',
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
    'url' => $this->createUrl('/owner/create'),
));
?>
