<?php
use yii\helpers\Url;
use yii\helpers\Html;

return [
    [
        'class' => 'kartik\grid\CheckboxColumn',
        'width' => '20px',
    ],
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
    ],
        // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'id',
    // ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'name',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'country',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'address',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'email',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'phone',
    ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'website',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'twiter',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'facebook',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'likein',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'instagram',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'other',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'image',
    // ],
   [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'priority',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'show_homepage',
        'filter'=>Html::activeDropDownList($searchModel, 'show_homepage', [0=>'NO', 1=>'YES'], ['class'=>'form-control','prompt'=>Yii::t('app', '-Select-')]),
        'value'=>function($model){
            return $model->show_homepage == 1 ? 'YES' : 'NO';
        }
    ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'date_created',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'user_created',
    // ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign'=>'middle',
        'urlCreator' => function($action, $model, $key, $index) { 
                return Url::to([$action,'id'=>$key]);
        },
        'viewOptions'=>['role'=>'modal-remote','title'=>Yii::t('app', 'View'),'data-toggle'=>'tooltip', 'class'=>'btn btn-primary btn-xs'],
        'updateOptions'=>['role'=>'modal-remote1', 'data-pjax'=>0, 'title'=>Yii::t('app', 'Update'), 'data-toggle'=>'tooltip','class'=>'btn btn-warning btn-xs'],
        'deleteOptions'=>['role'=>'modal-remote','title'=>Yii::t('app', 'Delete'), 
                          'data-confirm'=>false, 'data-method'=>false,// for overide yii data api
                          'data-request-method'=>'post',
                          'data-toggle'=>'tooltip',
                          'class'=>'btn btn-danger btn-xs',
                          'data-confirm-title'=>Yii::t('app', 'Are you sure?'),
                          'data-confirm-message'=>Yii::t('app', 'Are you sure want to delete this item')], 
    ],

];   