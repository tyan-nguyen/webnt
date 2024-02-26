<?php

use yii\helpers\Html;

$this->title = Yii::t('app', 'Create A Branch');
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Branches */

?>
<div class="branches-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
