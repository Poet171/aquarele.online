<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$CurDir = $APPLICATION->GetCurDir();
$CurUri = $APPLICATION->GetCurUri();
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<head>
    <?
    use Bitrix\Main\Page\Asset;
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/style.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/media.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/revolution.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/media-slideshow.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/noscript.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/icons.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/grid.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/camera.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/base.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/audio.css');
    Asset::getInstance()->addString("<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>");
    Asset::getInstance()->addString("<link href='ttp://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>");
    Asset::getInstance()->addString("<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>");
    Asset::getInstance()->addString("<link href='http://fonts.googleapis.com/css?family=Rationale' rel='stylesheet' type='text/css'>");
    Asset::getInstance()->addString("<link href='http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js' type='text/javascript'>");
    Asset::getInstance()->addString("<link href='https://aquarele.online/local//templates/main_werstka/images/logo.png' type='text/image'>");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.easing-1.3.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/masonry.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/myscripts.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/modernizr.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/superfish.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.parallax-1.1.3.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.li-scroller.1.0.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.carouFredSel-6.2.1-packed.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.themepunch.plugins.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.themepunch.revolution.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/mediaelement-and-player.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.fancybox.js?v=2.0.6');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.fancybox-media.js?v=1.0.3');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.donutchart.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jflickrfeed.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.twitter.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/accordion-functions.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/theme-functions.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.retina.js');
    $APPLICATION->ShowHead();
    ?>
    <meta charset="utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="images/favicon.ico"/>
    <title><?$APPLICATION ->ShowTitle() ?></title>

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

    <?$APPLICATION->ShowPanel();?>
</head>
<body>
<div id="box-wrapper">
    <!-- header start here -->
    <header>

        <!-- top info start here -->
        <div id="top-info">
            <div class="row">
                <div class="twelve column top-desc">
                    <ul>
                        <li class="tablet-hide"><i class="icon-checkin"></i><span>25 Silver Avenue Jakarta, JKT, 12345. IND</span></li>
                        <li><i class="icon-phonealt"></i><span>(111) 234 5678</span></li>
                        <li class="mobile-hide"><i class="icon-envelope"></i><span>mail@yourdomain.com</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- top info end here -->

        <div class="row">
            <div class="twelve column">

                <div id="left-header">
                    <!-- logo start here -->
                    <div id="logo">
                        <a href="index.html"><img src="local/templates/main_werstka/images/logo.png" alt="main-logo" class="retina"/></a>
                    </div>
                    <!-- logo end here -->
                </div>

                <div id="right-header">
                    <div id="mainmenu-wrapper">
                        <div class="left-menu">

                            <!-- navigation start here -->
                            <nav id="mainmenu">
                                <ul id="menu">
                                    <li class="dropdown selected"><a href="index.html">Home</a>
                                        <ul>
                                            <li><a href="index-magazine.html">home magazine</a></li>
                                            <li><a href="index-portfolio.html">home portfolio</a></li>
                                            <li><a href="index-landing.html">home landing</a></li>
                                            <li><a href="index-blog.html">home bloging</a></li>
                                            <li><a href="index-store.html">home store</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Elements</a>
                                        <ul>
                                            <li><a href="column.html">column</a></li>
                                            <li><a href="tables.html">tables</a></li>
                                            <li><a href="button-list.html">button &amp; list</a></li>
                                            <li><a href="icons.html">icon list</a></li>
                                            <li><a href="icon-use.html">icon use</a></li>
                                            <li><a href="typography.html">typography</a></li>
                                            <li><a href="note-promo.html">note &amp; promo box</a></li>
                                            <li><a href="tab-accordion.html">tab &amp; accordion</a></li>
                                            <li><a href="alert-progress.html">alert &amp; progress</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Pages</a>
                                        <ul>
                                            <li><a href="about.html">about us</a></li>
                                            <li><a href="services.html">our services</a></li>
                                            <li><a href="pricing-plan.html">pricing plan</a></li>
                                            <li><a href="testimonials.html">client testimonials</a></li>
                                            <li><a href="team.html">our team</a></li>
                                            <li><a href="sitemap.html">lightning sitemap</a></li>
                                            <li><a href="faq.html">faq page</a></li>
                                            <li><a href="404.html">404 error</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Portfolio</a>
                                        <ul>
                                            <li><a href="portfolio-2col.html">portfolio 2 column</a></li>
                                            <li><a href="portfolio-3col.html">portfolio 3 column</a></li>
                                            <li><a href="portfolio-4col.html">portfolio 4 column</a>
                                                <ul>
                                                    <li><a href="#">dropdown level 2</a></li>
                                                    <li><a href="#">dropdown level 2</a></li>
                                                    <li><a href="#">dropdown level 2</a>
                                                        <ul>
                                                            <li><a href="#">dropdown level 3</a></li>
                                                            <li><a href="#">dropdown level 3</a></li>
                                                            <li><a href="#">dropdown level 3</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                            <!-- navigation end here -->

                        </div>

                        <div class="right-menu" id="top-search">
                            <a class="trigger" href="#"><i class="icon-search"></i></a>
                            <div class="search-panel">
                                <ul>
                                    <li>
                                        <form id="search" action="#" method="get">
                                            <fieldset class="search-fieldset">
                                                <input type="text" id="search-form" value="type and hit enter" onblur="if (this.value == ''){this.value = 'type and hit enter'; }" onfocus="if (this.value == 'type and hit enter') {this.value = ''; }" />
                                            </fieldset>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div id="slogan-wrapper" class="text-center">
                        <h1 class="smallmargin-bottom">Hi! welcome to Lightning digital agency.</h1>
                        <p class="lead mobile-hide">We Craft Products, Experiences &amp; Platforms That Transfrom Brands.</p>
                    </div>

                </div>

            </div>
        </div>

    </header>
    <!-- header end here -->

