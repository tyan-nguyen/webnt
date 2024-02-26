<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "links".
 *
 * @property int $id
 * @property string $name
 * @property string $name_en
 * @property string $link
 * @property string $link_en
 * @property int $open_new_tab
 * @property int $priority
 * @property string|null $type
 */
class Links extends \app\models\Links
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'link', 'open_new_tab', 'priority'], 'required'],
            [['open_new_tab', 'priority'], 'integer'],
            [['name', 'link', 'name_en', 'link_en'], 'string', 'max' => 200],
            [['type'], 'string', 'max' => 20],
        ];
    }
    
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'link' => 'Link',
            'name_en' => 'Name English',
            'link_en' => 'Link English',
            'open_new_tab' => 'Open New Tab',
            'priority' => 'Priority',
            'type'=>'Type'
        ];
    }
    
    /*
     * post status
     */
    public function getTypeLink(){
        return [
            'MENU_TOP' => 'Menu Top',
            'QUICK_LINK' => 'Quick link',
            'POPULAR_LINK' => 'Popular link',
            'SOCIAL_LINK' => 'Social link'
        ];
    }
    
    /**
     * show type link label
     */
    public function getTypeLinkLabel(){
        $arr = $this->getTypeLink();
        if($arr[$this->type] != null){
            return $arr[$this->type];
        } else {
            return null;
        }
    }
    
    /**
     * show link name by language
     */
    public function getShowName(){
        $session = Yii::$app->session;
        $lang = $session->get('language');
        //$session->close();
        
        if($lang == 'en-US'){
            return $this->name_en;
        } else {
            return $this->name;
        }
       
    }
    /**
     * show link url by language
     */
    public function getShowUrl(){
        $session = Yii::$app->session;
        $lang = $session->get('language');
        //$session->close();
        
        if($lang == 'en-US'){
            return $this->link_en;
        } else {
            return $this->link;
        }
        
    }
}
