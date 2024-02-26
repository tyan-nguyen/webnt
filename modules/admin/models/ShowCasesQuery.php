<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class extend ViewCarousel.
 *
 */
class ShowCasesQuery extends ShowCases
{
    public static function selectAll(){
        return ShowCasesQuery::find()->orderBy(['priority' => SORT_ASC, 'id' => SORT_DESC])->all();
    }
    
}