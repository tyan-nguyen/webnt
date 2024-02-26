<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Settings */
?>
<div class="settings-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'site_name',
            'site_logo',
            'site_copyright:ntext',
            'site_copyright_en:ntext',
            'site_source',
            'site_source_en',
            'top_text',
            'top_text_en',
            'top_email',
            'top_hotline',
            'text_homepage',
            'site_title',
            'site_description',
            'number_post_trending',
            'number_post_catalog_home',
            'number_post_per_page',
            'number_post_like_in_news',
            'show_cover_after_summary'=>[
                'attribute' => 'show_cover_after_summary',
                'value' => $model->show_cover_after_summary ? 'YES' : 'NO'
            ],
            'map'
        ],
    ]) ?>

</div>
