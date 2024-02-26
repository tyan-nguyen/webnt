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
    <?= $form->field($model, 'showcase_text')->textInput() ?>   
    </div> 
    <div class="col-md-6">
    <?= $form->field($model, 'showcase_text_en')->textInput() ?>
    </div>
    <div class="col-md-12">
    <?= $form->field($model, 'showcase_title')->textInput(['rows' => 6]) ?>
    </div>
    <div class="col-md-12">
    <?= $form->field($model, 'showcase_title_en')->textInput(['rows' => 6]) ?>
    </div>
    <div class="col-md-12">    
    <?= $form->field($model, 'showcase_summary')->textarea(['maxlength' => true]) ?>
    </div>
    <div class="col-md-12">
    <?= $form->field($model, 'showcase_summary_en')->textarea(['maxlength' => true]) ?>
    </div>

   	


  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group col-md-12">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>
	
	</div>

    <?php ActiveForm::end(); ?>
    
</div>
