<?php

namespace app\modules\admin\models;

use Yii;
use yii\helpers\ArrayHelper;

class Services extends \app\models\ViewServices
{
    /**
     * before save
     */
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if($this->isNewRecord){
                if(!Yii::$app->user->isGuest)
                    $this->user_created = Yii::$app->user->id;
                    $this->date_created = date('Y-m-d H:i:s');
                    if($this->priority == null)
                        $this->priority = 1;
                        
            }
            return true;
        }
    }
    
    /**
     * get list services
     */
    public function getList(){
        $session = Yii::$app->session;
        $lang = $session->get('language');
        $list = $this::find()->asArray()->all();
        if($lang == 'en-US'){
            return ArrayHelper::map($list, 'id', 'name_en');
        } else {
            return ArrayHelper::map($list, 'id', 'name');
        }
        
    }
    
    /**
     * show name
     */
    public function getShowName(){
        $session = Yii::$app->session;
        $lang = $session->get('language');
        
        if($lang == 'en-US'){
            return $this->name_en;
        } else {
            return $this->name;
        }
    }
    
    /**
     * show link
     */
    public function getShowLink(){
        return Yii::getAlias('@web') . '/product/product-' . $this->id;
    }
    
    /**
     * show summary
     */
    public function getShowSummary(){
        $session = Yii::$app->session;
        $lang = $session->get('language');
        
        if($lang == 'en-US'){
            return $this->summary_en;
        } else {
            return $this->summary;
        }
    }
}
