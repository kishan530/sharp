<?php
   include("admin/config.php");
   session_start();
   $isLogin = false;
   if (isset($_SESSION['user'])) {
		$user = $_SESSION['user'];
		 $userId = $user['id'];
		$isAdmin = $user['is_admin'];
		 $isLogin = true;
	}
	if(!$isLogin)
	header('Location:login.php');
   $errors = array();
    $messages = array();
   $message = '';
   if($_SERVER["REQUEST_METHOD"] == "POST") {
 
    if (!isset($_POST["quantity"])) {
               $errors[] = "Quantity is required";
       }
	  $today = date('Y-m-d H:i:s');
	  $quantity = $_POST["quantity"];
	 

     if(count($errors)==0){
	 
	  if(is_array($quantity)){
		$selectedProducts = $_POST['selected'];
		$productList = $_POST['productList'];
		//echo var_dump($productList);
		//exit();
		  foreach($selectedProducts as $product){
			$productName = $productList[$product];
			$productQuantity = $quantity[$product];
			
			$sql = "INSERT INTO orders (user_id, product_id, product_name, quantity, placed_at) VALUES ('$userId','$product' , '$productName', $productQuantity, '$today')";
		//echo $sql;
			if(mysqli_query($con, $sql)){
				$messages[] = "Order Placed successfully for ".$productName;
			} else{
				 $errors[]= "Could not able to place order for ".$productName;
			}
		  }
	  }else{
		$userId = mysqli_real_escape_string($con,$_POST['user_id']);       
		$productId = mysqli_real_escape_string($con,$_POST['product_id']); 
		$productName = mysqli_real_escape_string($con,$_POST['product_name']); 
		$quantity = mysqli_real_escape_string($con,$_POST['quantity']); 
	
		// Attempt insert query execution
		$sql = "INSERT INTO orders (user_id, product_id, product_name, quantity, placed_at) VALUES ('$userId','$productId' , '$productName', $quantity, '$today')";
		//echo $sql;
		if(mysqli_query($con, $sql)){
			$messages[] = "Order Placed successfully.";
		} else{
			 $errors[]= "Could not able to place order " . mysqli_error($con);
		}
	  }
	  

	  } 
	  
	  if(count($errors)>0){
		//echo var_dump($errors);
		//exit();
	  }
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

        <section class="bread-cumb">
            <div class="container text-center">
                <ul>
                    <li><a href="index.html">Factory Press</a></li>
					<li><a href="products.php">Products</a></li>
                    <li><span>Place Order</span></li>
                </ul>
            </div>
        </section>
        <section class="single-project-content section-padding">
            <div class="container">
                <div class="mixit-gallery">
                    
                    <div class="row">
						<div class="col-md-6 mix col-sm-6 agricultural">
						<?php
							if(count($errors)>0) {							
								foreach($errors as $error){
								?>
									<h3> <?php  echo $error; ?> </h3>
								<?php
								}
						  }
						  foreach($messages as $message){
						  ?>
							<h3> <?php  echo $message; ?> </h3>
							 <?php
						  }
						?>
                       <a href="products.php" class="thm-btn">View more products</a>
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
