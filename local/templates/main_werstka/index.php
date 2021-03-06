<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Заголовок страницы"); ?>
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
                            <a href="index.html"><img src="images/logo.png" alt="main-logo" class="retina"/></a>
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
        
        <!-- slideshow start here -->
        <section id="slideshow-container">
            <div class="banner">            
                
                <ul>      
                    <!-- slide 1 -->
                    <li data-transition="papercut">
                        <img src="images/slideshow/sld_imgbg1.jpg" alt="">
                        <div class="caption general_caption fade" data-x="-65" data-y="7" data-speed="400" data-start="700" data-easing="easeOutExpo" data-endeasing="easeInExpo"><img src="images/slideshow/object_tree1.png" alt=""></div>                       
                        <div class="caption general_caption fade" data-x="200" data-y="57" data-speed="400" data-start="100" data-easing="easeOutExpo" data-endeasing="easeInExpo"><img src="images/slideshow/object_tree3.png" alt=""></div>
                        <div class="caption general_caption lfb" data-x="85" data-y="79" data-speed="6000" data-endspeed="1000" data-start="1500" data-end="8000" data-easing="easeOutElastic" data-endeasing="easeInExpo">
                        	<img src="images/slideshow/object_pad1.png" alt="">
                        </div>
                        <div class="caption general_caption fade" data-x="-5" data-y="188" data-speed="400" data-start="1100" data-easing="easeOutExpo" data-endeasing="easeInExpo"><img src="images/slideshow/object_tree2.png" alt=""></div>
                        <div class="caption general_caption fade" data-x="805" data-y="177" data-speed="400" data-start="700" data-easing="easeOutExpo" data-endeasing="easeInExpo"><img src="images/slideshow/object_tree4.png" alt=""></div>                    
                        <div class="caption general_caption fade" data-x="955" data-y="267" data-speed="400" data-start="1100" data-easing="easeOutExpo" data-endeasing="easeInExpo"><img src="images/slideshow/object_tree5.png" alt=""></div>
                        
                        <div class="caption general_caption lfb ltb home-media1"  data-x="480" data-y="173" data-speed="900" data-endspeed="900" data-start="550" data-end="8500" data-easing="easeOutExpo" data-endeasing="easeInExpo">
                        	<h1 class="smallmargin-bottom">Responsive Design</h1>
                            <p class="lead">Tablet + Mobile Ready</p>
                        </div>                        
                        <div class="caption general_caption lfb ltb home-media2"  data-x="482" data-y="270" data-speed="1400" data-endspeed="900" data-start="550" data-end="8500" data-easing="easeOutExpo" data-endeasing="easeInExpo">
                        	<div class="slide-separator"></div>
                        </div>
                        <div class="caption general_caption lfb ltb "  data-x="480" data-y="290" data-speed="900" data-endspeed="1800" data-start="800" data-end="8500" data-easing="easeOutExpo" data-endeasing="easeInExpo">
                            <p>Excepteur sinta occaecat cupidatat none proident <br/>sunt in culpa qui officia deserunt mollit anim id est</p>
                        </div>
                        <div class="caption general_caption lfb ltb"  data-x="480" data-y="345" data-speed="800" data-endspeed="2000" data-start="1300" data-end="8500" data-easing="easeOutExpo" data-endeasing="easeInExpo">
                            <a href="#" class="button-plain small orange">Learn more <span class="plain-arrow">&gt;</span></a>
                        </div>
                        
                        <div class="caption general_caption lft" data-x="855" data-y="25" data-speed="8000" data-endspeed="1000" data-start="100" data-end="8000" data-easing="easeOutElastic" data-endeasing="easeInExpo">
                        	<img src="images/slideshow/object_bird1.png" alt="">
                        </div>
                        <div class="caption general_caption lft" data-x="555" data-y="90" data-speed="8000" data-endspeed="1000" data-start="800" data-end="8400" data-easing="easeOutElastic" data-endeasing="easeInExpo">
                        	<img src="images/slideshow/object_bird2.png" alt="">
                        </div>
                        <div class="caption general_caption lft" data-x="795" data-y="210" data-speed="8000" data-endspeed="1000" data-start="600" data-end="8800" data-easing="easeOutElastic" data-endeasing="easeInExpo">
                        	<img src="images/slideshow/object_bird3.png" alt="">
                        </div>
                    </li>
                    
                    <!-- slide 2 -->
                    <li data-transition="papercut">
                        <img src="images/slideshow/sld_imgbg1.jpg" alt="">
                        <div class="caption general_caption fade" data-x="-20" data-y="187" data-speed="400" data-start="700" data-easing="easeOutExpo" data-endeasing="easeInExpo"><img src="images/slideshow/object_tree7.png" alt=""></div>                     
                        <div class="caption general_caption fade" data-x="780" data-y="37" data-speed="400" data-start="100" data-easing="easeOutExpo" data-endeasing="easeInExpo"><img src="images/slideshow/object_tree9.png" alt=""></div>
                        <div class="caption general_caption lft" data-x="620" data-y="10" data-speed="6000" data-endspeed="1000" data-start="1000" data-end="8000" data-easing="easeOutElastic" data-endeasing="easeInExpo">
                        	<img src="images/slideshow/object_poster1.png" alt="">
                        </div>
                        <div class="caption general_caption fade" data-x="-75" data-y="305" data-speed="400" data-start="1100" data-easing="easeOutExpo" data-endeasing="easeInExpo"><img src="images/slideshow/object_tree6.png" alt=""></div>
                        <div class="caption general_caption fade" data-x="538" data-y="225" data-speed="400" data-start="700" data-easing="easeOutExpo" data-endeasing="easeInExpo"><img src="images/slideshow/object_tree8.png" alt=""></div>  
                        
                        <div class="caption general_caption lfb ltb home-media1"  data-x="219" data-y="173" data-speed="900" data-endspeed="900" data-start="550" data-end="8500" data-easing="easeOutBack" data-endeasing="easeInBack">
                        	<h1 class="smallmargin-bottom">Responsive Design</h1>
                            <p class="lead">Tablet + Mobile Ready</p>
                        </div>                        
                        <div class="caption general_caption lfb ltb home-media2"  data-x="221" data-y="270" data-speed="1400" data-endspeed="900" data-start="550" data-end="8500" data-easing="easeOutBack" data-endeasing="easeInBack">
                        	<div class="slide-separator"></div>
                        </div>
                        <div class="caption general_caption lfb ltb "  data-x="219" data-y="290" data-speed="900" data-endspeed="1800" data-start="800" data-end="8500" data-easing="easeOutBack" data-endeasing="easeInBack">
                            <p>Excepteur sinta occaecat cupidatat none proident <br/>sunt in culpa qui officia deserunt mollit anim id est</p>
                        </div>
                       <div class="caption general_caption lfb ltb"  data-x="219" data-y="345" data-speed="800" data-endspeed="2000" data-start="1300" data-end="8500" data-easing="easeOutBack" data-endeasing="easeInBack">
                            <a href="#" class="button-plain small orange">Learn more <span class="plain-arrow">&gt;</span></a>
                        </div>
                        
                        <div class="caption general_caption lft" data-x="555" data-y="155" data-speed="8000" data-endspeed="1000" data-start="100" data-end="8000" data-easing="easeOutElastic" data-endeasing="easeInExpo">
                        	<img src="images/slideshow/object_bird4.png" alt="">
                        </div>
                        <div class="caption general_caption lft" data-x="85" data-y="90" data-speed="8000" data-endspeed="1000" data-start="800" data-end="8400" data-easing="easeOutElastic" data-endeasing="easeInExpo">
                        	<img src="images/slideshow/object_bird2.png" alt="">
                        </div>
                        <div class="caption general_caption lft" data-x="940" data-y="40" data-speed="8000" data-endspeed="1000" data-start="600" data-end="8800" data-easing="easeOutElastic" data-endeasing="easeInExpo">
                        	<img src="images/slideshow/object_bird3.png" alt="">
                        </div>
                    </li>
                    
                    <!-- slide 3 -->
                    <li data-transition="papercut">
                        <img src="images/slideshow/sld_imgbg1.jpg" alt="">  
                        <div class="caption general_caption fade" data-x="110" data-y="195" data-speed="400" data-start="700" data-easing="easeOutExpo" data-endeasing="easeInExpo"><img src="images/slideshow/object_tree11.png" alt=""></div>                 
                        <div class="caption general_caption fade" data-x="-45" data-y="112" data-speed="400" data-start="100" data-easing="easeOutExpo" data-endeasing="easeInExpo"><img src="images/slideshow/object_tree10.png" alt=""></div>              
                        <div class="caption general_caption fade" data-x="850" data-y="70" data-speed="400" data-start="400" data-easing="easeOutExpo" data-endeasing="easeInExpo"><img src="images/slideshow/object_tree13.png" alt=""></div> 
                        <div class="caption general_caption fade" data-x="747" data-y="162" data-speed="400" data-start="1100" data-easing="easeOutExpo" data-endeasing="easeInExpo"><img src="images/slideshow/object_tree12.png" alt=""></div>                   
                        <div class="caption general_caption fade" data-x="1015" data-y="265" data-speed="400" data-start="1400" data-easing="easeOutExpo" data-endeasing="easeInExpo"><img src="images/slideshow/object_tree14.png" alt=""></div> 
                        
                        <div class="caption general_caption lfb ltb text-center home-media1"  data-x="365" data-y="173" data-speed="900" data-endspeed="900" data-start="550" data-end="8500" data-easing="easeOutBack" data-endeasing="easeInBack">
                        	<h1 class="smallmargin-bottom">Responsive Design</h1>
                            <p class="lead">Tablet + Mobile Ready</p>
                        </div>                        
                        <div class="caption general_caption lfb ltb home-media2"  data-x="482" data-y="270" data-speed="1400" data-endspeed="900" data-start="550" data-end="8500" data-easing="easeOutBack" data-endeasing="easeInBack">
                        	<div class="slide-separator"></div>
                        </div>
                        <div class="caption general_caption lfb ltb text-center"  data-x="355" data-y="290" data-speed="900" data-endspeed="1800" data-start="800" data-end="8500" data-easing="easeOutBack" data-endeasing="easeInBack">
                            <p>Excepteur sinta occaecat cupidatat none proident sunt in<br/>culpa qui officia deserunt mollit anim id est</p>
                        </div>
                       <div class="caption general_caption lfb ltb"  data-x="480" data-y="345" data-speed="800" data-endspeed="2000" data-start="1300" data-end="8500" data-easing="easeOutBack" data-endeasing="easeInBack">
                            <a href="#" class="button-plain small orange">Learn more <span class="plain-arrow">&gt;</span></a>
                        </div>
                        
                        <div class="caption general_caption lft" data-x="350" data-y="25" data-speed="8000" data-endspeed="1000" data-start="100" data-end="8000" data-easing="easeOutElastic" data-endeasing="easeInExpo">
                        	<img src="images/slideshow/object_bird4.png" alt="">
                        </div>
                        <div class="caption general_caption lft" data-x="100" data-y="70" data-speed="8000" data-endspeed="1000" data-start="800" data-end="8400" data-easing="easeOutElastic" data-endeasing="easeInExpo">
                        	<img src="images/slideshow/object_bird2.png" alt="">
                        </div>
                        <div class="caption general_caption lft" data-x="615" data-y="105" data-speed="8000" data-endspeed="1000" data-start="600" data-end="8800" data-easing="easeOutElastic" data-endeasing="easeInExpo">
                        	<img src="images/slideshow/object_bird2.png" alt="">
                        </div>
                        <div class="caption general_caption lft" data-x="850" data-y="40" data-speed="8000" data-endspeed="1000" data-start="600" data-end="8800" data-easing="easeOutElastic" data-endeasing="easeInExpo">
                        	<img src="images/slideshow/object_bird5.png" alt="">
                        </div>
                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom"></div>
                    
            </div>    	
        </section>
        <!-- slideshow end here -->      
          
        <!-- content section start here -->
        <section class="content-wrapper">    	
            <div class="row">        
                <div class="six column margin-top">
                	<h3 class="margin-bottom"><span class="highlight">Simple, intuitive, and focus.</span></h3>
                    <p class="lead">At vero eos accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
                    
                    <ul class="check">
                      <li>Reprehenderit qui in ea voluptate velit esse quam nihil molestiae</li>                    
                      <li>Molestias excepturi sint occaecati cupiditate non provident</li>
                      <li>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus</li>
                      <li>Voluptatibus maiores alias consequatur aut perferendis doloribus</li>
                    </ul>
                </div>
                
                <div class="six column margin-top">
                	<ul class="client-box">
                        <li><a href="#"><img src="images/sample_images/client1.png" alt="" class="retina" /></a></li>
                        <li><a href="#"><img src="images/sample_images/client2.png" alt="" class="retina" /></a></li>
                        <li><a href="#"><img src="images/sample_images/client3.png" alt="" class="retina" /></a></li>
                        <li><a href="#"><img src="images/sample_images/client4.png" alt="" class="retina" /></a></li>
                        <li><a href="#"><img src="images/sample_images/client5.png" alt="" class="retina" /></a></li>
                        <li><a href="#"><img src="images/sample_images/client6.png" alt="" class="retina" /></a></li>
                        <li><a href="#"><img src="images/sample_images/client7.png" alt="" class="retina" /></a></li>
                        <li><a href="#"><img src="images/sample_images/client8.png" alt="" class="retina" /></a></li>
                        <li><a href="#"><img src="images/sample_images/client9.png" alt="" class="retina" /></a></li>              
                    </ul>
                </div>
            </div>            	                 
        </section>
        <!-- content section end here --> 
        
        <!-- featured column section start here -->
        <section class="featured-column bg-border2">
            <div class="row">
            	<div class="twelve column text-center smallmargin-bottom2">
            		<h3>The Extra Added Features</h3>
                </div>
            
                <div class="three column animated-column text-center mobile-two">
                    <div class="circle-border small">                           
                        <i class="icon-slidersasc"></i>
                    </div>    
                    <h4>Flexibel</h4> 
                    <p>Eiusmod temporit al consectetur nostrum empromi exercitationem ullamajo corporis suscipit fugiat</p>
                </div>            
                <div class="three column animated-column text-center mobile-two">
                    <div class="circle-border small">                           
                        <i class="icon-iphone"></i>
                    </div>    
                    <h4>Responsive</h4> 
                    <p>Eiusmod temporit al consectetur nostrum empromi exercitationem ullamajo corporis suscipit fugiat</p>
                </div>            
                <div class="three column animated-column text-center mobile-two">
                    <div class="circle-border small">                           
                        <i class="icon-wallet"></i>
                    </div>    
                    <h4>Efficient</h4> 
                    <p>Eiusmod temporit al consectetur nostrum empromi exercitationem ullamajo corporis suscipit fugiat</p>
                </div>            
                <div class="three column animated-column text-center mobile-two">
                    <div class="circle-border small">                           
                        <i class="icon-terminal"></i>
                    </div>    
                    <h4>Semantic</h4> 
                    <p>Eiusmod temporit al consectetur nostrum empromi exercitationem ullamajo corporis suscipit fugiat</p>
                </div>
            </div>   
        </section>
        <!-- featured column section end here -->
        
        <!-- content section start here -->
        <section class="content-wrapper">
        	<div class="row">                
                <div class="three column margin-top">
                	<h3 class="smallmargin-bottom2">What we do?</h3>
                    <p class="lead">Accusamus odio dignissimos</p>
                    <div class="slide-separator"></div>
                    <p>Duis aute irure dolor in reprehenderit in occaecat cupidatat non proident sunter fugiat nulla pariatur excepteur sint culpa voluptate velit esse cillum dolore officia</p>
                    <a href="#" class="button-plain small orange">Learn more <span class="plain-arrow">&gt;</span></a>
                </div>
                
                <div class="nine column">         
                	<div id="pf-wrapper2" class="masonry js-masonry">
                        <div class="item w2 caption-style2">
                            <figure>
                                <img src="images/portfolio_thumb/p-alt1.jpg" alt="" />
                                <figcaption>
                                    <h6><a href="#">Image title</a></h6>
                                    <p>Short description here</p>
                                    <a class="preview fancybox" href="images/portfolio_big/p1.jpg" data-fancybox-group="gallery" title="Some of project description here"><i class="icon-search"></i></a>
                                    <a class="permalink" href="portfolio-single.html"><i class="icon-link"></i></a>
                                </figcaption>
                            </figure>
                        </div>
                        
                        <div class="item caption-style2">
                            <figure>
                                <img src="images/portfolio_thumb/p-alt2.jpg" alt="" />
                                <figcaption>
                                	<h6><a href="#">Image title</a></h6>
                                    <p>Short description here</p>
                                    <a class="preview fancybox" href="images/portfolio_big/p2.jpg" data-fancybox-group="gallery" title="Some of project description here"><i class="icon-search"></i></a>
                                    <a class="permalink" href="portfolio-single.html"><i class="icon-link"></i></a>
                                </figcaption>
                            </figure>
                        </div>
                        
                        <div class="item caption-style2">
                            <figure>
                                <img src="images/portfolio_thumb/p-alt3.jpg" alt="" />
                                <figcaption>
                                	<h6><a href="#">Image title</a></h6>
                                    <p>Short description here</p>
                                    <a class="preview fancybox" href="images/portfolio_big/p3.jpg" data-fancybox-group="gallery" title="Some of project description here"><i class="icon-search"></i></a>
                                    <a class="permalink" href="portfolio-single.html"><i class="icon-link"></i></a>
                                </figcaption>
                            </figure>
                        </div>
                        
                        <div class="item w3 caption-style2">
                            <figure>
                                <img src="images/portfolio_thumb/p-alt4.jpg" alt="" />
                                <figcaption>
                                    <h6><a href="#">Image title</a></h6>
                                    <span>Short description here</span>
                                    <a class="preview fancybox" href="images/portfolio_big/p4.jpg" data-fancybox-group="gallery" title="Some of project description here"><i class="icon-search"></i></a>
                                    <a class="permalink" href="portfolio-single.html"><i class="icon-link"></i></a>
                                </figcaption>
                            </figure>
                        </div>
                        
                        <div class="item caption-style2">
                            <figure>
                                <img src="images/portfolio_thumb/p-alt5.jpg" alt="" />
                                <figcaption>
                                	<h6><a href="#">Image title</a></h6>
                                    <p>Short description here</p>
                                    <a class="preview fancybox" href="images/portfolio_big/p5.jpg" data-fancybox-group="gallery" title="Some of project description here"><i class="icon-search"></i></a>
                                    <a class="permalink" href="portfolio-single.html"><i class="icon-link"></i></a>
                                </figcaption>
                            </figure>
                        </div>
                        
                        <div class="item w3 caption-style2">
                            <figure>
                                <img src="images/portfolio_thumb/p-alt6.jpg" alt="" />
                                <figcaption>
                                    <h6><a href="#">Image title</a></h6>
                                    <p>Short description here</p>
                                    <a class="preview fancybox" href="images/portfolio_big/p6.jpg" data-fancybox-group="gallery" title="Some of project description here"><i class="icon-search"></i></a>
                                    <a class="permalink" href="portfolio-single.html"><i class="icon-link"></i></a>
                                </figcaption>
                            </figure>
                        </div>
                        
                        <div class="item caption-style2">
                            <figure>
                                <img src="images/portfolio_thumb/p-alt7.jpg" alt="" />
                                <figcaption>
                                	<h6><a href="#">Image title</a></h6>
                                    <p>Short description here</p>
                                    <a class="preview fancybox" href="images/portfolio_big/p7.jpg" data-fancybox-group="gallery" title="Some of project description here"><i class="icon-search"></i></a>
                                    <a class="permalink" href="portfolio-single.html"><i class="icon-link"></i></a>
                                </figcaption>
                            </figure>
                        </div>
                        
                        <div class="item caption-style2">
                            <figure>
                                <img src="images/portfolio_thumb/p-alt8.jpg" alt="" />
                                <figcaption>
                                	<h6><a href="#">Image title</a></h6>
                                    <p>Short description here</p>
                                    <a class="preview fancybox" href="images/portfolio_big/p8.jpg" data-fancybox-group="gallery" title="Some of project description here"><i class="icon-search"></i></a>
                                    <a class="permalink" href="portfolio-single.html"><i class="icon-link"></i></a>
                                </figcaption>
                            </figure>
                        </div>
                        
                        <div class="item caption-style2">
                            <figure>
                                <img src="images/portfolio_thumb/p-alt9.jpg" alt="" />
                                <figcaption>
                                	<h6><a href="#">Image title</a></h6>
                                    <p>Short description here</p>
                                    <a class="preview fancybox" href="images/portfolio_big/p9.jpg" data-fancybox-group="gallery" title="Some of project description here"><i class="icon-search"></i></a>
                                    <a class="permalink" href="portfolio-single.html"><i class="icon-link"></i></a>
                                </figcaption>
                            </figure>
                        </div>                                                                
                    </div>
                </div>
            </div>
        </section>
        <!-- content section end here -->       
        
<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>