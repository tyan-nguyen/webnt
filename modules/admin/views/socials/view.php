<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Socials */
?>
<div class="socials-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'icon',
            'link',
            'priority',
        ],
    ]) ?>

</div>
