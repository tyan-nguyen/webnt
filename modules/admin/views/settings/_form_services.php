<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use webvimark\modules\UserManagement\models\User;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Settings */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-form">

    <?php $form = ActiveForm::begin(); ?>
 
    
 	<div class="row">
	<div class="col-md-6">
    <?= $form->field($model, 'service_text')->textInput(['rows' => 6]) ?> 
    </div>
    <div class="col-md-6">   
    <?= $form->field($model, 'service_text_en')->textInput(['rows' => 6]) ?>
    </div>
    <div class="col-md-12">
    <?= $form->field($model, 'service_title')->textInput(['rows' => 6]) ?>
    </div>
    <div class="col-md-12">
    <?= $form->field($model, 'service_title_en')->textInput(['rows' => 6]) ?>
    </div>
    <div class="col-md-12">
    <?= $form->field($model, 'service_summary')->textarea(['maxlength' => true]) ?>
    </div>
    <div class="col-md-12">
    <?= $form->field($model, 'service_summary_en')->textarea(['maxlength' => true]) ?>
    </div>
    <div class="col-md-12">    
          <?php $nameLabel = $model->getAttributeLabel('image') 
        	. ' <a data-toggle="modal"  href="javascript:;" data-target="#myModal" class="btn" type="button"><i class="glyphicon glyphicon-picture"></i></a>' ?>
    	 
    	 <?= $form->field($model, 'service_image')->textInput(['maxlength' => true, 'id'=>'fieldImage'])->label($nameLabel) ?>
    	 	
    	 <div id="dCover-fieldImage" class="dCover input-append">	  
        	  <img src="<?= $model->service_image ?>" />
        </div>
    </div>
    
    <div class="col-md-12">
    <?= $form->field($model, 'show_service_image')->checkbox() ?>
    </div>
    

   	


  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group col-md-12">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>
	
	</div>

    <?php ActiveForm::end(); ?>
    
</div>

<div class="modal modal2 fade" id="myModal" >
<div class="modal-dialog1" style="width:900px">
  <div class="modal-content" style="height:700px;">
    <div class="modal-header">
      <button id="btnfieldImage" data-dismiss="modal" type="button" class="close" aria-hidden="true">&times;</button>
      <h4 class="modal-title">Modal title</h4>
    </div>
    <div class="modal-body">
      <iframe width="850" height="600" src="/filemanager/filemanager/dialog.php?type=2&field_id=fieldImage&fldr=_services&akey=<?= User::hasRole('bientapvien') ? '1fdb7184e697ab9355a3f1438ddc6ef9' : '' ?>" frameborder="0" style="overflow: scroll; overflow-x: hidden; overflow-y: scroll; "></iframe>
    </div>
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php 
$this->registerJsFile(Yii::getAlias('@web') . "/js/script.js", ['position' => \yii\web\View::POS_END, 'depends' => [
    \yii\web\JqueryAsset::className()
]]);
?>
