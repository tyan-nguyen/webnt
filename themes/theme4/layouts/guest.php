<?php 
    use yii\helpers\Html;
    use app\assets\GuestAsset;
use app\modules\admin\models\LinksQuery;
use app\modules\admin\models\Settings;

    GuestAsset::register($this);
    $setting = Settings::find()->one();
    
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="utf-8">
     <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>    
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <style>
    .img-news{
        height: 173px !important;
    }
    .title-news{
        min-height:150px !important;
    }
    </style>
</head>

<body>
<?php $this->beginBody() ?>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light ps-5 pe-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <!-- <small class="py-2">
                    <i class="far fa-clock text-primary me-2"></i>Opening Hours: Mon - Tues : 6.00 am - 10.00 pm, Sunday Closed </small> -->
                    <small class="py-2"><?= $setting->topText ?></small>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa fa-envelope-open me-2"></i><?= $setting->top_email ?></p>
                    </div>
                    <div class="py-2">
                        <p class="m-0"><a class="aWhite" href="tel:<?= $setting->top_hotline ?>"><i class="fa fa-phone-alt me-2"></i><?= $setting->top_hotline ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-12 py-3 py-lg-0" style="padding: 10px;">
        <a href="/" class="navbar-brand p-0">
        
        	<img src="<?= $setting->site_logo ?>" height=60 />
            <!-- <h1 class="m-0 text-primary"><i class="fas fa-leaf me-2"></i><?= $setting->site_name ?></h1> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
            	<?php 
            	   $menuLinks = LinksQuery::getMenuLinks();
            	   foreach ($menuLinks as $indexLink => $link){
            	?>
            		<a href="<?= $link->showUrl ?>" <?= $link->open_new_tab?'target="_blank"':'' ?> class="nav-item nav-link <?= Yii::$app->request->url==$link->showUrl?'active':''  ?>"><?= $link->showName ?></a>
            	<?php } ?>
            </div>
            
            <!-- 
            <button type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
             -->
            
            <!--<a href="appointment.html" class="btn btn-primary py-2 px-4 ms-3">Appointment</a>-->
            <a href="/site/set-lang?target=vi" class="alang btn btn-primary py-1 px-1 ms-1"><i class="fas fa-star"></i> Tiếng Việt &nbsp;</a>
            <a href="/site/set-lang?target=en" class="alang btn btn-primary py-1 px-1 ms-1"> <i class="fas fa-globe-americas"></i> English &nbsp;</a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="<?= Yii::t('app', 'Type search keyword') ?>">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

	
	
	<?= $content ?>


    <!-- Newsletter Start -->
    <div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1;">
        <div class="container">
            <div class="bg-primary p-5">
                <form action="<?= Yii::getAlias('@web/site/newsletter') ?>" method="get"  class="mx-auto" style="max-width: 600px;">
                    <div class="input-group">
                        <input name="email" type="email" class="form-control border-white p-3" placeholder="<?= Yii::t('app', 'Your email') ?>">
                        <!-- <button class="btn btn-dark px-4">Sign Up</button>-->
                        <input type="submit" class="btn btn-dark px-4" value="<?= Yii::t('app', 'Subscribe') ?>">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->
    

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light py-5 wow fadeInUp" data-wow-delay="0.3s" style="margin-top: -75px;">
        <div class="container pt-5">
            <div class="row g-5 pt-4">
                <div class="col-lg-4 col-md-6">
                    <h3 class="text-white mb-4"><?= Yii::t('app', 'Quick Links') ?></h3>
                    <div class="d-flex flex-column justify-content-start">
                    	<?php 
                    	   $quickLinks = LinksQuery::getQuickLinks();
                    	   foreach ($quickLinks as $indexLink => $link){
                    	?>
                    		<a class="text-light mb-2" href="<?= $link->showUrl ?>" <?= $link->open_new_tab?'target="_blank"':'' ?>><i class="bi bi-arrow-right text-primary me-2"></i><?= $link->showName ?></a>
                    	<?php } ?>
                    	
                        <!-- <a class="text-light mb-2" href="/site/index"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-light mb-2" href="/site/about"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                        <a class="text-light mb-2" href="/site/service"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                        <a class="text-light mb-2" href="/site/blog"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                        <a class="text-light" href="/site/contact"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a> -->
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h3 class="text-white mb-4"><?= Yii::t('app', 'Popular Links') ?></h3>
                    <div class="d-flex flex-column justify-content-start">
                    	<?php 
                    	   $popularLinks = LinksQuery::getPopularLinks();
                    	   foreach ($popularLinks as $indexLink => $link){
                    	?>
                    		<a class="text-light mb-2" href="<?= $link->showUrl ?>" <?= $link->open_new_tab?'target="_blank"':'' ?>><i class="bi bi-arrow-right text-primary me-2"></i><?= $link->showName ?></a>
                    	<?php } ?>
                        <!-- <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Link 1</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Link 2</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Link 3</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Link 4</a>
                        <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Link 5</a> -->
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Get In Touch</h3>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>info@example.com</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+012 345 67890</p>
                </div> -->
                <div class="col-lg-4 col-md-6">
                    <h3 class="text-white mb-4"><?= Yii::t('app', 'Follow Us') ?></h3>
                    <div class="d-flex">
                    	<?php 
                    	   $socialLinks = LinksQuery::getSocialLinks();
                    	   foreach ($socialLinks as $indexLink => $link){
                    	?>
                    		<a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="<?= $link->showUrl ?>" <?= $link->open_new_tab?'target="_blank"':'' ?>><?= $link->showName ?></a>
                    	<?php } ?>
                        <!-- <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-instagram fw-normal"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-light py-4" style="background: #051225;">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-6 text-center text-md-start">
                    <!-- <p class="mb-md-0">&copy; <a class="text-white border-bottom" href="#">Bioenergy 2022</a>. All Rights Reserved.</p> -->
                    <p class="mb-md-0"><?= $setting->siteCopyright ?></p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">
                    <!-- Designed by <a class="text-white border-bottom" href="#">#some</a> -->
                    <?= $setting->siteSource ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
    
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>