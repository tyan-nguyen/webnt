<?php 
/**
 * layout for index page in anhduong theme
 */
use app\assets\IndexAsset;
IndexAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">        
<title>Trang chủ - Công ty TNHH trang trí nội thất Ánh Dương</title>
<?php $this->head() ?>
<link rel="icon" type="image/x-icon" href="/anhduong/images/favicon.png">

<!-- This site is optimized with the Yoast SEO Premium plugin v12.1 - https://yoast.com/wordpress/plugins/seo/ -->
<meta name="robots" content="index,follow"/>
<meta property="og:locale" content="vi_VN" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Trang chủ - Công ty TNHH trang trí nội thất Ánh Dương />
<meta property="og:description" content="abc.." />
<meta property="og:url" content="this url here.." />
<meta property="og:site_name" content="anhduongmetal" />
<meta property="og:image" content="link image here.." />
<meta name="twitter:card" content="summary_large_image..." />
<meta name="twitter:description" content="abc..." />
<meta name="twitter:title" content="Trang chủ - Công ty TNHH trang trí nội thất Ánh Dương" />
<meta name="twitter:image" content="link image here.." />
<!-- / Yoast SEO Premium plugin. -->

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto%3A400%2C500%2C600%2C700%7CRoboto+Condensed%3A400%2C600%2C700&#038;ver=7.6.2.3" type="text/css" />

<!-- for main.js -->
<script type='text/javascript'>
var dtLocal = {
	"themeUrl":"https:\/\/savimec.vn\/wp-content\/themes\/dt-the7",
	"passText":"To view this protected post, enter the password below:",
	"moreButtonText":{"loading":"Loading...","loadMore":"Load more"},
	"postID":"95",
	"ajaxurl":"https:\/\/savimec.vn\/wp-admin\/admin-ajax.php",
	"contactMessages":{"required":"One or more fields have an error. Please check and try again.",
	"terms":"Please accept the privacy policy."},
	"ajaxNonce":"88f5cf86ca",
	"pageData":{"type":"page","template":"page","layout":null},
	"themeSettings":{
		"smoothScroll":"off",
		"lazyLoading":false,
		"accentColor":{
			"mode":"gradient",
			"color":"#0066ab"
		},
		"desktopHeader":{"height":70},
		"floatingHeader":{
			"showAfter":140,
			"showMenu":true,
			"height":50,
			"logo":{
				"showLogo":true,
				"html":"<img class=\" preload-me\" src=\"\/anhduong\/images\/logo.png\" width=\"182\" height=\"36\"   sizes=\"182px\" alt=\"savimec\" \/>",
				"url":"https:\/\/savimec.vn\/"}},
				"topLine":{"floatingTopLine":{"logo":{"showLogo":false,"html":""}}},
				"mobileHeader":{"firstSwitchPoint":1050,"secondSwitchPoint":778,"firstSwitchPointHeight":60,"secondSwitchPointHeight":50},"stickyMobileHeaderFirstSwitch":{"logo":{"html":"<img class=\" preload-me\" src=\"\/anhduong\/images\/logo.png\" width=\"182\" height=\"36\"   sizes=\"182px\" alt=\"savimec\" \/>"}},"stickyMobileHeaderSecondSwitch":{"logo":{"html":"<img class=\" preload-me\" src=\"\/anhduong\/images\/logo.png\" width=\"182\" height=\"36\"   sizes=\"182px\" alt=\"savimec\" \/>"}},"content":{"textColor":"#85868c","headerColor":"#333333"},"sidebar":{"switchPoint":990},"boxedWidth":"1340px","stripes":{"stripe1":{"textColor":"#787d85","headerColor":"#3b3f4a"},"stripe2":{"textColor":"#8b9199","headerColor":"#ffffff"},"stripe3":{"textColor":"#ffffff","headerColor":"#ffffff"}}},"VCMobileScreenWidth":"768","wcCartFragmentHash":"8ed1bdc5ad791fae81a571f8c9ac7bc8"};
var dtShare = {"shareButtonText":{"facebook":"Share on Facebook","twitter":"Tweet","pinterest":"Pin it","linkedin":"Share on Linkedin","whatsapp":"Share on Whatsapp","google":"Share on Google Plus"},"overlayOpacity":"85"};
</script> 

<!-- for main.js -->
<script type='text/javascript' src='https://savimec.vn/wp-content/themes/dt-the7/js/above-the-fold.min.js'></script>

</head>

