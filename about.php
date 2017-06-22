<?php
   include("admin/config.php");
   session_start();
   $isLogin = false;
   if (isset($_SESSION['user'])) {
		$user = $_SESSION['user'];
		$isAdmin = $user['is_admin'];
		 $isLogin = true;
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sharptools || about</title>
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Color css -->
    <link rel="stylesheet" id="jssDefault" href="css/color.css">
</head>

<body>
    <div class="boxed_wrapper">
       
        <header class="header">
            <div class="container">
                <div class="logo pull-left">
                    <a href="index.php">
                        <img src="img/theme/logo.png" alt="Awesome Image" id="theme-logo" />
                    </a>
                </div>
                <div class="header-right pull-right">
                    <div class="single-header-right">
                        <div class="icon-box">
                            <i class="flaticon-placeholder"></i>
                        </div>
                        <div class="content-box">
                            <b>20c Factory Avenue,</b>
                            <p>New York, NY 10218 USA.</p>
                        </div>
                    </div>
                    <div class="single-header-right">
                        <div class="icon-box">
                            <i class="flaticon-technology"></i>
                        </div>
                        <div class="content-box">
                            <b>+(23) 890 60 3919</b>
                            <p>Troll Free Number</p>
                        </div>
                    </div>
                    <div class="single-header-right">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Download" class="icon-btn"><i class="flaticon-cloud"></i></a>
                        <button class="thm-btn"><i class="fa fa-share"></i> get a Quote</button>
						<?php if($isLogin) { ?>
							 <a href="admin/logout.php" class="thm-btn"><i class="fa fa-power-off"></i> Logout</a>
							<?php }else{
							?>
							 <a href="login.php" class="thm-btn">Login</a>
							<?php
							
							} ?>
                    </div>
                </div>
            </div>
        </header>
        <section class="mainmenu-wrapper stricky">
            <div class="container">
                <nav class="mainmenu-holder pull-left">
                    <div class="nav-header">
                        <ul class="navigation">
                            <li>
                                <a href="index.php"><i class="flaticon-icon-2144"></i> Home</a>
                            </li>
                            <li class="active"><a href="about.php">About</a></li>
                         
                         <li><a href="projects.php">Projects</a></li>
                            <li><a href="products.php">Products</a></li>
                            <li><a href="recognition.php">Recognition</a></li>
                            <li><a href="blog.php">CSR</a></li>
							 <li><a href="store-locator.php">Store Locator</a></li>
							<li><a href="e-catalogue.php">E-Catalogue</a></li>
                          
                        </ul>
                    </div>
                    <div class="nav-footer hidden-lg">
                        <ul>
                            <li>
                                <button class="menu-expander"><i class="fa fa-list-ul"></i></button>
                            </li>
                        </ul>
                    </div>
                </nav>
              
            </div>
        </section>
        <section class="inner-banner" style="background-image: url(img/resources/inner-banner.jpg);">
            <div class="container text-center">
                <h2>About Factory Press</h2>
            </div>
        </section>
        <section class="bread-cumb">
            <div class="container text-center">
                <ul>
                    <li><a href="index.html">Factory Press</a></li>
                    <li><span>About</span></li>
                </ul>
            </div>
        </section>
        <section class="about-section section-padding about-page pb0">
            <div class="container">
                <div class="row about-text-wrapper">
                    <div class="col-lg-6 col-md-12">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <img src="img/about-section/large-1.jpg" alt="Awesome Image" />
                            </div>
                            <div class="item">
                                <img src="img/about-section/large-1.jpg" alt="Awesome Image" />
                            </div>
                            <div class="item">
                                <img src="img/about-section/large-1.jpg" alt="Awesome Image" />
                            </div>
                            <div class="item">
                                <img src="img/about-section/large-1.jpg" alt="Awesome Image" />
                            </div>
                        </div>
                        <div class="img-box">
                            <img src="img/about-section/1.jpg" alt="Awesome Image" />
                            <img src="img/about-section/2.jpg" alt="Awesome Image" />
                            <img src="img/about-section/3.jpg" alt="Awesome Image" />
                            <img src="img/about-section/4.jpg" alt="Awesome Image" />
                            <img src="img/about-section/5.jpg" alt="Awesome Image" />
                            <img src="img/about-section/6.jpg" alt="Awesome Image" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="right-textbox">
                            <h2>Factory Press Overview</h2>
                            <p>Over 24 years experience and knowledge of international standards, technological changes and industrial systems, we are dedicated to provide the best and economical solutions to our valued customers.</p>
                            <p>We have facility to produce advance various industrial applications based on specially developed technology. We are also ready to take developement by according to users changing needs. Infrastructure related installation projects.General repair & ovehauling of industrial equipment and machinery</p>
                            <p>Our experience in all the fields we serve in, and the range of services we provide, makes us one of the most comprehensive engineer service providers in the nation. And, with the help of continuous support and trust of our clients, we aim to stay at the top of the game, and humbly so. Our sophisticated systems, neatly designed logistic process, state of the art factory tools and equipment, most advanced carriers, custom tailored services, and dedication to keep the costs low for end users, help us to provide perfect solution that aligns well with our clients’ requirements. We welcome you to our site, and request you to consult with our Industrial experts for your logistic needs, and rest assured of getting done.Over 24 years experience and knowledge of international standards, technological changes and industrial systems, we are dedicated to and the range of services we provide, makes us one of the most.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="fact-counter-section">
            <div class="container">
                <div class="clearfix">
                    <div class="col-md-3 col-sm-6">
                        <div class="single-fact-counter clearfix">
                            <div class="text-box">
                                <span class="number">
							<span class="timer" data-from="50" data-to="20000" data-speed="5000" data-refresh-interval="50">20000</span>+
                                </span>
                                <p>Engineers & Workers</p>
                            </div>
                            <div class="icon-box">
                                <i class="flaticon-people-2"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-fact-counter clearfix">
                            <div class="text-box">
                                <span class="number">
							<span class="timer" data-from="5" data-to="700" data-speed="5000" data-refresh-interval="50">700</span>+
                                </span>
                                <p>Customers Worldwide</p>
                            </div>
                            <div class="icon-box">
                                <i class="flaticon-office"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-fact-counter clearfix">
                            <div class="text-box">
                                <span class="number">
							<span class="timer" data-from="10" data-to="2450" data-speed="5000" data-refresh-interval="50">2450</span>+
                                </span>
                                <p>Projects Completed</p>
                            </div>
                            <div class="icon-box">
                                <i class="flaticon-people-1"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-fact-counter clearfix bdrn">
                            <div class="text-box">
                                <span class="number">
							<span class="timer" data-from="5" data-to="468" data-speed="5000" data-refresh-interval="50">468</span>+
                                </span>
                                <p>Awards of Recogniztion</p>
                            </div>
                            <div class="icon-box">
                                <i class="flaticon-award"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="our-features">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="single-our-feature">
                            <div class="overlay" style="background-image: url(img/resources/single-featured-bg.jpg);">
                                <div class="box">
                                    <div class="box-content">
                                        <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="icon-box">
                                <i class="flaticon-factory"></i>
                            </div>
                            <h3>Creditable Integrity</h3>
                            <p>Value talent cultivation and encourage
                                <br>creative innovation</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-our-feature">
                            <div class="overlay" style="background-image: url(img/resources/single-featured-bg.jpg);">
                                <div class="box">
                                    <div class="box-content">
                                        <a href="#">Our Team <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="icon-box">
                                <i class="flaticon-people"></i>
                            </div>
                            <h3>Effective Team Work</h3>
                            <p>Pursue organizational solidity and press
                                <br> on effective team-work</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-our-feature">
                            <div class="overlay" style="background-image: url(img/resources/single-featured-bg.jpg);">
                                <div class="box">
                                    <div class="box-content">
                                        <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="icon-box">
                                <i class="flaticon-medal"></i>
                            </div>
                            <h3>Quality Assurance</h3>
                            <p>Ensure first and best of product quality
                                <br> and service</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="our-team-member section-padding">
            <div class="container">
                <div class="section-title text-center">
                    <h2><span>Meet Our Team</span></h2>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="single-team-member">
                            <div class="img-box">
                                <img src="img/team-member/1.jpg" alt="">
                                <div class="overlay">
                                    <div class="box">
                                        <div class="box-content">
                                            &nbsp;
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3>Charles Nicholes</h3>
                            <p class="position">Ceo & Managing Director</p>
                            <p>The MD of Factory Press, he has been the captain of his team.. </p>
                            <p class="info"><span>Tel: 800-700-6200</span>
                                <br> <span>Mail: Ceo@Factorypress.com</span></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-team-member">
                            <div class="img-box">
                                <img src="img/team-member/2.jpg" alt="">
                                <div class="overlay">
                                    <div class="box">
                                        <div class="box-content">
                                            &nbsp;
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3>Rebecca Garza</h3>
                            <p class="position">Adviser & Business Developer</p>
                            <p>She is an Factory Press technical adviser & business developer </p>
                            <p class="info"><span>Tel: 800-700-6201</span>
                                <br> <span>Mail: Project@Factorypress.com</span></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-team-member">
                            <div class="img-box">
                                <img src="img/team-member/3.jpg" alt="">
                                <div class="overlay">
                                    <div class="box">
                                        <div class="box-content">
                                            &nbsp;
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3>Stepthen Adams</h3>
                            <p class="position">Cheif Engineer</p>
                            <p>He has managed to bring to the company as well as industry.</p>
                            <p class="info"><span>Tel: 800-700-6202</span>
                                <br> <span>Mail: Engineer@Factorypress.com</span></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-team-member">
                            <div class="img-box">
                                <img src="img/team-member/4.jpg" alt="">
                                <div class="overlay">
                                    <div class="box">
                                        <div class="box-content">
                                            &nbsp;
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3>Ben Johnson</h3>
                            <p class="position">Engineer & Customer Support</p>
                            <p>Community Head and has worked tirelessly to help the needy.</p>
                            <p class="info"><span>Tel: 800-700-6203</span>
                                <br> <span>Mail: Support@Factorypress.com</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="call-to-action no-margin">
            <div class="container">
                <p>FactoryPress has consistently embraced innovation to provide a superior level of excellence. <a href="contact.html">Request Quote</a></p>
            </div>
        </section>
  <?php include('footer.php'); ?>
        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target=".header"><span class="icon flaticon-arrows"></span></div>
        <!-- jQuery js -->
        <script src="assets/jquery/jquery-1.11.3.min.js"></script>
        <!-- bootstrap js -->
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <!-- jQuery ui js -->
        <script src="assets/jquery-ui-1.11.4/jquery-ui.js"></script>
        <!-- owl carousel js -->
        <script src="assets/owl.carousel-2/owl.carousel.min.js"></script>
        <!-- jQuery validation -->
        <script src="assets/jquery-validation/dist/jquery.validate.min.js"></script>
        <!-- gmap.js helper -->
        <script src="http://maps.google.com/maps/api/js"></script>
        <!-- gmap.js -->
        <script src="assets/gmap.js"></script>
        <!-- mixit up -->
        <script src="assets/jquery.mixitup.min.js"></script>
        <script src="assets/jquery.fitvids.js"></script>
        <!-- revolution slider js -->
        <script src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <!-- fancy box -->
        <script src="assets/fancyapps-fancyBox/source/jquery.fancybox.pack.js"></script>
        <script src="assets/Polyglot-Language-Switcher-master/js/jquery.polyglot.language.switcher.js"></script>
        <script src="assets/nouislider/nouislider.js"></script>
        <script src="assets/bootstrap-touch-spin/jquery.bootstrap-touchspin.js"></script>
        <script src="assets/jquery-appear/jquery.appear.js"></script>
        <script src="assets/jquery.countTo.js"></script>
        <!-- Style-switcher  -->
        <script type="text/javascript" src="assets/jQuery.style.switcher.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.2/js.cookie.min.js"></script>
        <!-- theme custom js  -->
        <script id="mapScript" src="js/default-map.js"></script>
        <script src="js/custom.js"></script>
    </div>
</body>

</html>
