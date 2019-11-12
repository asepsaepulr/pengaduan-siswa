<!DOCTYPE html>
<html>

<!-- Mirrored from azim.commonsupport.com/SeoArena/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Jul 2018 06:57:36 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PENSISassalaam | Responsive HTML 5 Template</title>

    <!-- Stylesheets -->
    <link href="{{ asset('/frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/frontend/css/responsive.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('/frontend/images/service/4.png') }}" type="image/x-icon">

</head>

<!-- page wrapper -->
<body class="page-wrapper">

    <!-- .preloader -->
    <div class="preloader"></div>

    
    <!-- main header area -->
    <header class="main-header">
        <div class="theme_menu stricky">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="logo-box">
                            <a href="index-2.html"><figure><img src="{{ asset('/frontend/images/home/logo.png') }}" alt=""></figure></a>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-12 col-xs-12">
                        <div class="menu-area">
                            <nav class="main-menu"> <!-- main-menu -->
                                <div class="navbar-header">     
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class="current"><a href="index-2.html">Home</a></li>
                                        <li class="dropdown"><a href="#">About Us</a>
                                            <ul class="submenu">
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="error.html">Error Page</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="service.html">Services</a></li>
                                        <li class="dropdown"><a href="#">Case Studies</a>
                                            <ul class="submenu">
                                                <li><a href="case-studies.html">Case Studies</a></li>
                                                <li><a href="case-details.html">Case Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Blog</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">News Blog</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                    </ul>


                                    <!-- mobile menu -->
                                    <ul class="mobile-menu clearfix">
                                        <li class="current"><a href="index-2.html">Home</a></li>
                                        <li class="dropdown"><a href="#">About Us</a>
                                            <ul>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="error.html">Error Page</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="service.html">Services</a></li>
                                        <li class="dropdown"><a href="#">Case Studies</a>
                                            <ul>
                                                <li><a href="case-studies.html">Case Studies</a></li>
                                                <li><a href="case-details.html">Case Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Blog</a>
                                            <ul>
                                                <li><a href="blog.html">News Blog</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                    </ul>
                                </div>
                            </nav>
                            <div class="info-box">
                                <div class="search-box-area">
                                    <div class="search-toggle"><i class="fa fa-search"></i></div>
                                    <div class="search-box">
                                        <form method="post" action="http://azim.commonsupport.com/SeoArena/index.html">
                                            <div class="form-group">
                                                <input type="search" name="search" placeholder="Search Here" required>
                                                <button type="submit"><i class="fa fa-search"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!--  <a href="/login" class="btn-one">LOGIN</a> -->
                                @if (Route::has('login'))
                                <div class="top-right links">
                                    <div class="btn-box">
                                        @auth
                                        <a href="/home" class="btn-one">Home</a>
                                        @else

                                        <a href="/login" class="btn-one">Login</a>
                                        @endauth
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- end main header area -->


    <!-- Banner -->
    <div id="banner">
        <div class="rev_slider_wrapper">
            <!-- START REVOLUTION SLIDER 5.0 auto mode -->
            <div id="main_slider" class="rev_slider" data-version="5.0">
                <ul>
                    
                    <!-- SLIDE1  -->
                    <li data-index='rs-377' data-transition='curtain-1' data-slotamount='1' data-easein='default' data-easeout='default' data-masterspeed='default' data-thumb='images/slider/1.jpg' data-rotate='0' data-saveperformance='off' data-title='Business Solutions' data-description='' >
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('/frontend/images/slider/1.jpg') }}"  alt="image"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-3" 
                        data-x="['right','right','right','right']" data-hoffset="['-40','-40','-40','-40']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['37','37','37','37']"
                        data-width="none"
                        data-height="none"
                        data-transform_idle="o:1;"
                        data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                        data-start="1000"
                        data-splitout="none" 
                        data-responsive_offset="on" 
                        data-elementdelay="0.05" 
                        style="z-index: 5;">
                        <img src="{{ asset('/frontend/images/slider/5.png') }}" alt="">
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme" 
                    data-x="['left','left','left','left']" data-hoffset="['0','30','30','15']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['-50','-50','-50','-100']"
                    data-width="none"
                    data-height="none"
                    data-transform_idle="o:1;"
                    data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                    data-start="1500"
                    data-splitout="none" 
                    data-responsive_offset="on" 
                    data-elementdelay="0.05" 
                    style="z-index: 5;">
                    <h1>Follow IG Saya  <br /> @aldohc88</h1>
                </div>


                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme" 
                data-x="['left','left','left','left']" data-hoffset="['0','30','30','15']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['59','59','59','10']" 
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:0px;y:[100%];" 
                data-mask_out="x:inherit;y:inherit;" 
                data-start="2000" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on" 
                style="z-index: 7; white-space: nowrap;">
                <div class="text"><p>We are fully committed and focused on the development<br />of your business,
                So you have more sales and stay on top!</p></div>
            </div>

            <!-- LAYER NR. 4 -->
            <div class="tp-caption tp-resizeme rs-parallaxlevel-2" 
            data-x="['middle','middle','middle','middle']" data-hoffset="['-80','00','-80','-80']" 
            data-y="['middle','middle','middle','middle']" data-voffset="['-80','-80','-80','-80']" 
            data-width="none"
            data-height="none"
            data-whitespace="nowrap"
            data-transform_idle="o:1;"
            
            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
            data-mask_in="x:0px;y:[100%];" 
            data-mask_out="x:inherit;y:inherit;" 
            data-start="2500" 
            data-splitin="none" 
            data-splitout="none" 
            data-responsive_offset="on" 
            style="z-index: 6; white-space: nowrap;">
            <img src="{{ asset('/frontend/images/slider/4.png') }}" alt="">
        </div>


        <!-- LAYER NR. 5 -->
        <div class="tp-caption tp-resizeme" 
        data-x="['left','left','left','left']" data-hoffset="['0','30','30','15']" 
        data-y="['middle','middle','middle','middle']" data-voffset="['152','152','152','100']" 
        data-width="none"
        data-height="none"
        data-whitespace="nowrap"
        data-transform_idle="o:1;"
        
        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
        data-mask_in="x:0px;y:[100%];" 
        data-mask_out="x:inherit;y:inherit;" 
        data-start="2500" 
        data-splitin="none" 
        data-splitout="none" 
        data-responsive_offset="on" 
        style="z-index: 6; white-space: nowrap;">
        <div class="tp-video">
            <div class="button"><a href="#" class="btn-one">Calculate Service</a></div>
            <div class="video-gallery">
                <div class="icon-holder">
                    <div class="icon">
                        <a class="html5lightbox" title="Video" href="https://www.youtube.com/watch?v=Z7Rudw_iUWs">
                            <i class="fa fa-play-circle"></i>
                            Watch The Intro
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</li>



