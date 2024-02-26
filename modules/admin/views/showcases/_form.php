<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use webvimark\modules\UserManagement\models\User;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ShowCases */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="show-cases-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <div class="row">
    
        <div class="col-md-12">
             <?php $nameLabel = $model->getAttributeLabel('image') 
            	. ' <a data-toggle="modal"  href="javascript:;" data-target="#myModal" class="btn" type="button"><i class="glyphicon glyphicon-picture"></i></a>' 
            	. ' (500x300) <a class="btnMessage" href="#" title="Click to see"><i class="fa fa-question-circle" aria-hidden="true"></i></a>' ?>
        	 
        	 <?= $form->field($model, 'image')->textInput(['maxlength' => true, 'id'=>'fieldImage'])->label($nameLabel) ?>
        	 	
        	 <div class="alert alert-info alert-message" role="alert" style="display:none"><?= Yii::t('app', 'Best display interface with size image') . ' 500x300(px)' ?></div>
        	 
        	 <div id="dCover-fieldImage" class="dCover input-append">	  
            	  <img src="<?= $model->image ?>" />
            </div>
    
    </div>
	<div class="col-md-6">
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
	</div>
	<div class="col-md-6">
    <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>
	</div>
	<div class="col-md-12">
    <?= $form->field($model, 'summary')->textarea(['rows' => 6]) ?>
	</div>
	<div class="col-md-12">
    <?= $form->field($model, 'summary_en')->textarea(['rows' => 6]) ?>
	</div>
	<div class="col-md-8">
    <?= $form->field($model, 'link_youtube')->textInput(['maxlength' => true]) ?>
	</div>
	<div class="col-md-4">
    <?= $form->field($model, 'priority')->textInput(['type'=>'number']) ?>
	</div>
  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group col-md-12">
	  		<hr>
	        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-lg btn-success' : 'btn btn-lg btn-primary']) ?>
	         <?= Html::submitButton('<span class="glyphicon glyphicon-check"></span> ' . Yii::t('app', 'Save and Exit'), 
		        		['name'=>'btnSubmit','value'=>'saveAndExit','class' => 'btn btn-lg btn-primary']) ?>
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
      <iframe width="850" height="600" src="/filemanager/filemanager/dialog.php?type=2&field_id=fieldImage&fldr=_showcases&akey=<?= User::hasRole('bientapvien') ? '1fdb7184e697ab9355a3f1438ddc6ef9' : '' ?>" frameborder="0" style="overflow: scroll; overflow-x: hidden; overflow-y: scroll; "></iframe>
    </div>
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php 
$this->registerJsFile(Yii::getAlias('@web') . "/js/script.js", ['position' => \yii\web\View::POS_END, 'depends' => [
    \yii\web\JqueryAsset::className()
]]);
?>
