<?php
namespace app\controllers;

use Yii;
use app\modules\admin\models\News;
use app\modules\admin\models\NewsQuery;
use app\modules\admin\models\Catelogies;
use app\modules\admin\models\Newsletter;
use app\modules\admin\models\Settings;
use app\modules\admin\models\TagList;
use app\modules\admin\models\CarouselQuery;
use app\modules\admin\models\ShowCasesQuery;
use app\modules\admin\models\BranchesQuery;
use app\modules\admin\models\ServicesQuery;
use app\modules\admin\models\Contact;
use app\modules\admin\models\Services;

class Site2Controller extends BaseController
{
    public $layout = 'pageLayout';
    public $enableCsrfValidation = false;
    /**
     * homepage
     */
    public function actionIndex()
    {
        $this->layout = 'main';
    	$setting = Settings::find()->one();
        
        $this->view->title = $setting->site_title;
        $this->view->registerMetaTag([ 'name' => 'description', 'content' => $setting->site_description ]);
        //Article Open Graph Generator
        $this->view->registerMetaTag([ 'name' => 'og:type', 'content' => 'website' ]);
        $this->view->registerMetaTag([ 'name' => 'og:title', 'content' => $setting->site_title ]);
        $this->view->registerMetaTag([ 'name' => 'og:description', 'content' => $setting->site_description]);
        $this->view->registerMetaTag([ 'name' => 'og:url', 'content' => \Yii::$app->params['siteUrl'] ]);
        $this->view->registerMetaTag([ 'name' => 'og:image', 'content' => \Yii::$app->params['siteUrl'] . '/images/posts/default.jpg' ]);
        
        $blogs = NewsQuery::getNewsIndex();
        $carousel = CarouselQuery::selectAll();
        $showcases = ShowCasesQuery::selectAll();
        $branches = BranchesQuery::selectForHomepage();
        $services = ServicesQuery::selectAll();
        $servicesList = (new ServicesQuery())->getList();
        
        return $this->render('index', [
            'setting' => $setting,
            'blogs' => $blogs,
            'carousel' => $carousel,
            'showcases' => $showcases,
            'branches' => $branches,
            'services' => $services,
            'servicesList' => $servicesList
        ]);
    }
    
    public function actionPage(){
        return $this->render('page');
    }
    
    
    public function actionSetLang($target){
        
        if($target == 'vi'){
            //\Yii::$app->language = 'vi';
            $target = 'vi-VN';
        }
        if($target == 'en'){
           // \Yii::$app->language = 'en';
            $target = 'en-US';
        }
        
        $session = Yii::$app->session;
        
        !$session->isActive ? $session->open() : $session->close();
        
        $session->set('language', $target);
        
        $session->close();
      
       
        
        return isset($_SERVER['HTTP_REFERER']) ? $this->redirect($_SERVER['HTTP_REFERER']) : $this->redirect(Yii::$app->homeUrl);
        //return $this->redirect(Yii::getAlias('@web/'));
    }
    
    /**
     * get contact services from homepage
     * @return string
     */
    public function actionServiceContact(){
        $request = Yii::$app->request;
        if(isset($_POST['email']) && isset($_POST['service'])){
            $contact = new Contact();
            $contact->email = $_POST['email'];
            $contact->services = $_POST['service'];
            if($contact->save()){
                return $this->render('_contact_services_success');
            }
        }
        return $this->redirect('/');
    }
    