<!-- SLIDE2  -->
<li data-index="rs-18" data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="{{ asset('/frontend/images/slider/2.jpg') }}"  data-rotate="0"  data-saveperformance="off"  data-title="Successful Careers" data-description="">
    <!-- MAIN IMAGE -->
    <img src="{{ asset('/frontend/images/slider/2.jpg') }}"  alt=""  data-bgposition="top center" class="rev-slidebg" data-no-retina>


    <!-- LAYER NR. 1 -->
    <div class="tp-caption tp-resizeme rs-parallaxlevel-3" 
    data-x="['right','right','right','right']" data-hoffset="['-40','-40','-40','-40']" 
    data-y="['middle','middle','middle','middle']" data-voffset="['37','37','37','37']"
    data-width="none"
    data-height="none"
    data-transform_idle="o:1;"
    data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
    data-start="1000"
    data-splitout="none" 
    data-responsive_offset="on" 
    data-elementdelay="0.05" 
    style="z-index: 5;">
    <img src="images/slider/5.png" alt="">
</div>

<!-- LAYER NR. 2 -->
<div class="tp-caption tp-resizeme" 
data-x="['left','left','left','left']" data-hoffset="['0','0','0','15']" 
data-y="['middle','middle','middle','middle']" data-voffset="['-50','-50','-50','-100']"
data-width="none"
data-height="none"
data-transform_idle="o:1;"
data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
data-start="1500"
data-splitout="none" 
data-responsive_offset="on" 
data-elementdelay="0.05" 
style="z-index: 5;">
<h1>Empowering Your <br /> Website SEO Ranking</h1>
</div>


