<?php

use yii\helpers\Html;

$this->title = Yii::t('app', 'Update Page Sustainability');

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Settings */
?>
<div class="settings-update">

    <?= $this->render('_form_sustainability', [
        'model' => $model,
    ]) ?>

</div>
