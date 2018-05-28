<!DOCTYPE html>
<?php
$level = $_GET['level'];
$root=simplexml_load_file("upload/treatment.xml") or die("No Data Found");
$injury_levels = $root->children();
$injury_level = $injury_levels[(int)$level];
//error_log('level='.$level.' injury_level='.$injury_level['value']);
//print_r($xml);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Ankle Injury</title>

    <!-- Css Starts-->

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Icons CSS -->
    <!--<link href="css/fontawesome.min.css" rel="stylesheet">-->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/themify-icons.css" rel="stylesheet">

    <!-- Meanmenu CSS -->
    <link href="css/meanmenu.css" rel="stylesheet">

    <!-- Owl Carousel CSS -->
    <link href="css/owl.carousel.css" rel="stylesheet">

    <link href="css/swiper.min.css" rel="stylesheet">

    <!-- Magnific Popup CSS -->
    <link href="css/magnific-popup.css" rel="stylesheet">

    <!-- Main CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Css Ends-->

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- Preloader -->
    <div id="overlay">
        <div class="spinner"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Top -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <ul class="top-info">
                        <li><i class="fa fa-envelope-o"></i><a href="mailto:chamikathilan8375@gmail.com">chamikathilan8375@gmail.com</a>
                        </li>
                        <li><i class="fa fa-phone"></i><a href="tel:+94713587045">(+94) 71 358 70 45</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="top-social">
                        <a href="https://www.facebook.com/profile.php?id=100004407460173"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.linkedin.com/in/chamika-haputhanthri-691abaa2"><i
                                    class="fa fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/in/chamika-haputhanthri-691abaa2/"><i class="fa fa-linkedin"></i></a>
                        <a href="https://google.lk"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /Header Top -->

    <!-- Header Area -->
    <header id="sticky-header" class="gray-bg">
        <div class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                            <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="main-menu text-right">
                            <nav>
                                <ul class="menu">
                                    <li><a href="index.html#">Home <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="about-02.html">About <i class="fa fa-angle-down"
                                                                         aria-hidden="true"></i></a>
                                    </li>

                                    <li><a href="blog-details.html">Experience <i class="fa fa-angle-down"
                                                                                  aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="contact.html">Contact <i class="fa fa-angle-down"
                                                                          aria-hidden="true"></i></a>
                                    </li>
                                    <li id="login-btn"><a href="signup.html">Login</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div><!-- /.Navigation -->
    </header><!-- /Header Area -->
    <section class="chart-area section-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="subtitle"><?= $injury_level['value']?></p>
                </div>
            </div>
        </div>
    </section>
    <!--Slider Area-->
    <section class="swiper-slider-area">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php foreach ($injury_level->children() as $duration) {
                    $approach = $duration->approach; ?>

                    <div class="swiper-slide">
                        <div class="slide-inner light-overlay single-swiper-slider">
                            <div class="container"style="margin-top: 20px">
                                <div class="row ">
                                    <div class="col-md-offset-3  col-md-6">
                                        <div class="section-title">
                                            <h2 ><span><?=$duration['value']?></span></h2>
                                            <p><?= $approach->description?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row is-flex" >
                                    <?php
                                    $count = 1;
                                    $color=false;
                                    foreach ($approach->treatment as $treatment) {
                                        $count +=1; ?>
                                    <div class="col-md-5 single-treatment <?php if($color){ ?>dark <?php } ?>">
                                        <div class="single-why-choose">
                                            <h3><?=$treatment?></h3>
                                        </div>
                                    </div>
                                    <?php if ($count == 2) {
                                            $color = !$color;
                                            $count=0;
                                        }
                                    }?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="swiper-button-next swiper-button-black"></div>
            <div class="swiper-button-prev swiper-button-black"></div>
        </div>
    </section><!--/Slider Area-->

<!--    <!-- How works Area -->
<!--    <section class="how-works section-padding">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-md-12">-->
<!--                    <div class="section-title">-->
<!--                        <h2>How It <span>Works</span></h2>-->
<!--                        <p>Sed ut perspiciatis, unde omnis isteew nouat error sit voluptatem</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="col-md-12">-->
<!--                    <div class="how-to-sec">-->
<!--                        <div class="how-to">-->
<!--                                    <span class="how-icon">-->
<!--                                        <i class="ti-user"></i>-->
<!--                                    </span>-->
<!--                            <h3>Create ID</h3>-->
<!--                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of-->
<!--                                classical Latin.</p>-->
<!--                        </div>-->
<!--                        <div class="how-to">-->
<!--                                    <span class="how-icon">-->
<!--                                        <i class="ti-wallet"></i>-->
<!--                                    </span>-->
<!--                            <h3>Make Payment</h3>-->
<!--                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of-->
<!--                                classical Latin.</p>-->
<!--                        </div>-->
<!--                        <div class="how-to">-->
<!--                                    <span class="how-icon">-->
<!--                                        <i class="ti-shopping-cart"></i>-->
<!--                                    </span>-->
<!--                            <h3>Shop now</h3>-->
<!--                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of-->
<!--                                classical Latin.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section><!-- /How works Area -->
<!---->
<!--    <!-- Currency Converter Area -->
<!--    <section class="currency-converter-section section-padding dark-overlay" data-parallax="scroll" data-speed="0.6"-->
<!--             data-image-src="images/banner/6.jpg">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-md-6">-->
<!--                    <div class="chart-map">-->
<!--                        <img src="images/map.png" alt=""/>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-6">-->
<!--                    <div class="currency-converter">-->
<!--                        <h2 class="title">Crypto <span>converter</span></h2>-->
<!--                        <p>Bitcoin is a form of digital currency, created and held electronically. No one controls it.-->
<!--                            Bitcoins aren’t printed, like dollars or euros – they’re produced by people, and increasingly-->
<!--                            businesses, running computers all around the world</p>-->
<!--                        <script src="js/calc_widget.js"></script>-->
<!--                        <a class="btn-default btn-big btn-fill" href="index-v2.html">Exchange now</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section><!-- /Currency Converter Area -->
<!---->
<!---->
<!--    <div class="page-wrapper">-->
<!---->
<!--        <!-- Chart Area -->
<!--        <section class="chart-area section-padding">-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <div class="col-md-6">-->
<!--                        <div class="chart-content">-->
<!--                            <h2 class="title">Chart <span>Content</span></h2>-->
<!--                            <p>It is a long established fact that a reader will be distracted by the readable content of a-->
<!--                                page when looking at its layout. The point of using Lorem Ipsum is that it has a-->
<!--                                more-or-less normal distribution of letters, as opposed to using 'Content here, content-->
<!--                                here', making it look like readable English.</p>-->
<!--                            <a class="btn-default btn-big btn-fill" href="index-v2.html">Compare now</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-6">-->
<!--                        <div class="bit-chart">-->
<!--                            <img src="images/chart.png" alt=""/>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section><!-- /Chart Area -->
<!---->
<!--        <!--Team Area-->
<!--        <section class="team-area section-padding blue-bg">-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <div class="col-md-offset-3 col-md-6">-->
<!--                        <div class="section-title">-->
<!--                            <h2>Our <span>Team</span></h2>-->
<!--                            <p>There are many variations of passages of Lorem Ipsum available</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="row">-->
<!--                    <div class="col-md-3 col-sm-6 col-xs-12">-->
<!--                        <div class="single-member">-->
<!--                            <div class="single-team-details">-->
<!--                                <img src="images/team/1.jpg" alt=""/>-->
<!--                                <div class="team-member-name">-->
<!--                                    JAMIE BRYAN-->
<!--                                </div>-->
<!--                                <div class="team-member-des">-->
<!--                                    CEO-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="single-mem-des">-->
<!--                                <p>"There are many variations of passages of Lorem Ipsum available, but the majority have-->
<!--                                    suffered alteration."</p>-->
<!--                                <a href="index-v2.html"><i class="fa fa-medium"></i></a>-->
<!--                                <a href="index-v2.html"><i class="fa fa-linkedin"></i></a>-->
<!--                                <a href="index-v2.html"><i class="fa fa-instagram"></i></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3 col-sm-6 col-xs-12">-->
<!--                        <div class="single-member">-->
<!--                            <div class="single-team-details">-->
<!--                                <img src="images/team/2.jpg" alt=""/>-->
<!--                                <div class="team-member-name">-->
<!--                                    SHEILA TURNER-->
<!--                                </div>-->
<!--                                <div class="team-member-des">-->
<!--                                    CONSULTANT-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="single-mem-des">-->
<!--                                <p>"There are many variations of passages of Lorem Ipsum available, but the majority have-->
<!--                                    suffered alteration."</p>-->
<!--                                <a href="index-v2.html"><i class="fa fa-medium"></i></a>-->
<!--                                <a href="index-v2.html"><i class="fa fa-linkedin"></i></a>-->
<!--                                <a href="index-v2.html"><i class="fa fa-instagram"></i></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3 col-sm-6 col-xs-12">-->
<!--                        <div class="single-member">-->
<!--                            <div class="single-team-details">-->
<!--                                <img src="images/team/3.jpg" alt=""/>-->
<!--                                <div class="team-member-name">-->
<!--                                    GRANT WATSON-->
<!--                                </div>-->
<!--                                <div class="team-member-des">-->
<!--                                    ANALYST-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="single-mem-des">-->
<!--                                <p>"There are many variations of passages of Lorem Ipsum available, but the majority have-->
<!--                                    suffered alteration."</p>-->
<!--                                <a href="index-v2.html"><i class="fa fa-medium"></i></a>-->
<!--                                <a href="index-v2.html"><i class="fa fa-linkedin"></i></a>-->
<!--                                <a href="index-v2.html"><i class="fa fa-instagram"></i></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3 col-sm-6 col-xs-12">-->
<!--                        <div class="single-member">-->
<!--                            <div class="single-team-details">-->
<!--                                <img src="images/team/4.jpg" alt=""/>-->
<!--                                <div class="team-member-name">-->
<!--                                    NEAL HALE-->
<!--                                </div>-->
<!--                                <div class="team-member-des">-->
<!--                                    DEVELOPER-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="single-mem-des">-->
<!--                                <p>"There are many variations of passages of Lorem Ipsum available, but the majority have-->
<!--                                    suffered alteration."</p>-->
<!--                                <a href="index-v2.html"><i class="fa fa-medium"></i></a>-->
<!--                                <a href="index-v2.html"><i class="fa fa-linkedin"></i></a>-->
<!--                                <a href="index-v2.html"><i class="fa fa-instagram"></i></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section><!--/Team Area-->
<!---->
<!--        <!-- Client Review-->
<!--        <section class="client-reviews section-padding dark-overlay" data-parallax="scroll" data-speed="0.6"-->
<!--                 data-image-src="images/banner/11.jpg">-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <div class="section-title">-->
<!--                        <h2><span>Client</span> Reviews</h2>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="row">-->
<!--                    <div class="col-md-offset-2 col-md-8">-->
<!--                        <div class="owl-carousel single-review">-->
<!--                            <div class="reviews">-->
<!--                                <i class="ti-quote-right"></i>-->
<!--                                <p>Bitcoin uses peer-to-peer technology to operate with no central authority or banks;-->
<!--                                    managing transactions and the issuing of bitcoins is carried out collectively by the-->
<!--                                    network.</p>-->
<!--                                <strong>Plabon Miah</strong>-->
<!--                            </div>-->
<!--                            <div class="reviews">-->
<!--                                <i class="ti-quote-right"></i>-->
<!--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non nulla placeat,-->
<!--                                    odio, qui dicta alias.</p>-->
<!--                                <strong>Steve Husain</strong>-->
<!--                            </div>-->
<!--                            <div class="reviews">-->
<!--                                <i class="ti-quote-right"></i>-->
<!--                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a-->
<!--                                    piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>-->
<!--                                <strong>Progra Lora</strong>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section><!-- /Client Review-->
<!---->
<!--        <!-- News Area -->
<!--        <section class="news-area2 section-padding">-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <div class="col-md-offset-3 col-md-6">-->
<!--                        <div class="section-title">-->
<!--                            <h2>Recent <span>News</span></h2>-->
<!--                            <p>There are many variations of passages of Lorem Ipsum available</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="row">-->
<!--                    <div class="col-md-12">-->
<!--                        <div class="news-boxx owl-carousel">-->
<!--                            <a href="index-v2.html">-->
<!--                                <div class="news-box2">-->
<!--                                    <img class="img-ops" src="images/blog/1.jpg" alt=""/>-->
<!--                                    <div class="news-data2">-->
<!--                                        <p class="news-cat">Bitcoin</p>-->
<!--                                        <img src="images/icons/7.png" alt=""/>-->
<!--                                        <h2>Bitcoin rushing!!</h2>-->
<!--                                        <p class="news-meta">-->
<!--                                            <span>November 7, 2018</span>-->
<!--                                            <span><i class="ti-eye"></i> 2046</span>-->
<!--                                            <span><i class="ti-comment"></i> 65</span>-->
<!--                                        </p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                            <a href="index-v2.html">-->
<!--                                <div class="news-box2">-->
<!--                                    <img class="img-ops" src="images/blog/1.jpg" alt=""/>-->
<!--                                    <div class="news-data2">-->
<!--                                        <p class="news-cat">Lite coin</p>-->
<!--                                        <img src="images/icons/8.png" alt=""/>-->
<!--                                        <h2>Litecoin boring news</h2>-->
<!--                                        <p class="news-meta">-->
<!--                                            <span>November 7, 2018</span>-->
<!--                                            <span><i class="ti-eye"></i> 2046</span>-->
<!--                                            <span><i class="ti-comment"></i> 65</span>-->
<!--                                        </p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                            <a href="index-v2.html">-->
<!--                                <div class="news-box2">-->
<!--                                    <img class="img-ops" src="images/blog/1.jpg" alt=""/>-->
<!--                                    <div class="news-data2">-->
<!--                                        <p class="news-cat">Ethereum</p>-->
<!--                                        <img src="images/icons/9.png" alt=""/>-->
<!--                                        <h2>Litecoin boring news</h2>-->
<!--                                        <p class="news-meta">-->
<!--                                            <span>November 7, 2018</span>-->
<!--                                            <span><i class="ti-eye"></i> 2046</span>-->
<!--                                            <span><i class="ti-comment"></i> 65</span>-->
<!--                                        </p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                            <a href="index-v2.html">-->
<!--                                <div class="news-box2">-->
<!--                                    <img class="img-ops" src="images/blog/1.jpg" alt=""/>-->
<!--                                    <div class="news-data2">-->
<!--                                        <p class="news-cat">Zcash</p>-->
<!--                                        <img src="images/icons/7.png" alt=""/>-->
<!--                                        <h2>Litecoin boring news</h2>-->
<!--                                        <p class="news-meta">-->
<!--                                            <span>November 7, 2018</span>-->
<!--                                            <span><i class="ti-eye"></i> 2046</span>-->
<!--                                            <span><i class="ti-comment"></i> 65</span>-->
<!--                                        </p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section><!-- /News Area -->

        <!-- Footer Area -->
<footer class="site-footer footer-v2 footer-overlay"
        style="background:url('images/banner/11.jpg') no-repeat fixed;">
    <div class="container">
        <div class="row">
            <!--<div class="site-bottom clearfix">-->
            <!--<div class="col-md-2 col-sm-6 site-bottom-1">-->
            <!--<aside class="widget widget-nav">-->
            <!--<h3 class="widget-title">Pages</h3>-->
            <!--<ul class="menu">-->
            <!--<li><a href="index.html#">About</a></li>-->
            <!--<li><a href="index.html#">Services</a></li>-->
            <!--<li><a href="index.html#">Latest news</a></li>-->
            <!--<li><a href="index.html#">Team</a></li>-->
            <!--<li><a href="index.html#">Contact</a></li>-->
            <!--</ul>-->
            <!--</aside>-->
            <!--</div>-->
            <!--<div class="col-md-3 col-sm-6 site-bottom-3">-->
            <!--<aside class="widget widget-nav">-->
            <!--<h3 class="widget-title">Terms</h3>-->
            <!--<ul class="menu">-->
            <!--<li><a href="index.html#">FAQ’s</a></li>-->
            <!--<li><a href="index.html#">Privecy & Policy</a></li>-->
            <!--<li><a href="index.html#">Terms & Conditions</a></li>-->
            <!--<li><a href="index.html#">Lience Policy</a></li>-->
            <!--<li><a href="index.html#">404 Policy</a></li>-->
            <!--</ul>-->
            <!--</aside>-->
            <!--</div>-->
            <!--<div class="col-md-4 col-sm-6 site-bottom-2">-->
            <!--<aside class="widget widget-nav">-->
            <!--<h3 class="widget-title">Twitter feed</h3>-->
            <!--<div class="twitter-feed">-->
            <!--<div class="twitter-feed-icon">-->
            <!--<i class="fa fa-twitter"></i>-->
            <!--</div>-->
            <!--<div class="twitter-feed-content">-->
            <!--<p>Our every products has a grate discount. Get 50% discount to get started with <a-->
            <!--href="index.html">#Wordpress</a> <a href="index.html">#discount</a><br/><a-->
            <!--href="index.html">http://t.co/Wa8Hg98Okg</a></p>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div class="twitter-feed">-->
            <!--<div class="twitter-feed-icon">-->
            <!--<i class="fa fa-twitter"></i>-->
            <!--</div>-->
            <!--<div class="twitter-feed-content">-->
            <!--<p><a href="index.html">@RidoyRajoan</a> Hi Weblos, I need a website to build. Can-->
            <!--you help me?</p>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div class="twitter-feed">-->
            <!--<div class="twitter-feed-icon">-->
            <!--<i class="fa fa-twitter"></i>-->
            <!--</div>-->
            <!--<div class="twitter-feed-content bor-btm-none">-->
            <!--<p>Themerio: <a href="index.html">#design</a> vs <a href="index.html">#analysis</a>-->
            <!--which one you will prefer? <br/><a href="index.html">http://t.co/Zo71Uh9ObG</a>-->
            <!--</p>-->
            <!--</div>-->
            <!--</div>-->
            <!--</aside>-->
            <!--</div>-->
            <!--<div class="col-md-3 col-sm-6 site-bottom-4">-->
            <!--<aside class="widget widget-text">-->
            <!--<h3 class="widget-title">Newsletter</h3>-->
            <!--<p>Subscribe to our newsletter to receive news, updates, free stuff and new releases by-->
            <!--email. We don't do spam.</p>-->
            <!--<form class="form-newsletter-ft" action="index.html#" method="get">-->
            <!--<input name="email" placeholder="Enter your email" required="" type="email">-->
            <!--<input value="Go" type="submit">-->
            <!--</form>-->
            <!--</aside>-->
            <!--</div>-->
            <!--</div>-->
            <!-- .site-bottom -->
            <div class="bottom-footer">
                <div class="col-md-6 col-sm-4 pull-right">
                    <div class="socials">
                        <ul>
                            <li><a href="index.html#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="index.html#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="index.html#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="index.html#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="index.html#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="index.html#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-8">
                    <div class="copyright">
                        <p>&copy; 2018 All Rights Reserved Ankler.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- .row -->
    </div>
</footer><!-- /Footer Area -->

    </div>

    <!-- Scroll To Top Button -->
<!--    <a class="page-scroll" href="index-v2.html#page-top" id="toTop"><span class="ti-rocket"></span></a>-->


    <!-- Jquery JS -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Smooth Scroll JS -->
    <script src="js/SmoothScroll.js"></script>

    <!-- Jquery Easing Plugin -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Meanmenu Plugin -->
    <script src="js/jquery.meanmenu.js"></script>

    <!-- Jquery Scroll To Top Plugin -->
    <script src="js/jquery.scrollToTop.min.js"></script>

    <!-- Jquery Form Validation Plugin -->
    <script src="js/jqBootstrapValidation.js"></script>

    <!-- Magnific Popup Plugin JS -->
    <script src="js/magnific-popup.min.js"></script>

    <!-- Owl Carousel Plugin -->
    <script src="js/owl.carousel.min.js"></script>

    <!-- parallax Plugin -->
    <script src="js/parallax.min.js"></script>

    <!-- Jquery Swiper Plugin -->
    <script src="js/swiper.min.js"></script>

    <!-- Isotope JS -->
    <script src="js/isotope.pkgd.min.js"></script>

    <!-- Contact Form Javascript -->
    <script src="js/contact.js"></script>

    <!-- waypoints Plugin -->
    <script src="js/waypoints.min.js"></script>

    <!-- CounterUp Plugin -->
    <script src="js/jquery.counterup.js"></script>

    <!-- Plugin Js -->
    <script src="js/plugins.js"></script>

    <!-- Main Javascript -->
    <script src="js/main.js"></script>

</body>

</html>
