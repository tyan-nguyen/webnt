<?php

namespace app\modules\admin\models;

use Yii;

class Settings extends \app\models\Settings
{    
    /**
     * get show site_source
     */
    public function getSiteCopyright(){
        $session = Yii::$app->session;
        $lang = $session->get('language');
        
        if($lang == 'en-US'){
            return $this->site_copyright_en;
        } else {
            return $this->site_copyright;
        }
    }
    
    /**
     * get show site_copyright
     */
    public function getTopText(){
        $session = Yii::$app->session;
        $lang = $session->get('language');
        
        if($lang == 'en-US'){
            return $this->top_text_en;
        } else {
            return $this->top_text;
        }
    }
    
    /**
     * get show site_copyright
     */
    public function getSiteSource(){
        $session = Yii::$app->session;
        $lang = $session->get('language');
        
        if($lang == 'en-US'){
            return $this->site_source_en;
        } else {
            return $this->site_source;
        }
    }
    
    /**
     * get show showcase text
     */
    public function getShowcaseText(){
        $session = Yii::$app->session;
        $lang = $session->get('language');
        
        if($lang == 'en-US'){
            return $this->showcase_text_en;
        } else {
            return $this->showcase_text;
        }
    }
    
    /**
     * get show showcase title
     */
    public function getShowcaseTitle(){
        $session = Yii::$app->session;
        $lang = $session->get('language');
        
        if($lang == 'en-US'){
            return $this->showcase_title_en;
        } else {
            return $this->showcase_title;
        }
    }
    
    /**
     * get show showcase summary
     */
    public function getShowcaseSummary(){
        $session = Yii::$app->session;
        $lang = $session->get('language');
        
        if($lang == 'en-US'){
            return $this->showcase_summary_en;
        } else {
            return $this->showcase_summary;
        }
    }
    
    /**
     * get show branches text
     */
    public function getBranchesText(){
        $session = Yii::$app->session;
        $lang = $session->get('language');
        
        if($lang == 'en-US'){
            return $this->branches_text_en;
        } else {
            return $this->branches_text;
        }
    }
    
    /**
     * get show branches title
     */
    public function getBranchesTitle(){
        $session = Yii::$app->session;
        $lang = $session->get('language');
        
        if($lang == 'en-US'){
            return $this->branches_title_en;
        } else {
            return $this->branches_title;
        }
    }
    
    /**
     * get show branches summary
     */
    public function getBranchesSummary(){
        $session = Yii::$app->session;
        $lang = $session->get('language');
        
        if($lang == 'en-US'){
            return $this->branches_summary_en;
        } else {
            return $this->branches_summary;
        }
    }
    
    /**
     * get show branches page name
     */
    public function getBranchesPageName(){
        $session = Yii::$app->session;
        $lang = $session->get('language');
        
        if($lang == 'en-US'){
            return $this->branches_page_name_en;
        } else {
            return $this->branches_page_name;
        }
    }
    
    /**
     * get show branches - global presence seo title
     */
    public function getGlobalPresenceSeoTitle(){
        return $this->branches_page_seo_title != null ? $this->branches_page_seo_title :  $this->site_title;
    }
    
    /**
     * get show branches - global presence seo description
     */
    public function getGlobalPresenceSeoDescription(){
        return $this->branches_page_seo_description != null ? $this->branches_page_seo_description :  $this->site_description;
    }
    
    /**
     * get show branches first content 
     */
    public function getBranchesFirstContent(){
        $session = Yii::$app->session;
        $lang = $session->get('language');
        
        if($lang == 'en-US'){
            return $this->branches_fist_content_en;
        } else {
            return $this->branches_fist_content;
        }
    }
    
    /**
     * get show service text
     */
    public function getServiceText(){
        $session = Yii::$app->session;
        $lang = $session->get('language');
        
        if($lang == 'en-US'){
            return $this->service_text_en;
        } else {
            return $this->service_text;
        }
    }
    
    /**
     * get show service title
     */
    public function getServiceTitle(){
        $session = Yii::$app->session;
        $lang = $session->get('language');
        
        if($lang == 'en-US'){
            return $this->service_title_en;
        } else {
            return $this->service_title;
        }
    }
    
    /**
     * get show service summary
     */
    public function getServiceSummary(){
        $session = Yii::$app->session;
        $lang = $session->get('language');
        
        if($lang == 'en-US'){
            return $this->service_summary_en;
        } else {
            return $this->service_summary;
        }
    }
    
    /**
     * get show about text
     */
    public function getAboutText(){
        $session = Yii::$app->session;
        $lang = $session->get('language');
        
        if($lang == 'en-US'){
            return $this->about_text_en;
        } else {
            return $this->about_text;
        }
    }
    
    /**
     * get show about title
     */
    public function getAboutTitle(){
        $session = Yii::$app->session;
        $lang = $session->get('language');
        
        if($lang == 'en-US'){
            return $this->about_title_en;
        } else {
            return $this->about_title;
        }
    }
    
    /**
     * get show about summary1
     */
    public function getAboutSummary1(){
        $session = Yii::$app->session;
        $lang = $session->get('language');
        
        if($lang == 'en-US'){
            return $this->about_summary1_en;
        } else {
            return $this->about_summary1;
        }
    }
    
