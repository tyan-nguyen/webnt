<?php

use yii\widgets\DetailView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Carousel */
?>
<div class="carousel-view">
 
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
            'title_small',
            'title_small_en',
            'title_large',
            'title_large_en',
            'default_button'=>[
                'attribute' => 'default_button',
                'format' => 'html',
                'value'=>$model->default_button == 1 ? '<span class="label label-warning">YES</span>' : '<span class="label label-default">NO</span>'
            ],
            /* 'link_button1',
            'text_button1',
            'link_button2',
            'text_button2',
            'user_created',
            'date_created', */
        ],
        'template' => "<tr><th style='width: 20%;'>{label}</th><td>{value}.</td></tr>"
    ]) ?>

</div>