    /**
     * get contact info from contact page
     * @return string
     */
    public function actionInfoContact(){
        $request = Yii::$app->request;
        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['subject']) && isset($_POST['message'])){
            $contact = new Contact();
            $contact->name = $_POST['name'];
            $contact->email = $_POST['email'];
            $contact->phone = $_POST['phone'];
            $contact->subject = $_POST['subject'];
            $contact->message = $_POST['message'];
            if($contact->save()){
                return $this->render('_contact_info_success');
            }
        }
        return $this->redirect('/site/contact');
    }
    
    public function actionAbout()
    {
        $this->layout = 'guest';
        $setting = Settings::find()->one();
        $showcases = ShowCasesQuery::selectAll();
        
        $this->view->title = $setting->site_title;
        $this->view->registerMetaTag([ 'name' => 'description', 'content' => $setting->site_description ]);
        //Article Open Graph Generator
        $this->view->registerMetaTag([ 'name' => 'og:type', 'content' => 'website' ]);
        $this->view->registerMetaTag([ 'name' => 'og:title', 'content' => $setting->site_title ]);
        $this->view->registerMetaTag([ 'name' => 'og:description', 'content' => $setting->site_description]);
        $this->view->registerMetaTag([ 'name' => 'og:url', 'content' => \Yii::$app->params['siteUrl'] ]);
        $this->view->registerMetaTag([ 'name' => 'og:image', 'content' => \Yii::$app->params['siteUrl'] . '/images/posts/default.jpg' ]);
        
        return $this->render('about', [
            'setting' => $setting,
            'showcases' => $showcases,
        ]);
    } 
    
    public function actionGlobalPresence()
    {
        $this->layout = 'guest';
        $setting = Settings::find()->one();
        $branches = BranchesQuery::selectAll();
        
        $this->view->title = $setting->getBranchesPageName();
        $this->view->registerMetaTag([ 'name' => 'description', 'content' => $setting->getGlobalPresenceSeoDescription() ]);
        //Article Open Graph Generator
        $this->view->registerMetaTag([ 'name' => 'og:type', 'content' => 'website' ]);
        $this->view->registerMetaTag([ 'name' => 'og:title', 'content' => $setting->getGlobalPresenceSeoTitle() ]);
        $this->view->registerMetaTag([ 'name' => 'og:description', 'content' => $setting->getGlobalPresenceSeoDescription()]);
        $this->view->registerMetaTag([ 'name' => 'og:url', 'content' => \Yii::$app->params['siteUrl'] ]);
        $this->view->registerMetaTag([ 'name' => 'og:image', 'content' => \Yii::$app->params['siteUrl'] . '/images/posts/default.jpg' ]);
        
        return $this->render('global-presence', [
            'setting' => $setting,
            'branches' => $branches,
        ]);
    } 
    
    
    public function actionSustainability()
    {
        $this->layout = 'guest';
        $setting = Settings::find()->one();
        
        $this->view->title = $setting->getSustainabilityTitle();
        $this->view->registerMetaTag([ 'name' => 'description', 'content' => $setting->getSustainabilitySeoDescription() ]);
        //Article Open Graph Generator
        $this->view->registerMetaTag([ 'name' => 'og:type', 'content' => 'website' ]);
        $this->view->registerMetaTag([ 'name' => 'og:title', 'content' => $setting->getSustainabilitySeoTitle() ]);
        $this->view->registerMetaTag([ 'name' => 'og:description', 'content' => $setting->getSustainabilitySeoDescription()]);
        $this->view->registerMetaTag([ 'name' => 'og:url', 'content' => \Yii::$app->params['siteUrl'] ]);
        $this->view->registerMetaTag([ 'name' => 'og:image', 'content' => \Yii::$app->params['siteUrl'] . '/images/posts/default.jpg' ]);
        
        return $this->render('sustainability', [
            'setting' => $setting,
        ]);
    } 
    
    public function actionContact()
    {
        $this->layout = 'guest';
        $setting = Settings::find()->one();
        
        $this->view->title = $setting->site_title;
        $this->view->registerMetaTag([ 'name' => 'description', 'content' => $setting->site_description ]);
        //Article Open Graph Generator
        $this->view->registerMetaTag([ 'name' => 'og:type', 'content' => 'website' ]);
        $this->view->registerMetaTag([ 'name' => 'og:title', 'content' => $setting->site_title ]);
        $this->view->registerMetaTag([ 'name' => 'og:description', 'content' => $setting->site_description]);
        $this->view->registerMetaTag([ 'name' => 'og:url', 'content' => \Yii::$app->params['siteUrl'] ]);
        $this->view->registerMetaTag([ 'name' => 'og:image', 'content' => \Yii::$app->params['siteUrl'] . '/images/posts/default.jpg' ]);
        
        return $this->render('contact', [
            'setting' => $setting
        ]);
    } 
    
    public function actionAppointment()
    {
        $this->layout = 'guest';
        $setting = Settings::find()->one();
        
        $this->view->title = $setting->site_title;
        $this->view->registerMetaTag([ 'name' => 'description', 'content' => $setting->site_description ]);
        //Article Open Graph Generator
        $this->view->registerMetaTag([ 'name' => 'og:type', 'content' => 'website' ]);
        $this->view->registerMetaTag([ 'name' => 'og:title', 'content' => $setting->site_title ]);
        $this->view->registerMetaTag([ 'name' => 'og:description', 'content' => $setting->site_description]);
        $this->view->registerMetaTag([ 'name' => 'og:url', 'content' => \Yii::$app->params['siteUrl'] ]);
        $this->view->registerMetaTag([ 'name' => 'og:image', 'content' => \Yii::$app->params['siteUrl'] . '/images/posts/default.jpg' ]);
        
        return $this->render('appointment', [
        ]);
    }
    
    public function actionProducts()
    {
        $this->layout = 'guest';
        $setting = Settings::find()->one();
        $products = ServicesQuery::selectAll();
        
        $this->view->title = $setting->site_title;
        $this->view->registerMetaTag([ 'name' => 'description', 'content' => $setting->site_description ]);
        //Article Open Graph Generator
        $this->view->registerMetaTag([ 'name' => 'og:type', 'content' => 'website' ]);
        $this->view->registerMetaTag([ 'name' => 'og:title', 'content' => $setting->site_title ]);
        $this->view->registerMetaTag([ 'name' => 'og:description', 'content' => $setting->site_description]);
        $this->view->registerMetaTag([ 'name' => 'og:url', 'content' => \Yii::$app->params['siteUrl'] ]);
        $this->view->registerMetaTag([ 'name' => 'og:image', 'content' => \Yii::$app->params['siteUrl'] . '/images/posts/default.jpg' ]);
        
        return $this->render('products', [
            'setting' => $setting,
            'products' => $products,
        ]);
    } 
    
    public function actionProduct($id)
    {
        $this->layout = 'guest';
        $setting = Settings::find()->one();
        $productModel = Services::findOne($id);
        $products = ServicesQuery::selectAllExeption($id);
        
        $this->view->title = $productModel->getShowName();
        $this->view->registerMetaTag([ 'name' => 'description', 'content' => $productModel->getShowSummary() ]);
        //Article Open Graph Generator
        $this->view->registerMetaTag([ 'name' => 'og:type', 'content' => 'website' ]);
        $this->view->registerMetaTag([ 'name' => 'og:title', 'content' => $productModel->getShowName() ]);
        $this->view->registerMetaTag([ 'name' => 'og:description', 'content' => $productModel->getShowSummary()]);
        $this->view->registerMetaTag([ 'name' => 'og:url', 'content' => \Yii::$app->params['siteUrl'] ]);
        $this->view->registerMetaTag([ 'name' => 'og:image', 'content' => \Yii::$app->params['siteUrl'] . '/images/posts/default.jpg' ]);
        
        return $this->render('product', [
            'setting' => $setting,
            'productModel' => $productModel,
            'products' => $products,
        ]);
    } 
    
   /*  public function actionBlog()
    {
        $this->layout = 'guest';
        $setting = Settings::find()->one();
        
        $this->view->title = $setting->site_title;
        $this->view->registerMetaTag([ 'name' => 'description', 'content' => $setting->site_description ]);
        //Article Open Graph Generator
        $this->view->registerMetaTag([ 'name' => 'og:type', 'content' => 'website' ]);
        $this->view->registerMetaTag([ 'name' => 'og:title', 'content' => $setting->site_title ]);
        $this->view->registerMetaTag([ 'name' => 'og:description', 'content' => $setting->site_description]);
        $this->view->registerMetaTag([ 'name' => 'og:url', 'content' => \Yii::$app->params['siteUrl'] ]);
        $this->view->registerMetaTag([ 'name' => 'og:image', 'content' => \Yii::$app->params['siteUrl'] . '/images/posts/default.jpg' ]);
        
        return $this->render('blog', [
        ]);
    }  */
    
    /**
     * show a post, and post like in catelogies
     * @param string $slug
     * @return string|\yii\web\Response
     */
    public function actionNews($slug){
        $this->layout = 'guest';
        
        $setting = Settings::find()->one();
        $model = News::find()->where(['slug'=>$slug])->one();
        
        if($model != null && $model->post_status != 'DRAFT'){
            
            $this->view->title = $model->seoTitle;
            $this->view->registerMetaTag([ 'name' => 'description', 'content' => $model->seoDescription ]);
            //canonical
            $this->view->registerLinkTag(['rel'=>'canonical','href'=> \Yii::$app->params['siteUrl'] . $model->url]);
            //Article Open Graph Generator
            $this->view->registerMetaTag([ 'name' => 'og:type', 'content' => 'article' ]);
            $this->view->registerMetaTag([ 'name' => 'og:title', 'content' => $model->seoTitle ]);
            $this->view->registerMetaTag([ 'name' => 'og:description', 'content' => $model->seoDescription ]);
            $this->view->registerMetaTag([ 'name' => 'og:url', 'content' => \Yii::$app->params['siteUrl'] . $model->url ]);
            $this->view->registerMetaTag([ 'name' => 'og:image', 'content' => \Yii::$app->params['siteUrl'] . $model->cover ]);
            if($model->catelogiesList != null){
                foreach ($model->getListTags() as $indexTag=>$tagName){
                    $this->view->registerMetaTag([ 'name' => 'og:tag', 'content' => $tagName ]);
                }
            }
            
            $news = NewsQuery::getNewsPublic();
            $indexItem = 0;
            if($model->catelogiesList != null){
                foreach ($model->catelogiesList as $indexCat=>$cat){
                    $indexItem++;
                    if($indexItem == 1)
                        $news = $news->andFilterWhere(['like', 'catelogies', $indexCat]);
                        else
                            $news = $news->orFilterWhere(['like', 'catelogies', $indexCat]);
                }
            }
            $news = $news->andWhere('id != ' . $model->id)->offset(0)->limit($setting->number_post_like_in_news)->orderBy([
                'id' => SORT_DESC
            ])->all();
            return $this->render('news', ['model'=>$model, 'news'=>$news]);
        } else {
            return $this->redirect('not-found');
        }
    }
    
    
    /**
     * show a post static as page
     * @param string $slug
     * @return string|\yii\web\Response
     */
    public function actionPages($slug){
        $this->layout = 'guest';
        
        $setting = Settings::find()->one();
        $model = News::find()->where(['slug'=>$slug])->one();
        
        if($model != null && $model->post_status != 'DRAFT'){
            
            $this->view->title = $model->seoTitle;
            $this->view->registerMetaTag([ 'name' => 'description', 'content' => $model->seoDescription ]);
            //canonical
            $this->view->registerLinkTag(['rel'=>'canonical','href'=> \Yii::$app->params['siteUrl'] . $model->url]);
            //Article Open Graph Generator
            $this->view->registerMetaTag([ 'name' => 'og:type', 'content' => 'article' ]);
            $this->view->registerMetaTag([ 'name' => 'og:title', 'content' => $model->seoTitle ]);
            $this->view->registerMetaTag([ 'name' => 'og:description', 'content' => $model->seoDescription ]);
            $this->view->registerMetaTag([ 'name' => 'og:url', 'content' => \Yii::$app->params['siteUrl'] . $model->url ]);
            $this->view->registerMetaTag([ 'name' => 'og:image', 'content' => \Yii::$app->params['siteUrl'] . $model->cover ]);
            if($model->catelogiesList != null){
                foreach ($model->getListTags() as $indexTag=>$tagName){
                    $this->view->registerMetaTag([ 'name' => 'og:tag', 'content' => $tagName ]);
                }
            }
            
            $news = NewsQuery::getNewsPublic();
            $indexItem = 0;
            if($model->catelogiesList != null){
                foreach ($model->catelogiesList as $indexCat=>$cat){
                    $indexItem++;
                    if($indexItem == 1)
                        $news = $news->andFilterWhere(['like', 'catelogies', $indexCat]);
                        else
                            $news = $news->orFilterWhere(['like', 'catelogies', $indexCat]);
                }
            }
            $news = $news->andWhere('id != ' . $model->id)->offset(0)->limit($setting->number_post_like_in_news)->orderBy([
                'id' => SORT_DESC
            ])->all();
            return $this->render('pages', ['model'=>$model, 'news'=>$news]);
        } else {
            return $this->redirect('not-found');
        }
    }
    
    
    
    
    /**
     * show a post, and post like in catelogies
     * @param string $slug
     * @return string|\yii\web\Response
     */
