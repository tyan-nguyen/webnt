<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class extend ViewCarousel.
 *
 */
class ServicesQuery extends Services
{
    public static function selectAll(){
        return ServicesQuery::find()->orderBy(['priority' => SORT_ASC, 'id' => SORT_ASC])->all();
    }
    
    public static function selectAllExeption($id){
        return ServicesQuery::find()->where('id <> ' . $id)->orderBy(['priority' => SORT_ASC, 'id' => SORT_ASC])->all();
    }
    
}