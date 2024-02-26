<?php

namespace app\modules\admin\models;

use Yii;

class NewsQuery extends \app\modules\admin\models\News
{
    /**
     * get new public
     */
    public static function getNewsPublic(){
        /**
         * kiem tra session lang neu en thi set lang=en hoac vi
         */
        $session = Yii::$app->session;
        $lang = $session->get('language');
        $query = News::find()->where("post_status != 'DRAFT' AND is_static = 0");
        //add language
        if($lang == 'en-US')
            $query->andWhere(['lang' => 'en']);
        else
            $query->andWhere(['lang' => 'vi']);
        return $query;
    }
    
    /**
     * get new public in index
     */
    public static function getNewsIndex(){
        /**
         * kiem tra session lang neu en thi set lang=en hoac vi
         */
        $session = Yii::$app->session;
        $lang = $session->get('language');
        
        $query = News::find()->where("post_status != 'DRAFT'  AND is_static = 0");    
        //add language
        if($lang == 'en-US')
            $query->andWhere(['lang' => 'en']);     
        else
            $query->andWhere(['lang' => 'vi']);
        
        //$session->close();
        return $query->limit(4)->orderBy('date_created DESC')->all();
    }
    
    /**
     * get new show on trending
     */
    public function getNewsTrending(){
        $setting = \app\models\Settings::find()->one();
        return $this::getNewsPublic()->orderBy([
            'id' => SORT_DESC
        ])->limit($setting->number_post_trending)->all();
    }
    
    
}
