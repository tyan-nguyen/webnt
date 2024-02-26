<?php
use yii\helpers\Html;
use app\assets\AppAsset;
use app\modules\admin\models\Settings;
AppAsset::register($this);
$setting = Settings::findOne(1);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <?= Html::csrfMetaTags() ?>
  <title><?= $this->title ?></title>
  <?php $this->head() ?>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= Yii::getAlias('@web') ?>/assets/AdminLTE-2.4.12/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= Yii::getAlias('@web') ?>/assets/AdminLTE-2.4.12/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= Yii::getAlias('@web') ?>/assets/AdminLTE-2.4.12/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= Yii::getAlias('@web') ?>/assets/AdminLTE-2.4.12/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= Yii::getAlias('@web') ?>/assets/AdminLTE-2.4.12/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?= Yii::getAlias('@web') ?>/assets/AdminLTE-2.4.12/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?= Yii::getAlias('@web') ?>/assets/AdminLTE-2.4.12/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?= Yii::getAlias('@web') ?>/assets/AdminLTE-2.4.12/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= Yii::getAlias('@web') ?>/assets/AdminLTE-2.4.12/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?= Yii::getAlias('@web') ?>/assets/AdminLTE-2.4.12/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" type="text/css" href="https://www.responsivefilemanager.com/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
  
  <!-- custom style -->
  <link rel="stylesheet" href="<?= Yii::getAlias('@web') ?>/css/customadmin.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="<?= Yii::getAlias('@web') ?>/assets/AdminLTE-2.4.12/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="<?= Yii::getAlias('@web') ?>/assets/AdminLTE-2.4.12/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <!-- <link rel="stylesheet" href="<?= Yii::getAlias('@web') ?>/assets/AdminLTE-2.4.12/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->
	<style>
		.content-wrapper {
		  width: auto !important;
		}
	</style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php $this->beginBody() ?>
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?= Yii::getAlias('@web') ?>/admin" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><?= Html::img($setting->site_logo_small, ['style'=>'width:40px;height:40px;']) ?></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><?= Html::img($setting->site_logo, ['style'=>'width:200px']) ?></span>

    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

     <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        	<li class="dropdown user user-menu">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	              <i class="fa fa-user-circle-o" aria-hidden="true"></i>
	              <span class="hidden-xs"><?= isset(Yii::$app->user->identity->username) ? Yii::$app->user->identity->username : '' ?></span>
	            </a>
            </li>
            <li class="dropdown user user-menu">
            	<a href="/site/set-lang?target=vi" class="btn btn-primary py-1 px-1 ms-1"><i class="fa fa-star"></i> vi &nbsp;</a>
            </li>
            <li class="dropdown user user-menu">
            	<a href="/site/set-lang?target=en" class="btn btn-primary py-1 px-1 ms-1"> <i class="fa fa-globe"></i> en &nbsp;</a>
            </li>
		</ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
     <!--  <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= Yii::getAlias('@web') ?>/assets/AdminLTE-2.4.12/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div> -->
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
		<?php 
            //include('admin_left_menu.php')
               echo $this->render('admin_left_menu', ['setting'=>$setting]);
        ?>
    </section>
    <!-- /.sidebar -->
  </aside>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper container">
  	<section class="content-header">
      <h1 style="text-transform: uppercase;">
        <?= $this->title ?>
        <small>admin page</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?= $this->title ?></li>
      </ol>
    </section>
    
    <hr/>

	<section class="content">
		<?= $content ?>
	</section>
  </div>
  <!-- /.content-wrapper -->




  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <?= $setting->getSiteSource()  ?>
    </div>
    <?= $setting->getSiteCopyright()  ?>
    
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark" style="display: none;">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="<?= Yii::getAlias('@web') ?>/assets/AdminLTE-2.4.12/javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="<?= Yii::getAlias('@web') ?>/assets/AdminLTE-2.4.12/javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="<?= Yii::getAlias('@web') ?>/assets/AdminLTE-2.4.12/javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="<?= Yii::getAlias('@web') ?>/assets/AdminLTE-2.4.12/javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="<?= Yii::getAlias('@web') ?>/assets/AdminLTE-2.4.12/javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="<?= Yii::getAlias('@web') ?>/assets/AdminLTE-2.4.12/javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="<?= Yii::getAlias('@web') ?>/assets/AdminLTE-2.4.12/javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="<?= Yii::getAlias('@web') ?>/assets/AdminLTE-2.4.12/javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?= Yii::getAlias('@web') ?>/assets/AdminLTE-2.4.12/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= Yii::getAlias('@web') ?>/assets/AdminLTE-2.4.12/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= Yii::getAlias('@web') ?>/assets/AdminLTE-2.4.12/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?= Yii::getAlias('@web') ?>/assets/AdminLTE-2.4.12/bower_components/raphael/raphael.min.js"></script>
<script src="<?= Yii::getAlias('@web') ?>/assets/AdminLTE-2.4.12/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?= Yii::getAlias('@web') ?>/assets/AdminLTE-2.4.12/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?= Yii::getAlias('@web') ?>/assets/AdminLTE-2.4.12/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?= Yii::getAlias('@web') ?>/assets/AdminLTE-2.4.12/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= Yii::getAlias('@web') ?>/assets/AdminLTE-2.4.12/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= Yii::getAlias('@web') ?>/assets/AdminLTE-2.4.12/bower_components/moment/min/moment.min.js"></script>
<script src="<?= Yii::getAlias('@web') ?>/assets/AdminLTE-2.4.12/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?= Yii::getAlias('@web') ?>/assets/AdminLTE-2.4.12/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?= Yii::getAlias('@web') ?>/assets/AdminLTE-2.4.12/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?= Yii::getAlias('@web') ?>/assets/AdminLTE-2.4.12/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= Yii::getAlias('@web') ?>/assets/AdminLTE-2.4.12/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= Yii::getAlias('@web') ?>/assets/AdminLTE-2.4.12/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= Yii::getAlias('@web') ?>/assets/AdminLTE-2.4.12/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= Yii::getAlias('@web') ?>/assets/AdminLTE-2.4.12/dist/js/demo.js"></script>
<script src="<?= Yii::getAlias('@web') ?>/assets/AdminLTE-2.4.12/dist/js/custom.js"></script>


 <script>
			$("a[href='<?= Yii::$app->request->url ?>']").parent().addClass('active');
			$("a[href='<?= Yii::$app->request->url ?>']").parent().parent().parent().addClass('active');

      </script>
