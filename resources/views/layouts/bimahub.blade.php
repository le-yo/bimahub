<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Bimahub - Supporting Insurance Innovation</title>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Boostrap style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bimahub')}}/stylesheet/bootstrap.min.css">

    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bimahub')}}/revolution//css/layers.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('bimahub')}}/revolution//css/settings.css">

    <!-- Fancybox Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bimahub')}}/stylesheet/fancybox.css">

    <!-- Theme style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bimahub')}}/stylesheet/style.css">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bimahub')}}/stylesheet/colors/color1.css" id="colors">

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bimahub')}}/stylesheet/responsive.css">

    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bimahub')}}/stylesheet/animate.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('bimahub')}}/stylesheet/et-line.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('bimahub')}}/stylesheet/custom.css">

    <!-- Favicon and touch icons  -->
    <link href="{{ asset('bimahub')}}/icon/apple-touch-icon-48-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="{{ asset('bimahub')}}/icon/apple-touch-icon-32-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="{{ asset('bimahub')}}/icon/favicon.png" rel="shortcut icon">

</head>
<body>

<div class="boxed">
    <!-- Preloader -->
    <div id="loading-overlay">
        <div class="loader"></div>
    </div>

    <div class="top style2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-page">
                        Welcome to Bimahub: An innovation hub for the Insurance Regulatory Authority
                    </div>
                    <ul class="flat-social">
                        <li>
                            <a href="#" title=""><i class="fa fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="#" title=""><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li>
                            <a href="#" title=""><i class="fa fa-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="#" title=""><i class="fa fa-rss"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div><!-- /.clearfix -->
                </div>
            </div>
        </div>
    </div><!-- /.top -->

    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="iconbox style2 v2">
                        <div class="iconbox-content logosize">
                            <img src="{{ asset('bimahub')}}/images/ira.png" alt="IRA">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="iconbox style2 v2">
                        <div class="iconbox-content logosize">
                            <img src="{{ asset('bimahub')}}/images/bimahub.png" alt="IRA">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="iconbox style2 v2">
                        <br>
                        <div class="iconbox-icon">
                            <i class="fa fa-paper-plane-o"></i>
                        </div>
                        <div class="iconbox-content">
                            <h4>Email</h4>
                            <p>innovationhub@ira.go.ke</p>
                        </div>
                    </div>
                </div>
                {{--<div class="col-lg-3 col-sm-6">--}}
                    {{--<div class="iconbox style2 v2">--}}
                        {{--<div class="iconbox-icon">--}}
                            {{--<i class="fa fa-map-marker"></i>--}}
                        {{--</div>--}}
                        {{--<div class="iconbox-content">--}}
                            {{--<h4>Location</h4>--}}
                            {{--<p>Upper hill, Nairobi</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="col-lg-3 col-sm-6">
                    <div class="iconbox style2 v2">
                        <br>
                        <div class="iconbox-icon">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        <div class="iconbox-content">
                            <h4>Mon - Fri: 8 am - 5 pm</h4>
                            <p>Saturday & Sunday: CLOSED</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.top -->

    <header id="header" class="header style1 v1 bg-color">
        <div class="container">
            <div class="row">
                <div class="header-wrap">
                    <div class="col-md-12">
                        <div class="flat-header-wrap">
                            <div class="flat-show-search">
                                <div class="show-search">
                                    <i class="fa fa-search"></i>
                                </div>
                                <div class="top-search">
                                    <form action="#" id="searchform-all" method="get">
                                        <div>
                                            <input type="text" id="s" class="sss" placeholder="Search...">
                                            <input type="submit" value="" id="searchsubmit">
                                        </div>
                                    </form>
                                </div> <!-- /.top-search -->
                            </div>  <!-- /.flat-show-search -->
                            <div class="nav-wrap">
                                <div class="btn-menu">
                                    <span></span>
                                </div><!-- //mobile menu button -->
                                <nav id="mainnav" class="mainnav">
                                    <ul class="menu">
                                        <li class="{{ (request()->is('/')) ? 'active' : '' }}">
                                            <a href="/" title="">Home</a>
                                            <!--<ul class="sub-menu">-->
                                            <!--<li class="active"><a href="#" title="">Home 01</a></li>-->
                                            <!--<li><a href="index-02" title="">Home 02</a></li>-->
                                            <!--<li><a href="index-03" title="">Home 03</a></li>-->
                                            <!--<li><a href="index-04" title="">Home 04</a></li>-->
                                            <!--<li><a href="index-05" title="">Home 05</a></li>-->
                                            <!--</ul>&lt;!&ndash; /.sub-menu &ndash;&gt;-->
                                        </li>
                                        <li class="{{ (request()->segment(1) == 'about') ? 'active' : '' }}">
                                            <a href="{{url('/about')}}" title="">About Us</a>
                                            <ul class="sub-menu">
                                           <li><a href="/about/committee" title="">Bima Innovate Committee</a></li>
                                            </ul>

                                        </li>
                                        <li class="{{ (request()->segment(1) == 'bimalab') ? 'active' : '' }}">
                                            <a href="bimalab" title="">BimaLab</a>
                                            <ul class="sub-menu">
                                                <li><a href="/bimalab" title="">About Bimalab</a></li>
                                                <li><a href="/bimalab/insurtech" title="">InsurTech Hackathon</a></li>
                                                <li><a href="/bimalab/innovation" title="">Innovation Bootcamp</a></li>
                                            </ul><!-- /.sub-menu -->
                                        </li>
                                        <li class="{{ (request()->segment(1) == 'bimabox') ? 'active' : '' }}">
                                            <a href="/bimabox" title="">BimaBox</a>
                                            <ul class="sub-menu">
                                                <li><a href="/bimabox" title="">About BimaBox</a></li>
                                                <li><a href="/bimabox/eligibility" title="">Eligibility</a></li>
                                                <li><a href="/bimabox/evaluation" title="">Evaluation</a></li>
                                                <li><a href="/bimabox/application" title="">Application Form</a></li>
                                            </ul><!-- /.sub-menu -->
                                        </li>
                                        <li class="{{ (request()->segment(1) == 'regtech') ? 'active' : '' }}">
                                            <a href="/regtech" title="">RegTech</a>
                                            <!--<ul class="sub-menu">-->
                                            <!--<li><a href="blog" title="">Blog</a></li>-->
                                            <!--<li><a href="blog-v2" title="">Blog 02</a></li>-->
                                            <!--<li><a href="blog-v3" title="">Blog 03</a></li>-->
                                            <!--<li><a href="blog-single" title="">Blog Grid</a></li>-->
                                            <!--</ul>&lt;!&ndash; /.sub-menu &ndash;&gt;-->
                                        </li>
                                        <li class="{{ (request()->segment(1) == 'news') ? 'active' : '' }}">
                                            <a href="#" title="">News & Events</a>
                                            <!--<ul class="sub-menu">-->
                                            <!--<li><a href="404" title="">Error Page</a></li>-->
                                            <!--<li><a href="pricing" title="">Pricing</a></li>-->
                                            <!--</ul>&lt;!&ndash; /.sub-menu &ndash;&gt;-->
                                        </li>
                                        <li class="{{ (request()->segment(1) == 'downloads') ? 'active' : '' }}">
                                            <a href="#" title="">Downloads</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ asset('bimahub')}}/downloads//BimaBox_Guidance_Note.pdf" title="">BimaBox Guidance Note</a></li>
                                                <li><a href="{{ asset('bimahub')}}/downloads//BimaBox_Application_Form.pdf" title="">BimaBox Application Form</a></li>
                                                <li><a href="{{ asset('bimahub')}}/downloads//Bima_Innovate_Project.pdf" title="">Bima Innovate Project</a></li>
                                            </ul><!-- /.sub-menu -->
                                        </li>
                                        <li>
                                            <a href="#" title="">Contact US</a>
                                            <!--<ul class="sub-menu">-->
                                            <!--<li><a href="contact-v1" title="">Contact 01</a></li>-->
                                            <!--</ul>&lt;!&ndash; /.sub-menu &ndash;&gt;-->
                                        </li>
                                    </ul><!-- /.menu -->
                                </nav><!-- /#mainnav -->
                            </div><!-- /.nav-wrap -->
                        </div>
                    </div><!-- /.col-md-9 -->
                </div><!-- /.header-wrap -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </header><!-- /header -->
    @yield('content')

    {{--<section class="flat-partner style2 scroll">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12">--}}
                    {{--<ul class="owl-carousel-10">--}}
                        {{--<li>--}}
                            {{--<img src="{{ asset('bimahub')}}/images/ira.png" alt="IRA">--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>© Bimahub <a href="#" title=""> 2020</a>. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.footer-bottom -->

    <div class="button-go-top">
        <a href="#" title="" class="go-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

</div> <!-- /.boxed -->

<!-- Javascript -->
<script type="text/javascript" src="{{ asset('bimahub')}}/js/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('bimahub')}}/js/tether.min.js"></script>
<script type="text/javascript" src="{{ asset('bimahub')}}/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('bimahub')}}/js/owl.carousel.js"></script>
<script type="text/javascript" src="{{ asset('bimahub')}}/js/jquery.easing.js"></script>
<script type="text/javascript" src="{{ asset('bimahub')}}/js/parallax.js"></script>
<script type="text/javascript" src="{{ asset('bimahub')}}/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="{{ asset('bimahub')}}/js/waypoints.min.js"></script>

<script type="text/javascript" src="{{ asset('bimahub')}}/js/kinetic.js"></script>
<script type="text/javascript" src="{{ asset('bimahub')}}/js/jquery-countTo.js"></script>
<script type="text/javascript" src="{{ asset('bimahub')}}/js/jquery.owl-filter.js"></script>
<script type="text/javascript" src="{{ asset('bimahub')}}/js/jquery.fancybox.js"></script>
<script type="text/javascript" src="{{ asset('bimahub')}}/js/jquery.cookie.js"></script>
<script type="text/javascript" src="{{ asset('bimahub')}}/js/jquery-validate.js"></script>
<script type="text/javascript" src="{{ asset('bimahub')}}/js/main.js"></script>


<!-- Revolution Slider -->
<script type="text/javascript" src="{{ asset('bimahub')}}/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="{{ asset('bimahub')}}/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="{{ asset('bimahub')}}/revolution/js/slider_v3.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="{{ asset('bimahub')}}/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="{{ asset('bimahub')}}/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="{{ asset('bimahub')}}/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="{{ asset('bimahub')}}/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="{{ asset('bimahub')}}/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="{{ asset('bimahub')}}/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="{{ asset('bimahub')}}/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="{{ asset('bimahub')}}/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="{{ asset('bimahub')}}/revolution/js/extensions/revolution.extension.video.min.js"></script>

</body>
</html>