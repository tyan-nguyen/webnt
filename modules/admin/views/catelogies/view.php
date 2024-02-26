<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Catelogies */
?>
<div class="catelogies-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'name_en',
            'slug',
            'pid',
            'priority',
            'level',
            'seo_title',
            'seo_description',
            'seo_title_en',
            'seo_description_en'
        ],
    ]) ?>

</div>
