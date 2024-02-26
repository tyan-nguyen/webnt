<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Modal;
use kartik\grid\GridView;
use johnitvn\ajaxcrud\CrudAsset; 
use johnitvn\ajaxcrud\BulkButtonWidget;
use webvimark\modules\UserManagement\models\User;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\CarouselSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Carousels');
$this->params['breadcrumbs'][] = $this->title;

CrudAsset::register($this);

?>
<div class="carousel-index">
    <div id="ajaxCrudDatatable">
        <?=GridView::widget([
            'id'=>'crud-datatable',
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'pjax'=>true,
            'columns' => require(__DIR__.'/_columns.php'),
            'toolbar'=> [
                ['content'=>
                    Html::a('<i class="glyphicon glyphicon-plus"></i> ' . Yii::t('app', 'Create'), ['create'],
                    ['role'=>'modal-remote1', 'data-pjax'=>0, 'title'=> Yii::t('app', 'Create new') . ' Carousels','class'=>'btn btn-default']).
                    Html::a('<i class="glyphicon glyphicon-picture"></i> ' . Yii::t('app', 'Manage image'), ['javascript:;'],
                        ['data-toggle'=>'modal', 'data-target'=>'#myModal', 'type'=>'button', 'title'=> Yii::t('app', 'Manage image'),'class'=>'btn btn-default']).
                    Html::a('<i class="glyphicon glyphicon-repeat"></i> ' . Yii::t('app', 'Reset Grid'), [''],
                    ['data-pjax'=>1, 'class'=>'btn btn-default', 'title'=>Yii::t('app', 'Reset Grid')])
                ],
            ],          
            'striped' => true,
            'condensed' => true,
            'responsive' => true,          
            'panel' => [
                'type' => 'primary', 
                'heading' => '<i class="glyphicon glyphicon-list"></i> Carousels listing',
                //'before'=>'<em>* Resize table columns just like a spreadsheet by dragging the column edges.</em>',
                'after'=>BulkButtonWidget::widget([
                            'buttons'=>Html::a('<i class="glyphicon glyphicon-trash"></i>&nbsp; ' . Yii::t('app', 'Delete All'),
                                ["bulk-delete"] ,
                                [
                                    "class"=>"btn btn-danger btn-xs",
                                    'role'=>'modal-remote-bulk',
                                    'data-confirm'=>false, 'data-method'=>false,// for overide yii data api
                                    'data-request-method'=>'post',
                                    'data-confirm-title'=>Yii::t('app', 'Are you sure?'),
                                    'data-confirm-message'=>Yii::t('app', 'Are you sure want to delete this item')                                ]),
                        ]).                        
                        '<div class="clearfix"></div>',
            ]
        ])?>
    </div>
</div>
<?php Modal::begin([
    "id"=>"ajaxCrudModal",
    "footer"=>"",// always need it for jquery plugin
])?>
<?php Modal::end(); ?>

<div class="modal modal2 fade" id="myModal" >
<div class="modal-dialog1" style="width:900px">
  <div class="modal-content" style="height:700px;">
    <div class="modal-header">
      <button id="btnModal2" data-dismiss="modal" type="button" class="close" aria-hidden="true">&times;</button>
      <h4 class="modal-title">Modal title</h4>
    </div>
    <div class="modal-body">
      <iframe width="850" height="600" src="/filemanager/filemanager/dialog.php?type=2&fldr=_carousel&akey=<?= User::hasRole('bientapvien') ? '1fdb7184e697ab9355a3f1438ddc6ef9' : '' ?>" frameborder="0" style="overflow: scroll; overflow-x: hidden; overflow-y: scroll; "></iframe>
    </div>
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php 
/* $this->registerJsFile(Yii::getAlias('@web') . "/js/script.js", ['position' => \yii\web\View::POS_END, 'depends' => [
    \yii\web\JqueryAsset::className()
]]); */
?>
