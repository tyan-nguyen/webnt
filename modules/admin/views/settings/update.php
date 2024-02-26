<?php
use yii\helpers\Html;

$this->title = Yii::t('app', 'Edit Setting');

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Settings */
?>
<div class="settings-update">

	<?php 
    if(isset($status) && $status == 'success'){
    ?>
    <div class="alert alert-success" role="alert">
      <span class="glyphicon glyphicon-ok"></span> <?= Yii::t('app', 'Updated Success!') ?>
    </div>
    <?php } ?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
