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
<div class="panel">
  <div class="form-group">
    <input type="text" name="LoginForm[username]" id="LoginForm_username" class="form-control input-lg" placeholder="Username">
    <?php // echo $form->textField($model, 'username'); ?>
    <?php echo $form->error($model, 'username'); ?>
  </div>  

  <div class="form-group signin-password">
    <input type="password" name="LoginForm[password]" id="LoginForm_password" class="form-control input-lg" placeholder="Kata Sandi">
    <?php // echo $form->passwordField($model, 'password'); ?>
    <?php echo $form->error($model, 'password'); ?>
  </div>  

  <div class="form-actions">
    <input type="submit" value="Masuk" class="btn btn-primary btn-block btn-lg">
  </div>  
</div>  
<?php $this->endWidget(); ?>