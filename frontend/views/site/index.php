8
<?php
/* @var $this yii\web\View */
$this->title = 'Work Flow & Map';
?>
<div id="homemap"></div>
<div class="btn-group-fab" role="group" aria-label="FAB Menu">
  <div>
    <button type="button" class="btn btn-main btn-primary has-tooltip" data-placement="left" title="Menu"> <i class="fa fa-bars"></i> </button>
    <button type="button" class="btn btn-sub btn-info has-tooltip" data-placement="left" title="Fullscreen"> <i class="fa fa-arrows-alt"></i> </button>
    <button type="button" class="btn btn-sub btn-danger has-tooltip" data-placement="left" title="Save"> <i class="fa fa-floppy-o"></i> </button>
    <?= Html::a('<i class="fa fa-plus"></i>', ['listing/create'], ['class' => 'btn btn-sub btn-success has-tooltip','title'=>'Add Listing']) ?>
  </div>
</div>