    /**
     * get show about summary2
     */
    public function getAboutSummary2(){
        $session = Yii::$app->session;
        $lang = $session->get('language');
        
        if($lang == 'en-US'){
            return $this->about_summary2_en;
        } else {
            return $this->about_summary2;
        }
    }
    
    /**
     * get show about fact
     */
    public function getAboutFact(){
        $session = Yii::$app->session;
        $lang = $session->get('language');
        
        if($lang == 'en-US'){
            return explode('|', $this->about_fact_en);
        } else {
            return explode('|', $this->about_fact);
        }
    }
    
    /**
     * get show about2 title
     */
    public function getAbout2Title(){
        $session = Yii::$app->session;
        $lang = $session->get('language');
        
        if($lang == 'en-US'){
            return $this->about2_title_en;
        } else {
            return $this->about2_title;
        }
    }
    
    /**
     * get show about2 summary
     */
    public function getAbout2Summary(){
        $session = Yii::$app->session;
        $lang = $session->get('language');
        
        if($lang == 'en-US'){
            return $this->about2_summary_en;
        } else {
            return $this->about2_summary;
        }
    }
    
    /**
     * get show about3 text
     */
    public function getAbout3Text(){
        $session = Yii::$app->session;
        $lang = $session->get('language');
        
        if($lang == 'en-US'){
            return $this->about3_text_en;
        } else {
            return $this->about3_text;
        }
    }
    
    /**
     * get show about3 content
     */
    public function getAbout3Content(){
        $session = Yii::$app->session;
        $lang = $session->get('language');
        
        if($lang == 'en-US'){
            return explode('|', $this->about3_content_en);
        } else {
            return explode('|', $this->about3_content);
        }
    }
    
    /**
     * get show site index block 1
     */
    public function getSiteIndexBlock1(){
        $session = Yii::$app->session;
        $lang = $session->get('language');
        
        if($lang == 'en-US'){
            return $this->site_index_block_1_en;
        } else {
            return $this->site_index_block_1;
        }
    }
    
    /**
     * get show site index block 2
     */
    public function getSiteIndexBlock2(){
        $session = Yii::$app->session;
        $lang = $session->get('language');
        
        if($lang == 'en-US'){
            return $this->site_index_block_2_en;
        } else {
            return $this->site_index_block_2;
        }
    }
    
    /******************
     * contact
     */
    /**
     * count contact
     * @return number|string|NULL
     */
    public function getCountNewContactInfo(){
        return Contact::find()->where(['viewed'=>0])->andWhere('services IS NULL')->count();
    }
    public function getCountNewContactService(){
        return Contact::find()->where(['viewed'=>0])->andWhere('services IS NOT NULL')->count();
    }
    /**
     * get show contact text
     */
    public function getContactText(){
        $session = Yii::$app->session;
        $lang = $session->get('language');
        
        if($lang == 'en-US'){
            return $this->contact_text_en;
        } else {
            return $this->contact_text;
        }
    }
    /**
     * get show contact title
     */
    public function getContactTitle(){
        $session = Yii::$app->session;
        $lang = $session->get('language');
        
        if($lang == 'en-US'){
            return $this->contact_title_en;
        } else {
            return $this->contact_title;
        }
    }
    /**
     * get show contact content
     */
    public function getContactContent(){
        $session = Yii::$app->session;
        $lang = $session->get('language');
        
        if($lang == 'en-US'){
            return explode('||', $this->contact_content_en);
        } else {
            return explode('||', $this->contact_content);
        }
    }
    
    
    /**
     * get show Sustainability page title
     */
    public function getSustainabilityTitle(){
        $session = Yii::$app->session;
        $lang = $session->get('language');
        
        if($lang == 'en-US'){
            return $this->sustainability_title_en;
        } else {
            return $this->sustainability_title;
        }
    }
    
    /**
     * get show Sustainability page content
     */
    public function getSustainabilityContent(){
        $session = Yii::$app->session;
        $lang = $session->get('language');
        
        if($lang == 'en-US'){
            return $this->sustainability_content_en;
        } else {
            return $this->sustainability_content;
        }
    }
    
    /**
     * get show Sustainability seo title
     */
    public function getSustainabilitySeoTitle(){
        return $this->sustainability_seo_title != null ? $this->sustainability_seo_title :  $this->site_title;
    }
    
    /**
     * get show Sustainability seo description
     */
    public function getSustainabilitySeoDescription(){
        return $this->sustainability_seo_description != null ? $this->sustainability_seo_description :  $this->site_description;
    }
    
    /**
     * get default map src in first value of list map ($setting->map)
     */
    public function getMapSrcDefault(){
        $kq = '';
        if($this->map != null){
            $maps = explode('||', $this->map);
            if(count($maps) > 0){
                $kqmap = explode('|', $maps[0]);
                if(count($kqmap) > 0){
                    $kq = $kqmap[1];
                }
            }
        }
        return $kq;
    }
    
    /**
     * get list map from $setting->map
     */
    public function getListMap(){
        $list = array();
        if($this->map != null){
            $maps = explode('||', $this->map);
            if(count($maps) > 0){
                foreach ($maps as $iMap => $map){
                    $kqmap = explode('|', $map);
                    if(count($kqmap) > 0){
                        $list[$kqmap[0]] = $kqmap[1];
                    }
                }
            }
        }
        return $list;
    }
}