/*     public function actionNews($slug){
        $setting = Settings::find()->one();
        $model = News::find()->where(['slug'=>$slug])->one();
        
        if($model != null && $model->post_status != 'DRAFT'){
            
            $this->view->title = $model->seoTitle;
            $this->view->registerMetaTag([ 'name' => 'description', 'content' => $model->seoDescription ]);
            //canonical
            $this->view->registerLinkTag(['rel'=>'canonical','href'=> \Yii::$app->params['siteUrl'] . $model->url]);
            //Article Open Graph Generator
            $this->view->registerMetaTag([ 'name' => 'og:type', 'content' => 'article' ]);
            $this->view->registerMetaTag([ 'name' => 'og:title', 'content' => $model->seoTitle ]);
            $this->view->registerMetaTag([ 'name' => 'og:description', 'content' => $model->seoDescription ]);
            $this->view->registerMetaTag([ 'name' => 'og:url', 'content' => \Yii::$app->params['siteUrl'] . $model->url ]);
            $this->view->registerMetaTag([ 'name' => 'og:image', 'content' => \Yii::$app->params['siteUrl'] . $model->cover ]);
            if($model->catelogiesList != null){
                foreach ($model->getListTags() as $indexTag=>$tagName){
                    $this->view->registerMetaTag([ 'name' => 'og:tag', 'content' => $tagName ]);
                }
            }
            
            $news = NewsQuery::getNewsPublic();
            $indexItem = 0;
            if($model->catelogiesList != null){
                foreach ($model->catelogiesList as $indexCat=>$cat){
                    $indexItem++;
                    if($indexItem == 1)
                        $news = $news->andFilterWhere(['like', 'catelogies', $indexCat]);
                    else
                        $news = $news->orFilterWhere(['like', 'catelogies', $indexCat]);
                }
            }
            $news = $news->andWhere('id != ' . $model->id)->offset(0)->limit($setting->number_post_like_in_news)->orderBy([
                'id' => SORT_DESC
            ])->all();
            return $this->render('news', ['model'=>$model, 'news'=>$news]);
        } else {
            return $this->redirect('not-found');
        }
    } */
                    
    /**
     * render blog page
     * @param string $slug
     * @param number $page
     * @return \yii\web\Response|string
     */
    public function actionBlog($page=NULL){
        $this->layout = 'guest';
        
        $setting = \app\models\Settings::find()->one();
        
        $this->view->title = 'Blogs';
        $this->view->registerMetaTag([ 'name' => 'description', 'content' => 'Blogs' ]);
        
        $query = NewsQuery::getNewsPublic();
        $countModels = $query->count();
        $cats = (new Catelogies())->getList();
        
        if($page == NULL)
            $page = 1;
            $numPerPage = $setting->number_post_per_page;
            $numPage = ceil($countModels/$numPerPage);
            $model = $query->offset($page*$numPerPage-$numPerPage)->limit($numPerPage)->orderBy([
                'date_updated' => SORT_DESC,
                'date_created' => SORT_DESC,
                'id' => SORT_DESC
            ])->all();
            
            if($model == null){
                return $this->render('not-found', []);
            } else {
                
                if($model != null && $page > $numPage){
                    return $this->render('not-found', []);
                }
                
                return $this->render('blogs', [
                    'model'=>$model,
                    'cats' => $cats,
                    'prev' => $page>1 ? ($page-1) : null,
                    'next' => $page < $numPage ? ($page+1) : null,
                ]);
            }
    }
    
    /**
     * render catelogies page
     * @param string $slug
     * @param number $page
     * @return \yii\web\Response|string
     */
    public function actionCat($slug, $page=NULL){
        $this->layout = 'guest';
        
        $setting = \app\models\Settings::find()->one();
        
        $modelCat = Catelogies::find()->where(['slug'=>$slug])->one();
        $cats = (new Catelogies())->getList();
        
        if($modelCat != null){
            $this->view->title = $modelCat->seoTitle;
            $this->view->registerMetaTag([ 'name' => 'description', 'content' => $modelCat->seoDescription ]);
        }
        
        $query = NewsQuery::getNewsPublic()->andFilterWhere(['like', 'catelogies', $slug]);
        $countModels = $query->count();
        
        if($page == NULL)
            $page = 1;
        $numPerPage = $setting->number_post_per_page;
        $numPage = ceil($countModels/$numPerPage);
        $model = $query->offset($page*$numPerPage-$numPerPage)->limit($numPerPage)->orderBy([
            'date_updated' => SORT_DESC,
            'date_created' => SORT_DESC,
            'id' => SORT_DESC
        ])->all();
        
        if($model == null){
            return $this->render('not-found', []);
        } else {
            
            if($model != null && $page > $numPage){
                return $this->render('not-found', []);
            }
           
            return $this->render('cats', [
                'model'=>$model, 
                'modelCat'=>$modelCat,
                'cats' => $cats,
                'catSlug' => $slug,
                'prev' => $page>1 ? ($page-1) : null,
                'next' => $page < $numPage ? ($page+1) : null,
            ]);
        }
    }
    /**
     * render tag page
     * @param string $slug
     * @param number $page
     * @return string
     */
    public function actionTag($slug, $page=NULL){
        $setting = \app\models\Settings::find()->one();
        $modelCat = TagList::find()->where(['slug'=>$slug])->one();
        
        $this->view->title = $modelCat->seoTitle;
        $this->view->registerMetaTag([ 'name' => 'description', 'content' => $modelCat->seoDescription ]);
        
        $query = NewsQuery::getNewsPublic()->andFilterWhere(['like', 'tags', $slug]);
        $countModels = $query->count();
        
        if($page == NULL)
            $page = 1;
        $numPerPage = $setting->number_post_per_page;
        $numPage = ceil($countModels/$numPerPage);
        $model = $query->offset($page*$numPerPage-$numPerPage)->limit($numPerPage)->orderBy([
            'date_updated' => SORT_DESC,
            'date_created' => SORT_DESC,
            'id' => SORT_DESC
        ])->all();
        
        if($model == null){
            return $this->redirect('not-found');
        } else {
            if($model != null && $page > $numPage){
                return $this->render('not-found', []);
            }
            
            return $this->render('tags', [
                'model'=>$model,
                'modelCat'=>$modelCat,
                'catSlug' => $slug,
                'prev' => $page>1 ? ($page-1) : null,
                'next' => $page < $numPage ? ($page+1) : null,
            ]);
        }
    }
    /**
     * process newsletter
     * @return \yii\web\Response
     */
    public function actionNewsletter(){
        $this->layout = 'guest';
        $email = $_GET['email'];
        if($email != null){
            $newsletter = Newsletter::find()->where(['email'=>$email])->one();
            if($newsletter == null){
                $newNewsletter = new Newsletter();
                $newNewsletter->email = $email;
                $newNewsletter->site = 'localhost';
                $newNewsletter->date_created = date('Y-m-d H:i:s');
                $newNewsletter->save();
                return $this->render('_newsletter_thank');
            }
        }
        //return $this->goBack();
        return isset($_SERVER['HTTP_REFERER']) ? $this->redirect($_SERVER['HTTP_REFERER']) : $this->redirect(Yii::$app->homeUrl);
        
    }
    
    /**
     * search page
     * @param number $page
     * @return string
     */
    public function actionSearch($page=NULL){        
               
        $setting = \app\models\Settings::find()->one();
        $search = $_GET['search'];
        
        $this->view->title = 'Kết quả tìm kiếm cho từ khóa: ' . $search;
        
        $query = NewsQuery::getNewsPublic()->andFilterWhere(['like', 'title', $search]);
        $countModels = $query->count();
        
        if($page == NULL)
            $page = 1;
        $numPerPage = $setting->number_post_per_page;
        $numPage = ceil($countModels/$numPerPage);
        $model = $query->offset($page*$numPerPage-$numPerPage)->limit($numPerPage)->orderBy([
            'date_updated' => SORT_DESC,
            'date_created' => SORT_DESC,
            'id' => SORT_DESC
        ])->all();  
        
        if($model != null && $page > $numPage){
            
            return $this->render('not-found', []);
        }
                
        return $this->render('search', [
            'model'=>$model,
            'prev' => $page>1 ? ($page-1) : null,
            'next' => $page < $numPage ? ($page+1) : null,
            'search' => $_GET['search']
        ]);
    }
    
    /**
     * show not found page
     * @return \yii\web\Response|string
     */
    public function actionNotFound(){
        
        $this->view->title = '404 page';
        
        $this->view->registerMetaTag([ 'name' => 'robots', 'content' => 'noindex,nofollow' ]);
        
        return $this->render('not-found', []);
    }

}