<body data-rsssl=1 class="page-template-default page page-id-95 the7-core-ver-2.0.4 woocommerce-no-js dt-responsive-on accent-gradient srcset-enabled btn-flat custom-btn-color custom-btn-hover-color phantom-fade phantom-shadow-decoration phantom-main-logo-on floating-top-bar sticky-mobile-header top-header first-switch-logo-left first-switch-menu-right second-switch-logo-left second-switch-menu-right right-mobile-menu layzr-loading-on popup-message-style dt-fa-compatibility the7-ver-7.6.2.3 wpb-js-composer js-comp-ver-6.0.2 vc_responsive">
<!-- <body data-rsssl=1 class="sticky-mobile-header top-header first-switch-logo-left first-switch-menu-right second-switch-logo-left second-switch-menu-right right-mobile-menu vc_responsive"> 
 -->
<?php $this->beginBody() ?>

<div id="page" >

	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
	
    <?= $this->render('menu-pc') ?>
    <?= $this->render('menu-mobile')  ?>
    
    <?= $this->render('home/slides') ?>    
    <?= $this->render('home/grid3') ?>
    <?= $this->render('home/grid2') ?>
    <?= $this->render('home/branches') ?>
    
    <!-- !Footer -->
    <?php // $this->render('footer') ?>
    <?= $this->render('footer_leanjs') ?>
    <!-- #footer --> 
    
    <a href="#" class="scroll-top"><i class="fa-solid fa-arrow-up"></i></a> 
</div><!-- #page --> 


