<?php

use yii\helpers\Html;

$this->title = Yii::t('app', 'Update contact us');

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Settings */
?>
<div class="settings-update">

    <?= $this->render('_form_contact', [
        'model' => $model,
    ]) ?>

</div>
