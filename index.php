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
    <title>Sharptools</title>
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
                            <li class="active">
                                <a href="index.php"><i class="flaticon-icon-2144"></i> Home</a>
                            </li>
                            <li><a href="about.php">About Us</a></li>
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
                <div class="search-box pull-right">
                   
                </div>
            </div>
        </section>
        <section class="rev_slider_wrapper ">
            <div id="slider1" class="rev_slider" data-version="5.0">
                <ul>
                    <li data-transition="slidingoverlayleft">
                        <img src="img/slider/1.jpg" alt="" width="1920" height="705" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">
                        <div class="tp-caption sfl tp-resizeme factory-caption-h1" data-x="right" data-hoffset="0" data-y="top" data-voffset="90" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="o:0" data-transform_out="o:0" data-start="500">
                            Factory Press - Solution
                            <br>for all Industrial Business
                        </div>
                        <div class="tp-caption sfl tp-resizeme factory-caption-p" data-x="right" data-hoffset="75" data-y="top" data-voffset="255" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="o:0" data-transform_out="o:0" data-start="500">
                            With over 20 years of experience & the company’s factory has a production’s
                            <br> capacity of 72,000 Metric Tons.
                        </div>
                        <div class="tp-caption sfl tp-resizeme factory-caption-p" data-x="right" data-hoffset="532" data-y="top" data-voffset="355" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="o:0" data-transform_out="o:0" data-start="500">
                            <a href="contact.html" class="thm-btn">Contact us</a>
                        </div>
                        <div class="tp-caption sfl tp-resizeme factory-caption-p" data-x="right" data-hoffset="342" data-y="top" data-voffset="355" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="o:0" data-transform_out="o:0" data-start="500">
                            <a href="services.html" class="thm-btn thm-blue-bg">Our Services</a>
                        </div>
                    </li>
                    <li data-transition="slidingoverlayleft">
                        <img src="img/slider/2.jpg" alt="" width="1920" height="705" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="2">
                        <div class="tp-caption sfl tp-resizeme factory-caption-h1" data-x="left" data-hoffset="0" data-y="top" data-voffset="90" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="o:0" data-transform_out="o:0" data-start="500">
                            Committed to Superior
                            <br>Quality and Results
                        </div>
                        <div class="tp-caption sfl tp-resizeme factory-caption-p" data-x="left" data-hoffset="0" data-y="top" data-voffset="255" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="o:0" data-transform_out="o:0" data-start="500">
                            With over 20 years of experience & the company’s factory has a production’s
                            <br> capacity of 72,000 Metric Tons.
                        </div>
                        <div class="tp-caption sfl tp-resizeme factory-caption-p" data-x="left" data-hoffset="0" data-y="top" data-voffset="355 " data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="o:0" data-transform_out="o:0" data-start="500">
                            <a href="contact.html" class="thm-btn">Contact us</a>
                        </div>
                        <div class="tp-caption sfl tp-resizeme factory-caption-p" data-x="left" data-hoffset="180" data-y="top" data-voffset="355" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="o:0" data-transform_out="o:0" data-start="500">
                            <a href="services.html" class="thm-btn thm-blue-bg">Our Services</a>
                        </div>
                    </li>
                    <li data-transition="slidingoverlayleft">
                        <img src="img/slider/3.jpg" alt="" width="1920" height="705" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="2">
                        <div class="tp-caption sfl tp-resizeme factory-caption-h1 text-center" data-x="center" data-hoffset="0" data-y="top" data-voffset="90" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="o:0" data-transform_out="o:0" data-start="500">
                            We are World-Class Designers and
                            <br>Industrial Engineers.
                        </div>
                        <div class="tp-caption sfl tp-resizeme factory-caption-p text-center" data-x="center" data-hoffset="0" data-y="top" data-voffset="255" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="o:0" data-transform_out="o:0" data-start="500">
                            With over 20 years of experience & the company’s factory has a
                            <br>production’s capacity of 72,000 Metric Tons.
                        </div>
                        <div class="tp-caption sfl tp-resizeme factory-caption-p text-center" data-x="center" data-hoffset="-94" data-y="top" data-voffset="355" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="o:0" data-transform_out="o:0" data-start="500">
                            <a href="contact.html" class="thm-btn">Contact us</a>
                        </div>
                        <div class="tp-caption sfl tp-resizeme factory-caption-p text-center" data-x="center" data-hoffset="94" data-y="top" data-voffset="355" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="o:0" data-transform_out="o:0" data-start="500">
                            <a href="contact.html" class="thm-btn thm-blue-bg">Our Services</a>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="call-to-action">
            <div class="container">
                <p>FactoryPress has consistently embraced innovation to provide a superior level of excellence. <a href="contact.html">Request Quote</a></p>
            </div>
        </section>
        <section class="our-features">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="single-our-feature">
                            <div class="overlay">
                                <div class="box">
                                    <div class="box-content">
                                        <a href="#" class="read-more">Read More <i class="fa fa-angle-double-right"></i></a>
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
                            <div class="overlay">
                                <div class="box">
                                    <div class="box-content">
                                        <a href="#" class="read-more">Our Team <i class="fa fa-angle-double-right"></i></a>
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
                            <div class="overlay">
                                <div class="box">
                                    <div class="box-content">
                                        <a href="services.html" class="read-more">Read More <i class="fa fa-angle-double-right"></i></a>
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
     
       
       
        <section class="testimonials-section section-padding">
            <div class="container">
                <div class="section-title">
                    <h2><span>Customer Reviews</span></h2>
                </div>
                <div class="owl-theme owl-carousel">
                    <div class="item">
                        <div class="single-testimonials">
                            <div class="review-text">
                                <p>They have got my project on time with the competition with a highly skilled, well-organized and experienced team of professional Engineers. So, that our company is looking forward to give more projects.</p>
                            </div>
                            <div class="info-box">
                                <div class="img-box">
                                    <img src="img/testimonials/1.png" alt="Awesome Image" />
                                </div>
                                <div class="content-box">
                                    <h3><span class="name">Mark Vilton</span> - Villo Steels Ceo </h3>
                                    <ul class="star">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-testimonials">
                            <div class="review-text">
                                <p>They have got my project on time with the competition with a highly skilled, well-organized and experienced team of professional Engineers. So, that our company is looking forward to give more projects.</p>
                            </div>
                            <div class="info-box">
                                <div class="img-box">
                                    <img src="img/testimonials/2.png" alt="Awesome Image" />
                                </div>
                                <div class="content-box">
                                    <h3><span class="name">Clinto James</span> - NS EcoSystem - Project Manager </h3>
                                    <ul class="star">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-testimonials">
                            <div class="review-text">
                                <p>They have got my project on time with the competition with a highly skilled, well-organized and experienced team of professional Engineers. So, that our company is looking forward to give more projects.</p>
                            </div>
                            <div class="info-box">
                                <div class="img-box">
                                    <img src="img/testimonials/1.png" alt="Awesome Image" />
                                </div>
                                <div class="content-box">
                                    <h3><span class="name">Mark Vilton</span> - Villo Steels Ceo </h3>
                                    <ul class="star">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-testimonials">
                            <div class="review-text">
                                <p>They have got my project on time with the competition with a highly skilled, well-organized and experienced team of professional Engineers. So, that our company is looking forward to give more projects.</p>
                            </div>
                            <div class="info-box">
                                <div class="img-box">
                                    <img src="img/testimonials/2.png" alt="Awesome Image" />
                                </div>
                                <div class="content-box">
                                    <h3><span class="name">Clinto James</span> - NS EcoSystem - Project Manager </h3>
                                    <ul class="star">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact-section section-padding">
            <div class="container">
                <div class="section-title">
                    <h2><span>Contact</span></h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p class="large">We are the world class engineering manufacturer providing the highest quality products, services and solutions to our customers.</p>
                        <p><span class="bold">For Business:</span> For Business inquiry fill our short feedback form or you can also send us an <a href="#">email</a> and we’ll get in touch shortly, or Troll Free Number - <span class="highlight">(+91) 00-700-6202.</span></p>
                        <p><span class="bold">For Customer Support</span> : If you have any question about Factory Press WordPress or how we can support your business, Send us an <a href="#">email</a> and we’ll get in touch shortly, or Contact via <a href="#">Support Forum</a> and also phone - <span class="highlight">(+91) 00-700-6203 to 6206</span></p>
                        <p><span class="bold">Office Hours</span> : 07:30 and 19:00 Monday to Saturday, Sunday - Holiday</p>
                    </div>
                    <div class="col-md-6">
                        <form action="inc/sendemail.php" class="home-contact-form contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="name" placeholder="Your Name *">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="email" placeholder="Your Email *">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="phone" placeholder="Phone">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="solution" placeholder="Solution">
                                </div>
                                <div class="col-md-12">
                                    <textarea name="requirement" placeholder="Your Requirements *"></textarea>
                                    <button type="submit">submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="client-carousel owl-carousel owl-theme">
                    <div class="item">
                        <img src="img/clients/1.jpg" alt="Awesome Image" />
                    </div>
                    <div class="item">
                        <img src="img/clients/2.jpg" alt="Awesome Image" />
                    </div>
                    <div class="item">
                        <img src="img/clients/3.jpg" alt="Awesome Image" />
                    </div>
                    <div class="item">
                        <img src="img/clients/4.jpg" alt="Awesome Image" />
                    </div>
                    <div class="item">
                        <img src="img/clients/5.jpg" alt="Awesome Image" />
                    </div>
                </div>
            </div>
        </section>
        <section class="home-google-map">
            <div class="google-map" id="contact-google-map" data-map-lat="40.712784" data-map-lng="-74.005941" data-icon-path="img/theme/map-marker.png" data-map-title="Brooklyn, New York, United Kingdom" data-map-zoom="12"></div>
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
        <script src="https://maps.googleapis.com/maps/api/js?sensor=true&v=3"></script>
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
        <script id="map-script" src="js/default-map.js"></script>
        <script src="js/custom.js"></script>
    </div>
</body>

</html>
