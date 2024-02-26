<?php

use yii\helpers\Html;

$this->title = Yii::t('app', 'Update Branch in Homepage');

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Settings */
?>
<div class="settings-update">

    <?= $this->render('_form_branches', [
        'model' => $model,
    ]) ?>

</div>
