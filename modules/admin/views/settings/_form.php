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

    <?= $form->field($model, 'site_name')->textInput(['maxlength' => true]) ?>
    
    
    <?php $nameLabel = $model->getAttributeLabel('site_logo') 
    	. ' <a data-toggle="modal"  href="javascript:;" data-target="#myModal" class="btn" type="button"><i class="glyphicon glyphicon-picture"></i></a>' ?>
	 
	 <?= $form->field($model, 'site_logo')->textInput(['maxlength' => true, 'id'=>'fieldLogo'])->label($nameLabel) ?>
	 	
	 <div id="dCover-fieldLogo" class="dCover input-append">	  
    	  <img src="<?= $model->site_logo ?>" />
    </div>
    
    <?php $nameLabel = $model->getAttributeLabel('site_logo_small') 
    	. ' <a data-toggle="modal"  href="javascript:;" data-target="#modalLogoSmall" class="btn" type="button"><i class="glyphicon glyphicon-picture"></i></a>' ?>
	 
	 <?= $form->field($model, 'site_logo_small')->textInput(['maxlength' => true, 'id'=>'fieldLogoSmall'])->label($nameLabel) ?>
	 	
	 <div id="dCover-fieldLogoSmall" class="dCover input-append">	  
    	  <img src="<?= $model->site_logo_small ?>" />
    </div>

    <?= $form->field($model, 'site_copyright')->textarea(['rows' => 6]) ?>    
    <?= $form->field($model, 'site_copyright_en')->textarea(['rows' => 6]) ?>
    
    <?= $form->field($model, 'site_source')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'site_source_en')->textarea(['rows' => 6]) ?>
    
    <?= $form->field($model, 'top_text')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'top_text_en')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'top_email')->textInput(['maxlength' => true]) ?>
    
   	<?= $form->field($model, 'top_hotline')->textInput(['maxlength' => true]) ?>
   	
   	 <?= $form->field($model, 'map')->textarea(['rows' => 3]) ?>
   	 
   	 <?= $form->field($model, 'show_index_block')->checkbox() ?>
   	 
   	 <?= $form->field($model, 'site_index_block_1')->textarea(['id'=>'txtBlock1']) ?>
   	 <?= $form->field($model, 'site_index_block_2')->textarea(['id'=>'txtBlock2']) ?>
   	<?= $form->field($model, 'site_index_block_1_en')->textarea(['id'=>'txtBlock1en']) ?>
   	 <?= $form->field($model, 'site_index_block_2_en')->textarea(['id'=>'txtBlock2en']) ?>
   	 
   	 <?php $nameLabel = $model->getAttributeLabel('site_index_bg_map') 
    	. ' <a data-toggle="modal"  href="javascript:;" data-target="#myModal2" class="btn" type="button"><i class="glyphicon glyphicon-picture"></i></a>' ?>
	 
	 <?= $form->field($model, 'site_index_bg_map')->textInput(['maxlength' => true, 'id'=>'fieldBgMap'])->label($nameLabel) ?>
	 	
	 <div id="dCover-fieldBgMap" class="dCover input-append">	  
    	  <img src="<?= $model->site_index_bg_map ?>" />
    </div>
    
    <?php $nameLabel = $model->getAttributeLabel('site_index_bg_blog') 
    	. ' <a data-toggle="modal"  href="javascript:;" data-target="#myModal3" class="btn" type="button"><i class="glyphicon glyphicon-picture"></i></a>' ?>
	 
	 <?= $form->field($model, 'site_index_bg_blog')->textInput(['maxlength' => true, 'id'=>'fieldBgBlog'])->label($nameLabel) ?>
	 	
	 <div id="dCover-fieldBgBlog" class="dCover input-append">	  
    	  <img src="<?= $model->site_index_bg_blog ?>" />
    </div>
   	

    <?= $form->field($model, 'text_homepage')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'site_title')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'site_description')->textarea(['rows' => 3]) ?>
    
    <!-- 
    <?= $form->field($model, 'number_post_trending')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'number_post_catalog_home')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'number_post_like_in_news')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'number_post_per_page')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'show_cover_after_summary')->checkbox() ?>
    -->

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	  		<hr>
	        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Save') : Yii::t('app', 'Save'), ['class' => $model->isNewRecord ? 'btn btn-lg btn-success' : 'btn btn-lg btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>

<div class="modal modal2 fade" id="myModal" >
<div class="modal-dialog1" style="width:900px">
  <div class="modal-content" style="height:700px;">
    <div class="modal-header">
      <button id="btnfieldLogo" data-dismiss="modal" type="button" class="close" aria-hidden="true">&times;</button>
      <h4 class="modal-title">Modal title</h4>
    </div>
    <div class="modal-body">
      <iframe width="850" height="600" src="/filemanager/filemanager/dialog.php?type=2&field_id=fieldLogo'&fldr=_default&akey=<?= User::hasRole('bientapvien') ? '1fdb7184e697ab9355a3f1438ddc6ef9' : '' ?>" frameborder="0" style="overflow: scroll; overflow-x: hidden; overflow-y: scroll; "></iframe>
    </div>
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal modal2 fade" id="modalLogoSmall" >
<div class="modal-dialog1" style="width:900px">
  <div class="modal-content" style="height:700px;">
    <div class="modal-header">
      <button id="btnfieldLogoSmall" data-dismiss="modal" type="button" class="close" aria-hidden="true">&times;</button>
      <h4 class="modal-title">Modal title</h4>
    </div>
    <div class="modal-body">
      <iframe width="850" height="600" src="/filemanager/filemanager/dialog.php?type=2&field_id=fieldLogoSmall'&fldr=_default&akey=<?= User::hasRole('bientapvien') ? '1fdb7184e697ab9355a3f1438ddc6ef9' : '' ?>" frameborder="0" style="overflow: scroll; overflow-x: hidden; overflow-y: scroll; "></iframe>
    </div>
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal modal2 fade" id="myModal2" >
<div class="modal-dialog1" style="width:900px">
  <div class="modal-content" style="height:700px;">
    <div class="modal-header">
      <button id="btnfieldBgMap" data-dismiss="modal" type="button" class="close" aria-hidden="true">&times;</button>
      <h4 class="modal-title">Modal title</h4>
    </div>
    <div class="modal-body">
      <iframe width="850" height="600" src="/filemanager/filemanager/dialog.php?type=2&field_id=fieldBgMap'&fldr=_default&akey=<?= User::hasRole('bientapvien') ? '1fdb7184e697ab9355a3f1438ddc6ef9' : '' ?>" frameborder="0" style="overflow: scroll; overflow-x: hidden; overflow-y: scroll; "></iframe>
    </div>
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal modal2 fade" id="myModal3" >
<div class="modal-dialog1" style="width:900px">
  <div class="modal-content" style="height:700px;">
    <div class="modal-header">
      <button id="btnfieldBgBlog" data-dismiss="modal" type="button" class="close" aria-hidden="true">&times;</button>
      <h4 class="modal-title">Modal title</h4>
    </div>
    <div class="modal-body">
      <iframe width="850" height="600" src="/filemanager/filemanager/dialog.php?type=2&field_id=fieldBgBlog'&fldr=_default&akey=<?= User::hasRole('bientapvien') ? '1fdb7184e697ab9355a3f1438ddc6ef9' : '' ?>" frameborder="0" style="overflow: scroll; overflow-x: hidden; overflow-y: scroll; "></iframe>
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
	selector: "#txtBlock1,#txtBlock2,#txtBlock1en,#txtBlock2en",
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