<script>
window.chatBubbleConfig = {
	"ajax_url":"#",
	"options":{
		"enabled":1,
		"enabled_font_opensans":1,
		"class":"",
		"color":"#df7e1c",
		"premium":0,
		"intro":"Chat với chúng tôi",
		"enabled_intro":1,
		"enabled_greeting":1,
		"greeting_show":0,
		"greeting_name":"Ánh Dương Metal",
		"greeting_label":"We make innovation simple",
		"greeting":"Chào mừng bạn đến với Ánh Dương Metal",
		"links":[
			{
				"u":"https:\/\/anhduongmetal.vnweb.online\/",
				"t":"Trang ch\u1ee7",
				"b":"1"
			},
			{
    			"u":"https:\/\/www.facebook.com\/",
    			"t":"Facebook",
    			"b":"1"
			}
		],
		"callback_simple_icon":"https:\/\/leanjsc.com\/wp-content\/plugins\/chat-bubble\/assets\/images\/calling.svg",
		"callback_advanced_icon":"https:\/\/leanjsc.com\/wp-content\/plugins\/chat-bubble\/assets\/images\/calling.svg",
		"phone_icon":"https:\/\/leanjsc.com\/wp-content\/plugins\/chat-bubble\/assets\/images\/calling.svg",
		"url_icon":"https:\/\/leanjsc.com\/wp-content\/plugins\/chat-bubble\/assets\/images\/awwwards.svg",
		"email_icon":"https:\/\/leanjsc.com\/wp-content\/plugins\/chat-bubble\/assets\/images\/mailto.svg",
		"messenger_icon":"https:\/\/leanjsc.com\/wp-content\/plugins\/chat-bubble\/assets\/images\/fbmessenger.svg",
		"telegram_icon":"https:\/\/leanjsc.com\/wp-content\/plugins\/chat-bubble\/assets\/images\/telegram.svg",
		"line_icon":"https:\/\/leanjsc.com\/wp-content\/plugins\/chat-bubble\/assets\/images\/line.svg",
		"skype_icon":"https:\/\/leanjsc.com\/wp-content\/plugins\/chat-bubble\/assets\/images\/skype.svg",
		"viber_icon":"https:\/\/leanjsc.com\/wp-content\/plugins\/chat-bubble\/assets\/images\/viber.svg",
		"whatsapp_icon":"https:\/\/leanjsc.com\/wp-content\/plugins\/chat-bubble\/assets\/images\/whatsapp.svg",
		"zalo_icon":"https:\/\/leanjsc.com\/wp-content\/plugins\/chat-bubble\/assets\/images\/zalo.svg",
		"tawkto_icon":"https:\/\/leanjsc.com\/wp-content\/plugins\/chat-bubble\/assets\/images\/tawkto.svg",
		"messenger":{
			"enabled":"1",
			"title":"FB Messenger",
			"facebook":"anyu1989",
			"blank":"1",
			"place":"inner",
			"pos":"0"
		},
		"url":{
			"enabled":"0",
			"title":"Blue Coral",
			"url":"http:\/\/bluecoral.vn",
			"blank":"1",
			"place":"inner",
			"pos":"2"
		},
		"greeting_avatar":"https:\/\/leanjsc.com\/wp-content\/plugins\/chat-bubble\/assets\/images\/avatar_default.png",
		"phone":{"enabled":"1","title":"Phone","phone":"0388923998","place":"inner","pos":"1"},
		"email":{"enabled":"0","title":"Email","mail":"","place":"inner","pos":"3"},
		"telegram":{"enabled":"0","title":"Telegram","telegram":"","blank":"0","place":"inner","pos":"4"},
		"line":{"enabled":"0","title":"LINE","line":"","blank":"0","place":"inner","pos":"5"},
		"skype":{"enabled":"0","title":"Skype","skype":"","blank":"0","place":"inner","pos":"6"},
		"viber":{"enabled":"0","title":"Viber","viber":"","blank":"0","place":"inner","pos":"7"},
		"whatsapp":{"enabled":"0","title":"Whatsapp","whatsapp":"","blank":"0","place":"inner","pos":"8"},
		"zalo":{"enabled":"1","title":"Zalo","zalo":"0374711908","blank":"1","place":"inner","pos":"9"},
		"tawkto":{"enabled":"0","title":"Tawk.to","tawkto":"","place":"inner","pos":"10"},
		"callback_simple":{
			"enabled":"0",
			"title":"G\u1ecdi t\u00f4i ngay",
			"header":"G\u1ecdi ch\u00fang t\u00f4i ngay",
			"footer_textarea":"\u0110\u00e2y l\u00e0 n\u1ed9i dung footer",
			"submit_lbl":"G\u1eedi",
			"input_name_lbl":"T\u00ean c\u1ee7a b\u1ea1n",
			"input_name_ph":"Nh\u1eadp t\u00ean c\u1ee7a b\u1ea1n",
			"input_phone_lbl":"S\u1ed1 \u0111i\u1ec7n tho\u1ea1i c\u1ee7a b\u1ea1n",
			"input_phone_ph":"Nh\u1eadp s\u1ed1 \u0111i\u1ec7n tho\u1ea1i c\u1ee7a b\u1ea1n",
			"input_option_lbl":"Contact Type","input_option_val":"Sales, Customer Support",
			"place":"inner",
			"pos":"11"
		},
		"callback_advanced":{
			"enabled":"0",
			"title":"G\u1ecdi t\u00f4i ngay",
			"callmenow_title":"G\u1ecdi t\u00f4i ngay",
			"callmenow_header":"B\u1ea1n c\u00f3 mu\u1ed1n nh\u1eadn cu\u1ed9c g\u1ecdi l\u1ea1i kh\u00f4ng?",
			"callmenow_notice":"",
			"callmenow_footer_textarea":"D\u1eef li\u1ec7u b\u1ea1n nh\u1eadp v\u00e0o \u0111\u01b0\u1ee3c qu\u1ea3n l\u00fd b\u1edfi ch\u00fang t\u00f4i",
			"callmenow_submit":"G\u1ecdi t\u00f4i ngay",
			"callmenow_input_phone_ph":"Nh\u1eadp s\u1ed1 \u0111i\u1ec7n tho\u1ea1i c\u1ee7a b\u1ea1n",
			"callmelater_title":"G\u1ecdi l\u1ea1i sau",
			"callmelater_header":"Ch\u1ecdn th\u1eddi gian cho vi\u1ec7c g\u1ecdi l\u1ea1i",
			"callmelater_notice":"",
			"callmelater_footer_textarea":"D\u1eef li\u1ec7u b\u1ea1n nh\u1eadp v\u00e0o \u0111\u01b0\u1ee3c qu\u1ea3n l\u00fd b\u1edfi ch\u00fang t\u00f4i",
			"callmelater_submit":"G\u1ecdi l\u1ea1i sau",
			"callmelater_input_phone_ph":"Nh\u1eadp s\u1ed1 \u0111i\u1ec7n tho\u1ea1i c\u1ee7a b\u1ea1n",
			"callmelater_days":"0",
			"callmelater_time_min":"8",
			"callmelater_time_max":"18",
			"callmelater_min_interval":"30",
			"leaveamsg_title":"\u0110\u1ec3 l\u1ea1i l\u1eddi nh\u1eafn",
			"leaveamsg_header":"\u0110\u1ec3 l\u1ea1i l\u1eddi nh\u1eafn c\u1ee7a b\u1ea1n, ch\u00fang t\u00f4i s\u1ebd li\u00ean l\u1ea1c v\u1edbi b\u1ea1n s\u1edbm.",
			"leaveamsg_notice":"",
			"leaveamsg_footer_textarea":"D\u1eef li\u1ec7u b\u1ea1n nh\u1eadp v\u00e0o \u0111\u01b0\u1ee3c qu\u1ea3n l\u00fd b\u1edfi ch\u00fang t\u00f4i",
			"leaveamsg_submit":"G\u1eedi",
			"leaveamsg_input_message_ph":"Nh\u1eadp l\u1eddi nh\u1eafn c\u1ee7a b\u1ea1n",
			"leaveamsg_input_phone_ph":"\u0110i\u1ec7n tho\u1ea1i c\u1ee7a b\u1ea1n",
			"leaveamsg_input_email_ph":"Email c\u1ee7a b\u1ea1n",
			"info_header":"Ch\u00fang t\u00f4i mu\u1ed1n bi\u1ebft v\u1ec1 b\u1ea1n nhi\u1ec1u h\u01a1n",
			"info_submit":"G\u1eedi",
			"info_input_email_lbl":"\u0110\u1ecba ch\u1ec9 email c\u1ee7a b\u1ea1n",
			"info_input_email_ph":"Nh\u1eadp email c\u1ee7a b\u1ea1n",
			"info_input_name_lbl":"T\u00ean c\u1ee7a b\u1ea1n",
			"info_input_name_ph":"Nh\u1eadp t\u00ean c\u1ee7a b\u1ea1n",
			"place":"inner","pos":"12"
		}},"nonce":{"cbb_callback":"cf9a9ce7d5"}}				
