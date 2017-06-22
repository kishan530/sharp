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

$selected =  0;
$selectedMarker = null;
 if (isset($_POST["location"])) {
 
$selected = $_POST["location"];
} 
      
      $sql = "SELECT * FROM stores";
      $result = mysqli_query($con,$sql);
	  $markers = array();
	  while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
	 { 
		$markers[] = $row;
		if($selected == $row['id']){
			$selectedMarker = $row;
		}
	 }
	 if(count($markers)>0){
		 if(is_null($selectedMarker)){
			$selectedMarker = $markers[0];
		 }
	 }
	 
	 
      
      $count = mysqli_num_rows($result);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sharptools || Store Locator</title>
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Color css -->
    <link rel="stylesheet" id="jssDefault" href="css/color.css">
	 <style>
      #map {
        height: 500px;
		 width: 100%;
      }
	  
	  .inner-banner h2 {
		color: #fff;
    margin-bottom: 18px;
    font-size: 52px;
    line-height: 1.0788;
    font-weight: 200;
    letter-spacing: -.016em;
	    text-transform: capitalize;
	  }
    </style>
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
                            <li><a href="about.php">About</a></li>
                            
                            <li><a href="projects.php">Projects</a></li>
                            <li ><a href="products.php">Products</a></li>
                            <li><a href="recognition.php">Recognition</a></li>
                             <li><a href="blog.php">CSR</a></li>
							 <li class="active"><a href="store-locator.php">Store Locator</a></li>
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
            <div class="container text-center" style="margin-top: -75px;">
                <h2>Find a store</h2>
				<form action="store-locator.php" method="post" id="store-locator">
				<select class="form-control" name="location" id="select-location" onchange="this.form.submit()">
				<option >Select Location</option>
				<?php 
				if($count>0) {
						
				foreach($markers as $marker){?>
						<option value="<?php echo $marker['id']; ?>" <?php if($marker['id']==$selected) echo 'selected'; ?>><?php echo $marker['location']; ?></option>
				<?php }
				}
				?>
				<select>
				</form>
            </div>
        </section>
        <section class="bread-cumb">
            <div class="container text-center">
                <ul>
                    <li><a href="index.html">Factory Press</a></li>
                    <li><span>Store Locator</span></li>
                </ul>
            </div>
        </section>
        <section class="project-content section-padding">
            <div class="container">
                <div class="mixit-gallery">
                    
                    <div class="row">
					 <div class="col-md-12 mix col-sm-12 agricultural">
					 
						<div id="map"></div>
					</div>
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

		
 <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBldDn-EPh0UB-OzvStMojWKzU0RLNjFYE&callback=initMap">
    </script>	
	
	
	
    <script>
      var customLabel = {
        restaurant: {
          label: 'S'
        },
        bar: {
          label: 'B'
        }
      };

	<?php 
		if(count($markers)>0){	
		?>
		function initMap() {

		var lat = <?php echo $selectedMarker['lat']; ?>;
		var lng = <?php echo $selectedMarker['lng']; ?>;
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(lat, lng),
          zoom: 13
        });
        var infoWindow = new google.maps.InfoWindow;	
		markers = JSON.parse('<?php echo json_encode($markers); ?>');
		 markers.forEach(function(i){
			 var id = i.id;
              var name = i.name;
              var address = i.address;
              var point = new google.maps.LatLng(
                  parseFloat(i.lat),
                  parseFloat(i.lng));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
			  var p = document.createElement('p');
              p.textContent = name
              infowincontent.appendChild(p);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
              var icon = customLabel['restaurant'] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
              });
			  if(id==<?php echo $selected; ?>){
				infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
			  }
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
             
          });
      });
	  }
	  <?php 
	  }
	  ?>
    </script>
   
 
  </div>
</body>

</html>




