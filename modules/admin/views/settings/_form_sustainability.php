<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use webvimark\modules\UserManagement\models\User;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Settings */
/* @var $form yii\widgets\ActiveForm */
?>


<!-- editor -->
<script src="<?= Yii::getAlias('@web') ?>/assets/editor/tinymce/tinymce.min.js"></script>
<script src="https://www.responsivefilemanager.com/fancybox/jquery.fancybox-1.3.4.pack.js" type="text/javascript" ></script>

<div class="settings-form">

    <?php $form = ActiveForm::begin(); ?>
 <div class="row">
    
 
<div class="col-md-4">

	<?php $nameLabel = $model->getAttributeLabel('sustainability_title') 
    	. ' <span class="sButton label label-warning" title="SEO"><i class="glyphicon glyphicon-link"></i></span>' ?>
    	
    <?= $form->field($model, 'sustainability_title')->textInput()->label($nameLabel) ?>    
    </div>
    <div class="col-md-4">
    <?= $form->field($model, 'sustainability_title_en')->textInput() ?>
    </div>
    
    
     <div class="dUrl" style="display:none">
    <div class="col-md-12">
     <?= $form->field($model, 'sustainability_seo_title')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-12">
    <?= $form->field($model, 'sustainability_seo_description')->textarea(['rows' => 3]) ?>
    </div>
    </div>
    
    <div class="col-md-12">
    <?= $form->field($model, 'sustainability_content')->textarea(['id'=>'txtContent']) ?>
    </div>
    <div class="col-md-12">
    <?= $form->field($model, 'sustainability_content_en')->textarea(['id'=>'txtContentEn']) ?>
    </div>  	


  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group col-md-12">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

</div>
    <?php ActiveForm::end(); ?>
    
</div>

<script>
tinymce.remove();
//editor for content
tinymce.init({
	force_br_newlines : true,
    force_p_newlines : false,
    forced_root_block : '',
	selector: "#txtContent,#txtContentEn",
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
	height : "200",
	
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

