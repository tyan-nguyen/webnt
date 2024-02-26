<?php

namespace app\modules\admin\controllers;

use Yii;
use webvimark\modules\UserManagement\models\User;
use yii\filters\VerbFilter;
use app\controllers\BaseController;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends BaseController
{
    public $layout = 'admin';
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                    'bulk-delete' => ['post'],
                ],
            ],
            'ghost-access'=> [
                'class' => 'webvimark\modules\UserManagement\components\GhostAccessControl',
            ],
        ];
    }
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
    	if(User::hasRole('ttkt', false)){
    		return $this->redirect(Yii::getAlias('@web') . '/ttkt/tin');
    	}
    	else if(User::hasRole('ttptqd', false)){
    		return $this->redirect(Yii::getAlias('@web') . '/ptqd/tin');
    	}
    	else if(User::hasRole('duanvilg', false)){
    		return $this->redirect(Yii::getAlias('@web') . '/vilg/z-vilg-tin');
    	}
    	else{
        	return $this->render('index');
    	}
    }
}
