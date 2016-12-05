<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="panel">
  <div class="panel-heading">
    <span class="panel-title"><i class="fa fa-tint hidden-xs">&nbsp;&nbsp;</i>
      <?php echo CHtml::encode($this->pageTitle); ?>
    </span>
    <div class="panel-heading-controls" id="tooltip">
      <a class="btn btn-default btn-xs" data-toggle="modal" data-target="#help" data-placement="bottom" data-original-title="Bantuan"><i class="fa fa-question-circle"></i></a>
    </div> <!-- / .panel-heading-controls -->
  </div>
  <div class="panel-body">

    <?php echo $content; ?>
  </div>
</div>
<?php $this->endContent(); ?>