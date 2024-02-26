<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class extend ViewCarousel.
 *
 */
class CarouselQuery extends Carousel
{
    public static function selectAll(){
        return CarouselQuery::find()->orderBy(['priority'=>SORT_ASC, 'id'=>SORT_DESC])->all();
    }

}
