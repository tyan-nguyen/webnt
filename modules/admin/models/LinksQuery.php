<?php

namespace app\modules\admin\models;

use Yii;

class LinksQuery extends \app\modules\admin\models\Links
{
    /**
     * get menu list model
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function getMenuLinks(){
        return Links::find()->where(['type' => 'MENU_TOP'])->orderBy('priority')->all();
    }
    
    /**
     * get quick link footer list model
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function getQuickLinks(){
        return Links::find()->where(['type' => 'QUICK_LINK'])->orderBy('priority')->all();
    }
    
    /**
     * get popular link footer list model
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function getPopularLinks(){
        return Links::find()->where(['type' => 'POPULAR_LINK'])->orderBy('priority')->all();
    }
    
    /**
     * get social link footer list model
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function getSocialLinks(){
        return Links::find()->where(['type' => 'SOCIAL_LINK'])->orderBy('priority')->all();
    }
}
