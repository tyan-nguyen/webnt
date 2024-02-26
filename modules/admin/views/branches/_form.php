<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use webvimark\modules\UserManagement\models\User;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Branches */
/* @var $form yii\widgets\ActiveForm */
?>
<!-- editor -->
<script src="<?= Yii::getAlias('@web') ?>/assets/editor/tinymce/tinymce.min.js"></script>
<script src="https://www.responsivefilemanager.com/fancybox/jquery.fancybox-1.3.4.pack.js" type="text/javascript" ></script>
<div class="branches-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <div class="row">
    
    <div class="col-md-12">
         <?php $nameLabel = $model->getAttributeLabel('image') 
        	. ' <a data-toggle="modal"  href="javascript:;" data-target="#myModal" class="btn" type="button"><i class="glyphicon glyphicon-picture"></i></a>'
        	. ' (500x450) <a class="btnMessage" href="#" title="Click to see"><i class="fa fa-question-circle" aria-hidden="true"></i></a>' ?>
    	 
    	 <?= $form->field($model, 'image')->textInput(['maxlength' => true, 'id'=>'fieldImage'])->label($nameLabel) ?>
    	 <div class="alert alert-info alert-message" role="alert" style="display:none"><?= Yii::t('app', 'Best display interface with size image') . ' 500x450(px)' ?></div>	
    	 <div id="dCover-fieldImage" class="dCover input-append">	  
        	  <img src="<?= $model->image ?>" />
        </div>
    </div>
<div class="col-md-6">
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6">
    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-12">
    <?= $form->field($model, 'address')->textarea(['rows' => 6, 'id'=>'txtAddress']) ?>
</div>
<div class="col-md-4">
    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-4">
    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-4">
    <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6">
    <?= $form->field($model, 'twiter')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6">
    <?= $form->field($model, 'facebook')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6">
    <?= $form->field($model, 'likein')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6">
    <?= $form->field($model, 'instagram')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-8">
    <?= $form->field($model, 'other')->textarea(['rows' => 6, 'id'=>'txtOther']) ?>
</div>
<div class="col-md-4">	
    <?= $form->field($model, 'priority')->textInput(['type'=>'number']) ?>
</div>

<div class="col-md-4">	
    <?= $form->field($model, 'show_homepage')->checkbox() ?>
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
      <iframe width="850" height="600" src="/filemanager/filemanager/dialog.php?type=2&field_id=fieldImage&fldr=_branches&akey=<?= User::hasRole('bientapvien') ? '1fdb7184e697ab9355a3f1438ddc6ef9' : '' ?>" frameborder="0" style="overflow: scroll; overflow-x: hidden; overflow-y: scroll; "></iframe>
    </div>
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php 
$this->registerJsFile(Yii::getAlias('@web') . "/js/script.js", ['position' => \yii\web\View::POS_END, 'depends' => [
    \yii\web\JqueryAsset::className()
]]);
?>

<script>
tinymce.remove();
//editor for content
tinymce.init({
	force_br_newlines : true,
    force_p_newlines : false,
    forced_root_block : '',
	selector: "#txtOther,#txtAddress",
	branding: false,
	statusbar: false,
	plugins: "media,image,paste,table,code,link,lists,advlist,responsivefilemanager,hr",
	menubar: 'edit view insert format table',
	toolbar: 'autolink | undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist hr | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link unlink anchor codesample | ltr rtl | responsivefilemanager',
  	toolbar_sticky: true,
	paste_data_images: true,
	image_advtab: true,
	image_title: true,
	//images_upload_url: "<?= Yii::getAlias('@web') . '/assets/editor/upload.php' ?>", //upload img tab
	//images_upload_credentials: true,
	relative_urls : false,
	remove_script_host : true,
	document_base_url : "/",
	convert_urls : true,
	height : "100",
	
	external_filemanager_path:"<?= Yii::getAlias('@web') ?>/filemanager/filemanager/",
	filemanager_title:"QUẢN LÝ FILE" ,
	external_plugins: { "filemanager" : "<?= Yii::getAlias('@web') ?>/filemanager/filemanager/plugin.min.js"},
	filemanager_access_key: "<?= User::hasRole('bientapvien') ? '1fdb7184e697ab9355a3f1438ddc6ef9' : '' ?>",

	language_url : '<?= Yii::getAlias('@web')?>/assets/editor/tinymce/langs/vi.js',
		
	setup: function (editor) {
	    editor.on('change', function () {
	        tinymce.triggerSave();
	    });
	}
});

//prevent Bootstrap from hijacking TinyMCE modal focus
$(document).on('focusin', function(e) {
  if ($(e.target).closest(".mce-window").length) {
    e.stopImmediatePropagation();
  }
});
</script>