<!-- LAYER NR. 3 -->
<div class="tp-caption tp-resizeme" 
data-x="['left','left','left','left']" data-hoffset="['0','0','0','15']" 
data-y="['middle','middle','middle','middle']" data-voffset="['59','59','59','10']" 
data-width="none"
data-height="none"
data-whitespace="nowrap"
data-transform_idle="o:1;"

data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
data-mask_in="x:0px;y:[100%];" 
data-mask_out="x:inherit;y:inherit;" 
data-start="2000" 
data-splitin="none" 
data-splitout="none" 
data-responsive_offset="on" 
style="z-index: 7; white-space: nowrap;">
<div class="text"><p>We are fully committed and focused on the development<br />of your business,
So you have more sales and stay on top!</p></div>
</div>

<!-- LAYER NR. 4 -->
<div class="tp-caption tp-resizeme rs-parallaxlevel-2" 
data-x="['middle','middle','middle','middle']" data-hoffset="['-80','00','-80','-80']" 
data-y="['middle','middle','middle','middle']" data-voffset="['-80','-80','-80','-80']" 
data-width="none"
data-height="none"
data-whitespace="nowrap"
data-transform_idle="o:1;"

data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
data-mask_in="x:0px;y:[100%];" 
data-mask_out="x:inherit;y:inherit;" 
data-start="2500" 
data-splitin="none" 
data-splitout="none" 
data-responsive_offset="on" 
style="z-index: 6; white-space: nowrap;">
<img src="{{ asset('/frontend/images/slider/4.png') }}" alt="">
</div>


<!-- LAYER NR. 5 -->
<div class="tp-caption tp-resizeme" 
data-x="['left','left','left','left']" data-hoffset="['0','0','0','15']" 
data-y="['middle','middle','middle','middle']" data-voffset="['152','152','152','100']" 
data-width="none"
data-height="none"
data-whitespace="nowrap"
data-transform_idle="o:1;"

data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
data-mask_in="x:0px;y:[100%];" 
data-mask_out="x:inherit;y:inherit;" 
data-start="2500" 
data-splitin="none" 
data-splitout="none" 
data-responsive_offset="on" 
style="z-index: 6; white-space: nowrap;">
<div class="tp-video">
    <div class="button"><a href="#" class="btn-one">Calculate Service</a></div>
    <div class="video-gallery">
        <div class="icon-holder">
            <div class="icon">
                <a class="html5lightbox" title="Video" href="https://www.youtube.com/watch?v=Z7Rudw_iUWs">
                    <i class="fa fa-play-circle"></i>
                    Watch The Intro
                </a>
            </div>
        </div>
    </div>
</div>
</div>

</li>
</ul>   
</div>
</div><!-- END REVOLUTION SLIDER -->
</div> <!-- End of #banner -->