</script>
			
			
<!-- Chat Bubble -->
<noscript>You need to enable JavaScript to run this app.</noscript>
<div id="chat-bubble-root"></div>
<script>!function(e){function t(t){for(var n,a,i=t[0],c=t[1],l=t[2],s=0,p=[];s<i.length;s++)a=i[s],Object.prototype.hasOwnProperty.call(o,a)&&o[a]&&p.push(o[a][0]),o[a]=0;for(n in c)Object.prototype.hasOwnProperty.call(c,n)&&(e[n]=c[n]);for(f&&f(t);p.length;)p.shift()();return u.push.apply(u,l||[]),r()}function r(){for(var e,t=0;t<u.length;t++){for(var r=u[t],n=!0,i=1;i<r.length;i++){var c=r[i];0!==o[c]&&(n=!1)}n&&(u.splice(t--,1),e=a(a.s=r[0]))}return e}var n={},o={1:0},u=[];function a(t){if(n[t])return n[t].exports;var r=n[t]={i:t,l:!1,exports:{}};return e[t].call(r.exports,r,r.exports,a),r.l=!0,r.exports}a.e=function(e){var t=[],r=o[e];if(0!==r)if(r)t.push(r[2]);else{var n=new Promise((function(t,n){r=o[e]=[t,n]}));t.push(r[2]=n);var u,i=document.createElement("script");i.charset="utf-8",i.timeout=120,a.nc&&i.setAttribute("nonce",a.nc),i.src=function(e){return a.p+"static/js/"+({}[e]||e)+"."+{3:"a985462a"}[e]+".chunk.js"}(e);var c=new Error;u=function(t){i.onerror=i.onload=null,clearTimeout(l);var r=o[e];if(0!==r){if(r){var n=t&&("load"===t.type?"missing":t.type),u=t&&t.target&&t.target.src;c.message="Loading chunk "+e+" failed.\n("+n+": "+u+")",c.name="ChunkLoadError",c.type=n,c.request=u,r[1](c)}o[e]=void 0}};var l=setTimeout((function(){u({type:"timeout",target:i})}),12e4);i.onerror=i.onload=u,document.head.appendChild(i)}return Promise.all(t)},a.m=e,a.c=n,a.d=function(e,t,r){a.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},a.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},a.t=function(e,t){if(1&t&&(e=a(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(a.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var n in e)a.d(r,n,function(t){return e[t]}.bind(null,n));return r},a.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return a.d(t,"a",t),t},a.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},a.p="/",a.oe=function(e){throw console.error(e),e};var i=this["webpackJsonpchat-bubble"]=this["webpackJsonpchat-bubble"]||[],c=i.push.bind(i);i.push=t,i=i.slice();for(var l=0;l<i.length;l++)t(i[l]);var f=c;r()}([])</script>
<!-- // end Chat Bubble -->


<!-- <script type='text/javascript' src='https://leanjsc.com/wp-content/plugins/chat-bubble/assets/js/runtime.js?ver=6.3.2' id='cbb-runtime-js'></script> 
<script type='text/javascript' src='https://leanjsc.com/wp-content/plugins/chat-bubble/assets/js/main.js?ver=6.3.2' id='cbb-main-js'></script>  -->

<script type='text/javascript' src='/anhduong/js/chat_runtime.js'></script> 
<script type='text/javascript' src='/anhduong/js/chat_main.js'></script> 

<script type='text/javascript' src='/anhduong/js/main.js'></script>

<!-- for slides -->
<!-- <script type='text/javascript' src='/anhduong/js/slick.min.js'></script> -->
<script type="text/javascript" src="/anhduong/js/slick/slick.min.js"></script>

<script>

$(document).ready(function(){
  $('.slider').slick({
  	dots: false,
  	speed: 1500,
    autoplay: true,
    autoplaySpeed: 1500,
  });
  $('.branch-slider').slick({
  	infinite: true,
      slidesToShow: 5,
      slidesToScroll: 1,
      autoplay: true,
    autoplaySpeed: 1500,
    responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    },
    ],
  });
});

</script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
