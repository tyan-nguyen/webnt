<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Branches */
?>
<div class="branches-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'id',
            'name',
            'country',
            'address:ntext',
            'email:email',
            'phone',
            'website',
            'twiter',
            'facebook',
            'likein',
            'instagram',
            'other:ntext',
           // 'image',
            'priority',
            /* 'date_created',
            'user_created', */
        ],
    ]) ?>

</div>