<!-- feature section -->
<section class="feature-section feature-style-one centred">
    <div class="container">
        <div class="top-content">
            <div class="separator wow slideInUp" data-wow-delay="0ms" data-wow-duration="4500ms"></div>
            <div class="title">We’re <span>NOT</span> just an ordinary SEO Agency <br />
                Our Methods and Approaches are <span>PROVEN</span></div>
                <div class="text">
                    Dolor sit amet consectetur elit eiusmod tempor dunt aliqua utas enim veniam tempore quis sed ipsum nostrud ipsum lorem <br />
                    amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliquat enim ad minim veniam quis nostrud <br />
                    laboris nisi ut aliquip ex ea commodo consequat duis aute irure dolor in reprehenderit voluptate.
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 feature-column">
                    <div class="single-item wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="img-box"><figure class="img-holder"><img src="{{ asset('/frontend/images/feature/2.png') }}" alt=""></figure></div>
                        <div class="lower-content"><h4>High Level Services</h4></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 feature-column">
                    <div class="single-item wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="img-box"><figure class="img-holder"><img src="{{ asset('/frontend/images/feature/3.png') }}" alt=""></figure></div>
                        <div class="lower-content"><h4>Data Driven Methods</h4></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 feature-column">
                    <div class="single-item wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="img-box"><figure class="img-holder"><img src="{{ asset('/frontend/images/feature/4.png') }}" alt=""></figure></div>
                        <div class="lower-content"><h4>Research & Analysis</h4></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature section end -->


    <!-- about section -->
    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12 col-xs-12 about-column">
                    <div class="fact-counter">
                        <div class="text-top">with fresh approach</div>
                        <div class="title">Millions of clients cannot be wrong!</div>
                        <div class="text">
                            <p>Dolor sit amet consectetur elit sed usta eiusmod tempor aliqua dais enim veniam tempore
                                quis sed ipsum nostrud sued ipsum lorem sum dolor sit amet consectetur adipisicing eiusm
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="counter-content">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12 counter-column">
                                    <div class="single-item wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                        <div class="icon-box"><i class="flaticon-sun"></i></div>
                                        <article class="column wow fadeIn" data-wow-duration="0ms">
                                            <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="350">0</span><span>+</span></div>
                                            <div class="text">Websites Optimized</div>
                                        </article>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 counter-column">
                                    <div class="single-item wow slideInUp" data-wow-delay="0ms" data-wow-duration="2000ms">
                                        <div class="icon-box"><i class="flaticon-sun"></i></div>
                                        <article class="column wow fadeIn" data-wow-duration="0ms">
                                            <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="960">0</span><span>+</span></div>
                                            <div class="text">Worldwide Clients</div>
                                        </article>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 counter-column">
                                    <div class="single-item wow slideInUp" data-wow-delay="0ms" data-wow-duration="2500ms">
                                        <div class="icon-box"><i class="flaticon-sun"></i></div>
                                        <article class="column wow fadeIn" data-wow-duration="0ms">
                                            <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="105">0</span><span>+</span></div>
                                            <div class="text">Appreciations Won</div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-12 col-xs-12 about-column">
                    <div class="piechart-content">
                        <div class="piechart-box wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="piechart-block">
                                <div class="piechart"  data-fg-color="#b220db" data-value=".28">
                                    <div class="content-box">
                                        <span>.28</span>
                                        <div class="text">on going projects <br /> nearly finished</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="piechart-boxa wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="piechart-block">
                                <div class="piecharta"  data-fg-color="#4bcf23" data-value=".80">
                                    <div class="content-box">
                                        <span>.80</span>
                                        <div class="text">website optimized</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="piechart-boxb wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="piechart-block">
                                <div class="piechartb"  data-fg-color="#218de4" data-value=".50">
                                    <div class="content-box">
                                        <span>.50</span>
                                        <div class="text">campaigns goals</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->


    <!-- service section -->
    <section class="service-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12 service-column">
                    <div class="service-title">
                        <div class="title">What We Do</div>
                        <div class="text"><p>Dolor sit amet consectetur elit seua eiusmod tempor dunt aliqua utas</p></div>
                    </div>
                    <div class="service-content centred">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12 service-column">
                                <div class="single-item wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="img-box"><a href="service.html"><figure><img src="{{ asset('/frontend/images/service/1.png') }}" alt=""></figure></a></div>
                                    <div class="lower-content">
                                        <h5><a href="service.html">Link Building</a></h5>
                                        <div class="text">
                                            <p>We know how to do Search Engine
                                                Optimization the traffic & sales increases
                                            utas enim duil veniam tempore</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 service-column">
                                <div class="single-item wow slideInUp" data-wow-delay="0ms" data-wow-duration="2000ms">
                                    <div class="img-box"><a href="service.html"><figure><img src="{{ asset('/frontend/images/service/2.png') }}" alt=""></figure></a></div>
                                    <div class="lower-content">
                                        <h5><a href="service.html">Seo Campaigns</a></h5>
                                        <div class="text">
                                            <p>We know how to do Search Engine
                                                Optimization the traffic & sales increases
                                            utas enim duil veniam tempore</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 service-column">
                                <div class="single-item wow slideInUp" data-wow-delay="0ms" data-wow-duration="2500ms">
                                    <div class="img-box"><a href="service.html"><figure><img src="{{ asset('/frontend/images/service/3.png') }}" alt=""></figure></a></div>
                                    <div class="lower-content">
                                        <h5><a href="service.html">conversion boost</a></h5>
                                        <div class="text">
                                            <p>We know how to do Search Engine
                                                Optimization the traffic & sales increases
                                            utas enim duil veniam tempore</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 service-column">
                                <div class="single-item wow slideInUp" data-wow-delay="0ms" data-wow-duration="3000ms">
                                    <div class="img-box"><a href="service.html"><figure><img src="{{ asset('/frontend/images/service/4.png') }}" alt=""></figure></a></div>
                                    <div class="lower-content">
                                        <h5><a href="service.html">content marketing</a></h5>
                                        <div class="text">
                                            <p>We know how to do Search Engine
                                                Optimization the traffic & sales increases
                                            utas enim duil veniam tempore</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="button"><a href="service.html" class="btn-two">View More Services</a></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-column">
                    <div class="form-area  wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="title">Get Instant Quote</div>
                        <form action="#">
                            <input type="text" placeholder="Your Name*">
                            <input type="email" placeholder="Email address*">
                            <input type="text" placeholder="Company">
                            <input type="text" placeholder="Phone No.">
                            <input type="text" placeholder="Website URL*">
                            <input type="text" placeholder="Estimated Monthly Budget*">
                            <textarea placeholder="Comments"></textarea>
                            <button>Request Estimate</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service section end -->


    <!-- boost ranking -->
    <section class="boost-ranking">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 column">
                    <div class="left-content  wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="text">Are you ready to <br />
                            boost your rankings <span>upto 500%</span></div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-6 col-xs-12 col-md-offset-1 column">
                        <div class="right-content  wow slideInUp" data-wow-delay="0ms" data-wow-duration="2000ms">
                            <div class="text"><h4>We are fully committed and focused on the 
                                development of your business, So you have
                            more sales & stay on top!</h4></div>
                            <div class="button"><a href="#" class="btn-one">Find out how</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- boost ranking end -->


        <!-- case section -->
        <section class="case-section">
            <div class="container">
                <div class="case-title centred">
                    <div class="sec-title">Case Studies</div>
                    <div class="title-text">Dolor sit amet consectetur elit seua eiusmod tempor dunt aliqua utas</div>
                </div>
                <div class="single-cause-content">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12 case-column">
                            <div class="img-box wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><a href="case-details.html"><figure><img src="{{ asset('/frontend/images/home/c1.jpg') }}" alt=""></figure></a></div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 case-column">
                            <div class="case-content wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="text-top">SEO campaign</div>
                                <div class="title"><a href="case-details.html">Pak Marketing</a></div>
                                <div class="text">
                                    <p>We know  well how to do Search Engine Optimization so the traffic
                                        & sales increases utas enim minim veniam tempore amet consectetur
                                    adipisicing elit sed do eiusmod tempor.</p>
                                </div>
                                <div class="button"><a href="case-details.html" class="btn-two">View Details</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-cause-content">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12 case-column">
                            <div class="case-content wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="text-top">Conversion Boost</div>
                                <div class="title"><a href="case-details.html">TomCat Hub</a></div>
                                <div class="text">
                                    <p>We know  well how to do Search Engine Optimization so the traffic
                                        & sales increases utas enim minim veniam tempore amet consectetur
                                    adipisicing elit sed do eiusmod tempor.</p>
                                </div>
                                <div class="button"><a href="case-details.html" class="btn-two">View Details</a></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 case-column">
                            <div class="img-box wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms"><a href="case-details.html"><figure><img src="{{ asset('/frontend/images/home/c2.jpg') }}" alt=""></figure></a></div>
                        </div>
                    </div>
                </div>
                <div class="single-cause-content">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12 case-column">
                            <div class="img-box wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><a href="case-details.html"><figure><img src="{{ asset('/frontend/images/home/c3.jpg') }}" alt=""></figure></a></div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 case-column">
                            <div class="case-content wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="text-top">CPA Marketing</div>
                                <div class="title"><a href="case-details.html">Elite Business</a></div>
                                <div class="text">
                                    <p>We know  well how to do Search Engine Optimization so the traffic
                                        & sales increases utas enim minim veniam tempore amet consectetur
                                    adipisicing elit sed do eiusmod tempor.</p>
                                </div>
                                <div class="button"><a href="case-details.html" class="btn-two">View Details</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- case section end -->


        <!-- testimonials section -->
        <section class="testimonials-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12 testimonial-column">
                        <div class="testimonial-content">
                            <div class="title">Happy Clients</div>
                            <div class="text"><p>Dolor sit amet consectetur elit seua eiusmod tempor lorem ipsum
                            dolor sit amet sed eiusmod tempor incididunt.</p></div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12 testimonial-column">
                        <div class="two-column-carousel">
                            <div class="slide-content wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="author">
                                    <div class="author-img"><figure><img src="{{ asset('/frontend/images/testimonial/1.png') }}" alt=""></figure></div>
                                    <div class="author-info">
                                        <h5>Adrian Faith</h5>
                                        <div class="author-text">BlueWhale Hosting</div>
                                    </div>
                                </div>
                                <div class="text">
                                    <p>Dserunt mollit anim id est laborum sed pers
                                        tisd und omniste magna natus volupta dolor
                                        reprehenderit voluptate velit escillum dolore
                                    fugiat nulla pariatur excepteur sint.</p>
                                </div>
                            </div>
                            <div class="slide-content wow slideInUp" data-wow-delay="0ms" data-wow-duration="2500ms">
                                <div class="author">
                                    <div class="author-img"><figure><img src="{{ asset('/frontend/images/testimonial/2.png') }}" alt=""></figure></div>
                                    <div class="author-info">
                                        <h5>Sarah Jane</h5>
                                        <div class="author-text">BlueWhale Hosting</div>
                                    </div>
                                </div>
                                <div class="text">
                                    <p>Dserunt mollit anim id est laborum sed pers
                                        tisd und omniste magna natus volupta dolor
                                        reprehenderit voluptate velit escillum dolore
                                    fugiat nulla pariatur excepteur sint.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonials section end -->


        <!-- news-section -->
        <section class="news-section">
            <div class="container">
                <div class="news-title centred">
                    <div class="sec-title">Latest News</div>
                    <div class="title-text">Dolor sit amet consectetur elit seua eiusmod tempor dunt aliqua</div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12 news-column">
                        <div class="single-item wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="img-box"><a href="blog-details.html"><figure><img src="{{ asset('/frontend/images/news/1.jpg') }}" alt=""></figure></a></div>
                            <div class="meta-content">
                                <ul class="meta-left"> 
                                    <li>By <span>Sarah</span></li>
                                    <li>23 September</li>
                                </ul>
                                <ul class="meta-right">
                                    <li><span class="fa fa-heart-o"></span></li>
                                    <li>104</li>
                                </ul>
                            </div>
                            <div class="lower-content">
                                <h4><a href="blog-details.html">Make Rich Content Website</a></h4>
                                <div class="text">
                                    <p>We know  how to do Search Engine Optimization
                                        so the traffic & sales increases utas enimy minim
                                    eniam tempore ipsum sed amet.</p>
                                </div>
                                <div class="button"><a href="blog-details.html" class="btn-two">View Details</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 news-column">
                        <div class="single-item wow slideInUp" data-wow-delay="0ms" data-wow-duration="2000ms">
                            <div class="img-box"><a href="blog-details.html"><figure><img src="{{ asset('/frontend/images/news/2.jpg') }}" alt=""></figure></a></div>
                            <div class="meta-content">
                                <ul class="meta-left"> 
                                    <li>By <span>Sarah</span></li>
                                    <li>23 September</li>
                                </ul>
                                <ul class="meta-right">
                                    <li><span class="fa fa-heart-o"></span></li>
                                    <li>104</li>
                                </ul>
                            </div>
                            <div class="lower-content">
                                <h4><a href="blog-details.html">Keyword Analysis Tools</a></h4>
                                <div class="text">
                                    <p>We know  how to do Search Engine Optimization
                                        so the traffic & sales increases utas enimy minim
                                    eniam tempore ipsum sed amet.</p>
                                </div>
                                <div class="button"><a href="blog-details.html" class="btn-two">View Details</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 news-column">
                        <div class="single-item wow slideInUp" data-wow-delay="0ms" data-wow-duration="2500ms">
                            <div class="img-box"><a href="blog-details.html"><figure><img src="images/news/3.jpg" alt=""></figure></a></div>
                            <div class="meta-content">
                                <ul class="meta-left"> 
                                    <li>By <span>Sarah</span></li>
                                    <li>23 September</li>
                                </ul>
                                <ul class="meta-right">
                                    <li><span class="fa fa-heart-o"></span></li>
                                    <li>104</li>
                                </ul>
                            </div>
                            <div class="lower-content">
                                <h4><a href="blog-details.html">Optimizations For Google</a></h4>
                                <div class="text">
                                    <p>We know  how to do Search Engine Optimization
                                        so the traffic & sales increases utas enimy minim
                                    eniam tempore ipsum sed amet.</p>
                                </div>
                                <div class="button"><a href="blog-details.html" class="btn-two">View Details</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- news section end -->


        <!-- brand section -->
        <section class="brand-section">
            <div class="container">
                <div class="brand-content">
                    <div class="brand-title centred">
                        <div class="sec-title">Partners In Success</div>
                        <div class="title-text">Dolor sit amet consectetur elit seua tempor dunt aliqua</div>
                    </div>
                    <div class="partner-slider  wow zoomIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="img-box"><a href="#"><figure><img src="{{ asset('/frontend/images/brand/1.jpg') }}" alt=""></figure></a></div>
                        <div class="img-box"><a href="#"><figure><img src="{{ asset('/frontend/images/brand/2.jpg') }}" alt=""></figure></a></div>
                        <div class="img-box"><a href="#"><figure><img src="{{ asset('/frontend/images/brand/3.jpg') }}" alt=""></figure></a></div>
                        <div class="img-box"><a href="#"><figure><img src="{{ asset('/frontend/images/brand/4.jpg') }}" alt=""></figure></a></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- brand section end -->


        <!-- main footer area -->
        <footer class="main-footer-area">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-6 col-xs-12 footer-column">
                            <div class="logo-wideget footer-wideget">
                                <a href="#"><figure><img src="images/footer/logo.png" alt=""></figure></a>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-6 col-xs-12 col-md-offset-2 footer-column">
                            <div class="update-wideget footer-wideget">
                                <div class="title"><h3>Get Subscribed & Stay Updated</h3></div>
                                <div class="text"><p>Dolor sit amet consectetur elit sedua eiusmod tempor dunt aliqua</p></div>
                                <div class="signup-form">
                                    <form method="post" action="http://azim.commonsupport.com/SeoArena/contact.html">
                                        <div class="input-box">
                                            <input type="email" placeholder="Enter your email address*">
                                            <button type="submit"><i class="fa fa-envelope-o"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 footer-column">
                            <ul class="footer-social footer-wideget">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12 footer-column">
                            <div class="about-company footer-wideget  wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="footer-title"><h4>About Company</h4></div>
                                <div class="text">
                                    <p>Dolore eafugiat nula pariatur excepter
                                        cupidatat non proident inculpa deserunt
                                        anim laboum eiusmod tempor incididun
                                        psum dolor sitmt consectetur adipisicing
                                    eiusmod tempor incididunt.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 col-xs-12 footer-column  wow slideInUp" data-wow-delay="0ms" data-wow-duration="2000ms">
                            <div class="link-wideget footer-wideget">
                                <div class="footer-title"><h4>Quick Links</h4></div>
                                <ul class="list">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="case-details.html">Case Studies</a></li>
                                    <li><a href="blog-details.html">Latest News</a></li>
                                    <li><a href="contact.html">Contact us</a></li>
                                    <li><a href="service.html">What We Do</a></li>
                                    <li><a href="#">FAQ’s</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 footer-column">
                            <div class="link-wideget footer-wideget  wow slideInUp" data-wow-delay="0ms" data-wow-duration="2500ms">
                                <div class="footer-title"><h4>What We Do</h4></div>
                                <ul class="list">
                                    <li><a href="#">Content Submission</a></li>
                                    <li><a href="#">Search Rankings</a></li>
                                    <li><a href="#">CPA Marketing</a></li>
                                    <li><a href="#">Content Marketing</a></li>
                                    <li><a href="#">Conversion Boost</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 footer-column">
                            <div class="contact-wideget footer-wideget  wow slideInUp" data-wow-delay="0ms" data-wow-duration="3000ms">
                                <div class="footer-title"><h4>Contact Us</h4></div>
                                <div class="text"><p>Reach us at the given address or call. Our
                                representative will  contact you.</p></div>
                                <div class="phone"><i class="flaticon-technology"></i>345 - 876 - 9026</div>
                                <div class="email">info@seo-arena.com</div>
                                <div class="address">Suite # 36, Lee Avenue, Camden Florida  98102</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- main footer area end -->


        <!-- footer bottom -->
        <section class="footer-bottom centred">
            <div class="copyright">Copyright © 2018 <a href="#">SEO ARENA</a>. All Rights Reserved.</div>
        </section>
        <!-- footer bottom -->


        
        
        <!--End pagewrapper-->


        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-angle-up"></span></div>


        <!--jquery js -->


        <script type="text/javascript" src="{{ asset('/frontend/js/jquery-2.1.4.js') }}"></script>
        <script src="{{ asset('/frontend/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/frontend/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('/frontend/js/wow.js') }}"></script>
        <script src="{{ asset('/frontend/js/validation.js') }}"></script>
        <script src="{{ asset('/frontend/js/isotope.js') }}"></script>
        <script src="{{ asset('/frontend/js/jquery.fancybox.pack.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/frontend/js/SmoothScroll.js') }}"></script>
        <script src="{{ asset('/frontend/js/html5lightbox/html5lightbox.js') }}"></script> 
        <script src="{{ asset('/frontend/js/circle-progress.js') }}"></script>
        <script src="{{ asset('/frontend/js/jquery.countTo.js') }}"></script>
        <script src="{{ asset('/frontend/js/jquery.appear.js') }}"></script>

        <!-- revolution -->
        <script src="{{ asset('/frontend/vendor/revolution/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('/frontend/vendor/revolution/jquery.themepunch.revolution.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/frontend/vendor/revolution/revolution.extension.slideanims.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/frontend/vendor/revolution/revolution.extension.layeranimation.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/frontend/vendor/revolution/revolution.extension.navigation.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/frontend/vendor/revolution/revolution.extension.kenburn.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/frontend/vendor/revolution/revolution.extension.actions.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/frontend/vendor/revolution/revolution.extension.parallax.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/frontend/vendor/revolution/revolution.extension.migration.min.js') }}"></script>

        <script src="{{ asset('/frontend/js/script.js') }}"></script>

        <!-- End of .page_wrapper -->
    </body>

    <!-- Mirrored from azim.commonsupport.com/SeoArena/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Jul 2018 06:58:17 GMT -->
    </html>
