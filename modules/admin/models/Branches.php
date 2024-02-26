<?php

namespace app\modules\admin\models;

use Yii;

class Branches extends \app\models\ViewBranches
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
                    if($this->show_homepage == null)
                        $this->show_homepage = 0;
                        
            }
            return true;
        }
    }
}
