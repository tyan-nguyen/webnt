<?php

namespace app\modules\admin\models;

use Yii;

class CatelogiesQuery extends \app\modules\admin\models\Catelogies
{
   /**
    * get parent catelogies and sort by priority
    */
    public function getListParent(){
        return $this::find()->where('pid IS NULL OR pid = 0')->orderBy('priority ASC')->all();
    }
}
