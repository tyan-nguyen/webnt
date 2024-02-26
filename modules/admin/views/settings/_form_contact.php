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
    <?= $form->field($model, 'contact_text')->textInput() ?> 
    </div>
    <div class="col-md-6">   
    <?= $form->field($model, 'contact_text_en')->textInput() ?>
    </div>
    <div class="col-md-12">
    <?= $form->field($model, 'contact_title')->textInput() ?>
    </div>
    <div class="col-md-12">
    <?= $form->field($model, 'contact_title_en')->textInput() ?>
    </div>
    <div class="col-md-12">
    <?= $form->field($model, 'contact_content')->textarea(['rows' => 5]) ?>
    </div>
    <div class="col-md-12">
    <?= $form->field($model, 'contact_content_en')->textarea(['rows' => 5]) ?>
    </div>
   	


  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group col-md-12">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>
	
	</div>

    <?php ActiveForm::end(); ?>
    
</div>
