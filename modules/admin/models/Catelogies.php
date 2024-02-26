<?php

namespace app\modules\admin\models;

use Yii;
use yii\behaviors\SluggableBehavior;

/**
 * This is the model class for table "news_catelogies".
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property int|null $pid
 * @property int|null $priority
 * @property int|null $level
 * @property string|null $seo_title
 * @property string|null $seo_description
 * @property string|null $name_en
 * @property string|null $seo_title_en
 * @property string|null $seo_description_en
 */
class Catelogies extends \app\models\NewsCatelogies
{
    CONST URL_CATELOGIES = '/cat/';
    
    /**
     * ---------virtual varible ---------
     */
    public $arr;
    
    public function behaviors()
    {
        return [
            [
                'class' => SluggableBehavior::className(),
                'attribute' => 'name',
                'immutable' => true,
                'ensureUnique'=>true,
                //'uniqueValidator'=>[]
                // 'slugAttribute' => 'slug',
            ],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'slug'], 'required'],
            [['pid', 'priority', 'level'], 'integer'],
            [['name', 'slug', 'seo_title', 'seo_title_en', 'name_en'], 'string', 'max' => 200],
            [['seo_description', 'seo_description_en'], 'string'],
        ];
    }
    
    /**
     * before save
     */
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            
            if($this->pid == null){
                $this->pid = 0;
                $this->level = 1;
            } else{
                $this->level = $this::findOne($this->pid)->level + 1;
            }          
        }
        return true;
    }
    /**
     * get list index is id
     */
    /**
     *
     * @param unknown $arr
     * @param unknown $pid
     * @param unknown $level
     */
    public function getChildCatalog($arr, $pid, $level){
        $left = $level . '---';
        $listChildCatalogs = $this::find()->where(['pid'=>$pid])->all();
        if($listChildCatalogs != null){
            foreach ($listChildCatalogs as $j=>$catalog1){
                $this->arr[$catalog1->id] = $left . ' ' .$catalog1->name;
                $this->getChildCatalog($this->arr, $catalog1->id, $left);
            }
        }
    }
    /**
     *
     * @return unknown
     */
    public function getList($langid=NULl)
    {
        $this->arr = array();
        //lay ds catalog parent
        $parentCatalogs = $this::find()->where('pid IS NULL OR pid = 0')->all();
        foreach ($parentCatalogs as $i=>$catalog){
            $this->arr[$catalog->id] = $catalog->showName;
            $this->getChildCatalog($this->arr, $catalog->id, '');
        }
        return $this->arr;
    }
    
    /**
     * get list index is slug
     */
    /**
     *
     * @param unknown $arr
     * @param unknown $pid
     * @param unknown $level
     */
    public function getChildCatalogSlug($arr, $pid, $level){
        $left = $level . '---';
        $listChildCatalogs = $this::find()->where(['pid'=>$pid])->all();
        if($listChildCatalogs != null){
            foreach ($listChildCatalogs as $j=>$catalog1){
                $this->arr[$catalog1->slug] = $left . ' ' .$catalog1->name;
                $this->getChildCatalogSlug($this->arr, $catalog1->id, $left);
            }
        }
    }
    /**
     *
     * @return unknown
     */
    public function getListSlug()
    {
        $this->arr = array();
        //lay ds catalog parent
        $parentCatalogs = $this::find()->where('pid IS NULL OR pid = 0')->all();
        foreach ($parentCatalogs as $i=>$catalog){
            $this->arr[$catalog->slug] = $catalog->name;
            $this->getChildCatalogSlug($this->arr, $catalog->id, '');
        }
        return $this->arr;
    }
    
    /**
     * get cat link
     */
    public function getUrl(){
        return Yii::getAlias('@web') . $this::URL_CATELOGIES . $this->slug;
    }
    
    /**
     * get number post has this tag
     */
    public function getNumberNewsHasThisCatelog(){
        return News::find()->andFilterWhere(['like', 'catelogies', $this->slug])->count();
    }
    
    /**
     * show name by lang
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
     * show seo title by lang
     */
    public function getShowSeoTitle(){
        $session = Yii::$app->session;
        $lang = $session->get('language');
        
        if($lang == 'en-US'){
            return $this->seo_title_en;
        } else {
            return $this->seo_title;
        }
    }
    
    /**
     * show seo description by lang
     */
    public function getShowSeoDescription(){
        $session = Yii::$app->session;
        $lang = $session->get('language');
        
        if($lang == 'en-US'){
            return $this->seo_description_en;
        } else {
            return $this->seo_description;
        }
    }
    
    /**
     * seo
     */
    public function getSeoTitle(){
        return $this->showSeoTitle == null ? $this->showName : $this->showSeoTitle;
    }
    
    public function getSeoDescription(){
        return $this->showSeoDescription == null ? '' : $this->showSeoDescription;
    }
}
