<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use sergin\yii2\sitemap\Sitemap;
use app\modules\admin\models\NewsQuery;
use sergin\yii2\sitemap\SitemapElement;
use app\models\Custom;

class TestController extends Controller
{
    public $layout = 'view';
    
    public function actionTestSm(){
        //Yii::$app->response->format = \yii\web\Response::FORMAT_RAW;
        //Yii::$app->response->headers->add('Content-Type', 'text/xml');
        
        $sm = new Sitemap();
        
        $custom = new Custom();
        
        $news = NewsQuery::getNewsPublic()->orderBy('id DESC')->all();
        
        foreach ($news as $indexNew=>$new){
            $sm->addUrl($new->slug, [
                //'updated_at'=>$new->date_updated != null ? $custom->convertYMDHIStoYMD($new->date_updated) : $custom->convertYMDHIStoYMD($new->date_created),
                //'changefreq' => SitemapElement::CHANGE_FREQ_WEEKLY
                'updated_at' => SitemapElement::CHANGE_FREQ_WEEKLY
            ]);
        }
        
        $content = $sm->generateXml();
        
        $filepath = \Yii::$app->basePath . '/sitemap.xml';
        file_put_contents($filepath, $content);
    }
    
}