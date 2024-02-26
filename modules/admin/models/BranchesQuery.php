<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class extend ViewCarousel.
 *
 */
class BranchesQuery extends Branches
{
    public static function selectAll(){
        return BranchesQuery::find()->orderBy(['priority' => SORT_ASC, 'id' => SORT_ASC])->all();
    }
    /*select for homepage*/
    public static function selectForHomepage(){
        return BranchesQuery::find()->where(['show_homepage'=>1])->orderBy(['priority' => SORT_ASC, 'id' => SORT_ASC])->all();
    }
    
}