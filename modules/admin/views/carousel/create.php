<?php

use yii\helpers\Html;
$this->title = Yii::t('app', 'Create A Carousel');

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Carousel */

?>
<div class="carousel-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
