

<?php
$form = $this->beginWidget('booster.widgets.TbActiveForm', array(
    'id' => 'login-form',
    'enableClientValidation' => true,
    'clientOptions' => array(
        'validateOnSubmit' => true,
    ),
    'type' => 'horizontal',
        ));
?>

<?php echo $form->textFieldGroup($model, 'username', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5', 'maxlength' => 64)))); ?>

<?php echo $form->passwordFieldGroup($model, 'password', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5', 'maxlength' => 64)))); ?>


<div class="form-actions">
<?php
$this->widget('booster.widgets.TbButton', array(
    'buttonType' => 'submit',
    'context' => 'primary',
    'label' => 'Login',
));
?>
</div>
<?php $this->endWidget(); ?>