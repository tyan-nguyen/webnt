<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class extend ViewCarousel.
 *
 */
class Carousel extends \app\models\ViewCarousel
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
                    if($this->default_button == null)
                        $this->default_button = 1;
                        if($this->priority == null)
                            $this->priority = 1;
                        
            }
            return true;
        }
    }
    /**
     * show title small
     */
    public function getTitleSmall(){
        $session = Yii::$app->session;
        $lang = $session->get('language');
        
        if($lang == 'en-US'){
            return $this->title_small_en;
        } else {
            return $this->title_small;
        }
    }
    
    /**
     * show title large
     */
    public function getTitleLarge(){
        $session = Yii::$app->session;
        $lang = $session->get('language');
        
        if($lang == 'en-US'){
            return $this->title_large_en;
        } else {
            return $this->title_large;
        }
    }
}
