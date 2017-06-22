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
      $id = $_GET['id'];
      $sql = "SELECT * FROM products WHERE id=$id";
      $result = mysqli_query($con,$sql);
	  $products = array();
	  while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
	 { 
		$products[] = $row;
	 }
      
      $count = mysqli_num_rows($result);
	  if($count>0) {
         $product = $products[0];
      }else {
         $error = "<span>No Products found </span>";
      }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sharptools || products</title>
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
                            <li> <a href="index.php"><i class="flaticon-icon-2144"></i> Home</a> </li>
                            <li><a href="about.php">About</a></li>
                            
                            <li><a href="projects.php">Projects</a></li>
                            <li class="active"><a href="products.php">Products</a></li>
                            <li><a href="recognition.php">Recognition</a></li>
                             <li><a href="blog.php">CSR</a></li>
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
                <h2><?Php if($count>0) echo $product['name'] ?></h2>
            </div>
        </section>
        <section class="bread-cumb">
            <div class="container text-center">
                <ul>
                    <li><a href="index.html">Factory Press</a></li>
					<li><a href="products.php">Products</a></li>
                    <li><span><?Php if($count>0) echo $product['name'] ?></span></li>
                </ul>
            </div>
        </section>
        <section class="single-project-content section-padding">
            <div class="container">
                <div class="mixit-gallery">
                    
                    <div class="row">
					<?php
						if($count>0) {
						
							?>
							<div class="col-md-6 mix col-sm-6 agricultural">
                            <div class="single-project-item">
                                <div class="img-box">
                                    <img src="admin/images/products/<?php echo $product['image_path'] ?>" alt="<?php echo $product['name'] ?>" />
                                   
                                </div>
                            </div>
							</div>
							<div class="col-md-6 mix col-sm-6">
								<h3><?php echo $product['name'] ?></h3>
								<div>
								<?php echo $product['description'] ?>
								</div>
								<?php
									$userId = null;
								   if (isset($_SESSION['user'])) {
									$user = $_SESSION['user'];
									$isAdmin = $user['is_admin'];
										$userId = $user['id'];
									 if($product['active']) { 
									
											?>
									<form action="place-order.php" class="place-order" method="POST">
										<input type="hidden" name="product_id" value="<?php echo $product['id'] ?>">
										<input type="hidden" name="product_name" value="<?php echo $product['name'] ?>">
										<input type="hidden" name="user_id" value="<?php echo $userId ?>">
										<div class="row">
										<div class="col-lg-12 col-md-12">
											<div class="form-grp">
												<label>Quatity</label>
												<input type="text" name="quantity" reqired>
											</div>
										</div>
                       
										<div class="col-lg-12 col-md-12">
											<div class="form-grp">
												<label>&nbsp;</label>
												<div class="box">
													<button type="submit">Place Order</button>
												   
												</div>
											</div>
										</div>
									</div>
								</form>
								<?php 
								}
								}
								?>
										
							</div>
							<?php
							
					  }else {
						 echo "<span>No Products found </span>";
					  }
					?>
                       
                       
               

			   
			   
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
