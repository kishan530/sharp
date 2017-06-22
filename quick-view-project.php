<?php
   include("admin/config.php");
   session_start();
   $error = '';
   $count = 0;    
      $id = $_GET['id'];
      $sql = "SELECT * FROM projects WHERE active =1 and id=$id";
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
         $error = "<span>No projects found </span>";
      }
?>

 <div class="row">
					<?php
						if($count>0) {
						
							?>
							<div class="col-md-6 mix col-sm-6 agricultural">
                            <div class="single-project-item">
                                <div class="img-box">
                                    <img src="admin/images/projects/<?php echo $product['image_path'] ?>" alt="<?php echo $product['name'] ?>" />
                                   
                                </div>
                            </div>
							</div>
							<div class="col-md-6 mix col-sm-6">
								<h3><?php echo $product['name'] ?></h3>
								<div>
								<?php echo $product['description'] ?>
								</div>
							</div>
							<?php
							
					  }else {
						 echo "<span>No projects found </span>";
					  }
					?>
                       
                       
               
                </div>
