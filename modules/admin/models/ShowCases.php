<?php

namespace app\modules\admin\models;

use Yii;

class ShowCases extends \app\models\ViewShowcases
{    
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'link_youtube'], 'required'],
            [['summary', 'summary_en'], 'string'],
            [['priority', 'user_created'], 'integer'],
            [['date_created'], 'safe'],
            [['name', 'name_en', 'link_youtube', 'image'], 'string', 'max' => 200],
        ];
    }
    
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
