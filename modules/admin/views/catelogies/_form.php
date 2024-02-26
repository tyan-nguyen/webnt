<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\modules\admin\models\Catelogies;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Catelogies */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="catelogies-form">

    <?php $form = ActiveForm::begin(); ?>
    
     <?= $form->errorSummary($model) ?>
     
    <?php $nameLabel = $model->getAttributeLabel('title') 
    	. ' <span class="seoButton label label-warning" title="Thay đổi liên kết"><i class="glyphicon glyphicon-link"></i></span>' ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label($nameLabel) ?>
    <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>

	<div class="dSeo" style="display:none">
	 
    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'seo_title')->textInput(['maxlength' => true]) ?>
    	
    <?= $form->field($model, 'seo_description')->textarea(['rows' => 3]) ?>
    
    <?= $form->field($model, 'seo_title_en')->textInput(['maxlength' => true]) ?>
    	
    <?= $form->field($model, 'seo_description_en')->textarea(['rows' => 3]) ?>
    
    </div>
    
    <script>
    $('.seoButton').on('click', function(){
    	$('.dSeo').toggle();
    });
    </script>
    
    <?= $form->field($model,'pid')->dropDownList((new Catelogies())->getList(),
				['class'=>'form-control', 'prompt'=>'--Chọn--']) ?>
    
    <?= $form->field($model, 'priority')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'level')->textInput(['maxlength' => true]) ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
