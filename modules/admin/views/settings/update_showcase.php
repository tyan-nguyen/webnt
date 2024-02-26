<?php

use yii\helpers\Html;

$this->title = Yii::t('app', 'Update Showcase in Homepage');

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Settings */
?>
<div class="settings-update">

    <?= $this->render('_form_showcase', [
        'model' => $model,
    ]) ?>

</div>
