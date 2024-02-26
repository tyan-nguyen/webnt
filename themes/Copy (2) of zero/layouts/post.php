<?php

use app\themes\zero\assets\IndexAssets;

/** @var yii\web\View $this */
/** @var string $content */

IndexAssets::register($this);
//register meta tags
$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <title><?= $this->title ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="body-inner">
	<?= $this->render('guest/header') ?>
	<div id="banner-area" class="banner-area" style="background-image:url(/ntweb/images/banner/banner1.jpg)">
      <div class="banner-text">
        <div class="container">
            <div class="row">
              <div class="col-lg-12">
                  <div class="banner-heading">
                    <h1 class="banner-title">News</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item"><a href="#">News</a></li>
                          <li class="breadcrumb-item active" aria-current="page">News Right sidebar</li>
                        </ol>
                    </nav>
                  </div>
              </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
      </div><!-- Banner text end -->
    </div><!-- Banner area end --> 

	<section id="main-container" class="main-container">
      <div class="container">
        <div class="row">
    
          <div class="col-lg-8 mb-5 mb-lg-0">
				<?= $content ?>	
		 </div><!-- Content Col end -->
		 
      <div class="col-lg-4">

        <div class="sidebar sidebar-right">
          <div class="widget recent-posts">
            <h3 class="widget-title">Recent Posts</h3>
            <ul class="list-unstyled">
              <li class="d-flex align-items-center">
                <div class="posts-thumb">
                  <a href="#"><img loading="lazy" alt="img" src="/ntweb/images/news/news1.jpg"></a>
                </div>
                <div class="post-info">
                  <h4 class="entry-title">
                    <a href="#">We Just Completes $17.6 Million Medical Clinic In Mid-missouri</a>
                  </h4>
                </div>
              </li><!-- 1st post end-->

              <li class="d-flex align-items-center">
                <div class="posts-thumb">
                  <a href="#"><img loading="lazy" alt="img" src="/ntweb/images/news/news2.jpg"></a>
                </div>
                <div class="post-info">
                  <h4 class="entry-title">
                    <a href="#">Thandler Airport Water Reclamation Facility Expansion Project Named</a>
                  </h4>
                </div>
              </li><!-- 2nd post end-->

              <li class="d-flex align-items-center">
                <div class="posts-thumb">
                  <a href="#"><img loading="lazy" alt="img" src="/ntweb/images/news/news3.jpg"></a>
                </div>
                <div class="post-info">
                  <h4 class="entry-title">
                    <a href="#">Silicon Bench And Cornike Begin Construction Solar Facilities</a>
                  </h4>
                </div>
              </li><!-- 3rd post end-->

            </ul>

          </div><!-- Recent post end -->

          <div class="widget">
            <h3 class="widget-title">Categories</h3>
            <ul class="arrow nav nav-tabs">
              <li><a href="#">Construction</a></li>
              <li><a href="#">Commercial</a></li>
              <li><a href="#">Building</a></li>
              <li><a href="#">Safety</a></li>
              <li><a href="#">Structure</a></li>
            </ul>
          </div><!-- Categories end -->

          

          <div class="widget widget-tags">
            <h3 class="widget-title">Tags </h3>

            <ul class="list-unstyled">
              <li><a href="#">Construction</a></li>
              <li><a href="#">Design</a></li>
              <li><a href="#">Project</a></li>
              <li><a href="#">Building</a></li>
              <li><a href="#">Finance</a></li>
              <li><a href="#">Safety</a></li>
              <li><a href="#">Contracting</a></li>
              <li><a href="#">Planning</a></li>
            </ul>
          </div><!-- Tags end -->


        </div><!-- Sidebar end -->
      </div><!-- Sidebar Col end -->

    </div><!-- Main row end -->

  </div><!-- Conatiner end -->
</section><!-- Main container end -->

		 
	<?= $this->render('guest/footer') ?>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
