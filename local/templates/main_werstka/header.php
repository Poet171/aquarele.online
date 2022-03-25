<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<?$APPLICATION->ShowHead();?>
<link href="<?=SITE_TEMPLATE_PATH?>/common.css" type="text/css" rel="stylesheet" />
<link href="<?=SITE_TEMPLATE_PATH?>/colors.css" type="text/css" rel="stylesheet" />

	<!--[if lte IE 6]>
	<style type="text/css">
		
		#banner-overlay { 
			background-image: none;
			filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>images/overlay.png', sizingMethod = 'crop'); 
		}
		
		div.product-overlay {
			background-image: none;
			filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>images/product-overlay.png', sizingMethod = 'crop');
		}
		
	</style>
	<![endif]-->

	<title><?$APPLICATION->ShowTitle()?></title>

<!-- ////////////////////////////////// -->
<!-- //     Retina Bookmark Icon     // -->
<!-- ////////////////////////////////// -->
<link rel="apple-touch-icon-precomposed" href="apple-icon.png"/>

<!-- ////////////////////////////////// -->
<!-- //     Retina Bookmark Icon     // -->
<!-- ////////////////////////////////// -->
<link rel="apple-touch-icon-precomposed" href="apple-icon.png"/>

<!-- ////////////////////////////////// -->
<!-- //      Stylesheets Files       // -->
<!-- ////////////////////////////////// -->
<link rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" href="css/media.css"/>
<link rel="stylesheet" href="css/revolution.css" media="screen"/>
<link rel="stylesheet" href="css/media-slideshow.css" media="screen"/>
<link rel="stylesheet" href="css/noscript.css" media="screen,all" id="noscript"/>

<!-- ////////////////////////////////// -->
<!-- //     Google Webfont Files     // -->
<!-- ////////////////////////////////// -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,700,300italic,400italic,700italic"/>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:300,400,700,900"/>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans"/>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Rationale"/>

<!-- ////////////////////////////////// -->
<!-- //        Favicon Files         // -->
<!-- ////////////////////////////////// -->
<link rel="shortcut icon" href="images/favicon.ico"/>

<!-- ////////////////////////////////// -->
<!-- //      Javascript Files        // -->
<!-- ////////////////////////////////// -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="js/jquery.easing-1.3.min.js"></script>
<script src="js/masonry.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/jquery.li-scroller.1.0.js"></script>
<script src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script src="js/jquery.themepunch.plugins.min.js"></script>
<script src="js/jquery.themepunch.revolution.min.js"></script>
<script src="js/mediaelement-and-player.min.js"></script>
<script src="js/jquery.fancybox.js?v=2.0.6"></script>
<script src="js/jquery.fancybox-media.js?v=1.0.3"></script>
<script src="js/jquery.donutchart.js"></script>
<script src="js/jflickrfeed.min.js"></script>
<script src="js/jquery.twitter.js"></script>
<script src="js/accordion-functions.js" ></script>
<script src="js/theme-functions.js"></script>
<script src="js/jquery.retina.js"></script>
<script>
$(document).ready(function() {
//Retina Image
$('img.retina').retina('@2x');

//Slideshow
$('.banner').revolution({
delay:9000,
startwidth:1040,
startheight:463,
hideThumbs:0,
navigationType:"none",					// bullet, thumb, none
navigationArrows:"solo",				// nexttobullets, solo (old name verticalcentered), none
navigationStyle:"navbar",				// round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom
navigationHAlign:"center",				// Vertical Align top,center,bottom
navigationVAlign:"bottom",				// Horizontal Align left,center,right
navigationHOffset:0,
navigationVOffset:0,
soloArrowLeftHalign:"left",
soloArrowLeftValign:"center",
soloArrowLeftHOffset:1040,
soloArrowLeftVOffset:259,
soloArrowRightHalign:"right",
soloArrowRightValign:"center",
soloArrowRightHOffset:90,
soloArrowRightVOffset:259,
touchenabled:"on",						// Enable Swipe Function : on/off
onHoverStop:"off",						// Stop Banner Timet at Hover on Slide on/off
stopAtSlide:-1,							// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
stopAfterLoops:-1,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic
hideCaptionAtLimit:0,					// It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
hideAllCaptionAtLilmit:0,				// Hide all The Captions if Width of Browser is less then this value
hideSliderAtLimit:0,					// Hide the whole slider, and stop also functions if Width of Browser is less than this value
shadow:0,								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows  (No Shadow in Fullwidth Version !)
fullWidth:"off"							// Turns On or Off the Fullwidth Image Centering in FullWidth Modus
})

});	
</script>
<script>
$(window).load(function() {
//Masonry
$('#pf-wrapper2').masonry({
itemSelector : '.item',
columnWidth: 1,
});	

});
</script>

<!-- IE Fix for HTML5 Tags -->
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>
