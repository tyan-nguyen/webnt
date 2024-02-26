<?php

use yii\helpers\Html;
$this->title = Yii::t('app', 'Create A Service');

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Services */

?>
<div class="services-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