<script>
/*

Morris.Line({
	  element: 'line-chart',
	  data: [
	    { y: '2006-01-01', a: 100, b: 90 },
	    { y: '2006-01-02', a: 75,  b: 65 },
	    { y: '2006-01-03', a: 50,  b: 40 },
	    { y: '2006-01-04', a: 75,  b: 65 },
	    { y: '2006-01-05', a: 50,  b: 40 },
	    { y: '2006-01-06', a: 75,  b: 65 },
	    { y: '2006-01-07', a: 100, b: 90 }
	  ],
	  xkey: 'y',
	  ykeys: ['a'],
	  labels: ['Series A']
	});
*/

<?php
	$dayArrs = \app\models\PcounterByDay::find()->orderBy('day DESC')->limit(7)->all();
?>
// LINE CHART
var line = new Morris.Line({
  element: 'line-chart',
  data: [
	<?php
		foreach ($dayArrs as $i=>$day){
			echo "{y: '".$day->day."', item1: $day->user},";
		}
	?>
	{y: '<?= date('Y-m-d') ?>', item1: <?= number_format(Yii::$app->userCounter->getToday()) ?>},
  ],
  xkey: 'y',
  ykeys: ['item1'],
  labels: ['Truy cập'],
  xLabels: 'day',
 /* lineColors: ['#3c8dbc'],
  hideHover: 'auto',
  resize: true*/
});

</script>

<script>
//Date range picker
$('#txtSearchTuNgay').daterangepicker({
	locale: { format: 'DD/MM/YYYY' }
});


</script>




<?php $this->endBody() ?>

<script>
$('.btnMessage').on('click', function(){
	$('.alert-message').toggle();
});
</script>

</body>
</html>
<?php $this->endPage() ?>
