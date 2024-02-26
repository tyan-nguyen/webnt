<?php

use yii\widgets\DetailView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ShowCases */
?>
<div class="show-cases-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'image'=>[
                'attribute' => 'image',
                'format' => 'html',
                'value' => function($model){
                     return Html::img($model->image, ['class'=>'img-view-admin']);
                }
            ],
            'name',
            'name_en',
            'summary:ntext',
            'summary_en:ntext',
            'link_youtube',
            'priority',
            'date_created',
            //'user_created',
        ],
    ]) ?>

</div>
