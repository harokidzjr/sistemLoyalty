<?php
$this->beginWidget(
        'booster.widgets.TbJumbotron', array(
    'heading' => 'Welcome!',
        )
);
?>

<p>Selamat datang di situs Loyalty Sistem</p>

<!--<p><?php
  $this->widget(
          'booster.widgets.TbButton', array(
      'context' => 'primary',
      'size' => 'large',
      'label' => 'Learn more',
          )
  );
  ?></p>-->

<?php $this->endWidget(); ?>