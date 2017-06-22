<?php
   include("admin/config.php");
   session_start();
   $isLogin = false;
   if (isset($_SESSION['user'])) {
		$user = $_SESSION['user'];
		$isAdmin = $user['is_admin'];
		 $isLogin = true;
	}
   $error = '';
   $count = 0;    
      
      $sql = "SELECT * FROM projects WHERE active =1";
      $result = mysqli_query($con,$sql);
	  $products = array();
	  while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
	 { 
		$products[] = $row;
	 }
      
      $count = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sharptools || Projects</title>
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Color css -->
    <link rel="stylesheet" id="jssDefault" href="css/color.css">
</head>

<body>
    <div class="boxed_wrapper">
      <?php include("header.php"); ?>
        
        <section class="mainmenu-wrapper stricky">
            <div class="container">
                <nav class="mainmenu-holder pull-left">
                    <div class="nav-header">
                        <ul class="navigation">
                            <li> <a href="index.php"><i class="flaticon-icon-2144"></i> Home</a> </li>
                             <li ><a href="about.php">About</a></li>
							<li class="active"><a href="projects.php">Projects</a></li>
                            <li ><a href="products.php">Products</a></li>
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
        <section class="inner-banner" style="background-image: url(img/resources/inner-banner-2.jpg);">
            <div class="container text-center">
                <h2>Projects</h2>
            </div>
        </section>
        <section class="bread-cumb">
            <div class="container text-center">
                <ul>
                    <li><a href="index.html">Factory Press</a></li>
                    <li><span>Projects</span></li>
                </ul>
            </div>
        </section>
        <section class="news-content section-padding">
            <div class="container">
                <div class="mixit-gallery">
                    
                    <div class="row">
					<?php
						if($count>0) {
						
						foreach($products as $product){
						//echo var_dump($product);
						/*
							?>
						
                        <div class="col-md-4 mix col-sm-6 agricultural">
                            <div class="single-project-item">
                                <div class="img-box">
                                    <img src="admin/images/projects/<?php echo $product['image_path'] ?>" alt="<?php echo $product['name'] ?>" width="370" height="271" />
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="top-box">
                                                <div class="title">
                                                    <h3><?php echo $product['name'] ?></h3>
                                                </div>
                                            </div>
                                            <div class="bottom-box">
                                                <ul>
                                                    <li><a href="quick-view-project.php?id=<?php echo $product['id'] ?>" class="fancybox fancybox.ajax"><i class="fa fa-eye">  Quick view</i></a></li>
													 <li><a href="view-project.php?id=<?php echo $product['id'] ?>"><i class="fa fa-book"> read more</i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php */?>
						
						  <div class="col-md-6 mix col-sm-6 agricultural">
                           <div class="single-blog-post">
                            <div class="img-box">
                                <img src="admin/images/projects/<?php echo $product['image_path'] ?>" alt="<?php echo $product['name'] ?>" />
                            </div>
                            <div class="content-box">
                                <a href="view-project.php?id=<?php echo $product['id'] ?>"><h3><?php echo $product['name'] ?></h3></a>
                               
                                <p><?php echo $product['description'] ?></p>
                                <div class="bottom-box clearfix">
                                    <a href="view-project.php?id=<?php echo $product['id'] ?>" class="thm-btn pull-left">read more</a>
                                    <div class="share-box has-slide pull-right">
                                        <ul class="share-slide">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        </ul>
                                        <button><i class="fa fa-share-alt"></i></button>
                                    </div>
                                </div>
                            </div>
							</div>
                        </div>
						
						
						<?php
						}
							
					  }else {
						 echo "<span>No projects found </span>";
					  }
					?>
                        
      
                      
                    </div>
               
                </div>
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
        <script src="js/default-map.js"></script>
        <script src="js/custom.js"></script>
    </div>
</body>

</html>
