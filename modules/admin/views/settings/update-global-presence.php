<?php

use yii\helpers\Html;

$this->title = Yii::t('app', 'Update Page Global Presence');

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Settings */
?>
<div class="settings-update">

    <?= $this->render('_form_global_presence', [
        'model' => $model,
    ]) ?>

</div>
