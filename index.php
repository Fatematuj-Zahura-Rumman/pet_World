<?php require_once("conn.php"); ?>
<?php include("header.php"); ?>


<!-- <!DOCTYPE html>
<html>
<head>
	<title>Pet Paradise</title>
  
</head>
<body> -->

	<?php include("slideshow.html"); ?><br>

  <?php 
  if (isset($_SESSION["authen"])){  
    if ($_SESSION["authen"]){
      include("sidebar.php");
    } 
    else {
    }
  }
  ?>

    <section class="brands">
	  	<div class="team-area">
	  <div class="container">
	    <div class="row">
	      <div class="col-md-12">
	        <div class="section-title text-center">
	          <h2 style="font-weight: 600;">Top Brands</h2>
	          <p>Shop for a specific Brand</p>
	        </div>
	      </div>

      <!--== Single Team Item ==-->
      <div class="col-md-2" data-aos="zoom-in-down" data-aos-duration="1000">
        <div class="single-team">
          <div class="team-img">
            <img src="images/brands/sanicat.jpg" alt="" class="img-responsive">
          </div>
          <div class="team-content">
            <div class="team-info">
              <h3>SANICAT</h3>
            </div>
            <p class="team-text">Check out this brand...</p>
            <a href="selected.php?brand=<?php echo "sanicat"; ?>" class="petbtn">See</a>
          </div>
        </div>
      </div>
      <!--== Single Team Item ==-->
      <div class="col-md-2" data-aos="zoom-in-down" data-aos-duration="1000">
        <div class="single-team">
          <div class="team-img">
            <img src="images/brands/meo.jpg" alt="" class="img-responsive">
          </div>
          <div class="team-content">
            <div class="team-info">
              <h3>MEO</h3>
            </div>
            <p class="team-text">Check out this brand...</p>
            <a href="selected.php?brand=<?php echo "meo"; ?>" class="petbtn">See</a>
          </div>
        </div>
      </div>
      <!--== Single Team Item ==-->
      <div class="col-md-2" data-aos="zoom-in-down" data-aos-duration="1000">
        <div class="single-team">
          <div class="team-img">
            <img src="images/brands/brit.png" alt="" class="img-responsive">
          </div>
          <div class="team-content">
            <div class="team-info">
              <h3>BRIT</h3>
            </div>
            <p class="team-text">Check out this brand...</p>
            <a href="selected.php?brand=<?php echo "brit"; ?>" class="petbtn">See</a>
          </div>
        </div>
      </div>
      <!--== Single Team Item ==-->
      <div class="col-md-2" data-aos="zoom-in-down" data-aos-duration="1000">
        <div class="single-team" style="padding-bottom: 30px;">
          <div class="team-img">
            <img src="images/brands/whiskas.png" alt="" class="img-responsive">
          </div>
          <div class="team-content">
            <div class="team-info">
              <h3>WHISKAS</h3>
            </div>
            <p class="team-text">Check out this brand...</p>
            <a href="selected.php?brand=<?php echo "whiskas"; ?>" class="petbtn">See</a>
          </div>
        </div>
      </div>
      <!--== Single Team Item ==-->
      <div class="col-md-2" data-aos="zoom-in-down" data-aos-duration="1000">
        <div class="single-team">
          <div class="team-img">
            <img src="images/brands/smart.jpg" alt="" class="img-responsive">
          </div>
          <div class="team-content">
            <div class="team-info">
              <h3>SmartHeart</h3>
            </div>
            <p class="team-text">Check out this brand...</p>
            <a href="selected.php?brand=<?php echo "smart heart"; ?>" class="petbtn">See</a>
          </div>
        </div>
      </div>
      <!--== Single Team Item ==-->
      <div class="col-md-2" data-aos="zoom-in-down" data-aos-duration="1000">
        <div class="single-team">
          <div class="team-img">
            <img src="images/brands/gim.jpg" alt="" class="img-responsive">
          </div>
          <div class="team-content">
            <div class="team-info">
              <h3>GIMCAT</h3>
            </div>
            <p class="team-text">Check out this brand...</p>
            <a href="selected.php?brand=<?php echo "gimcat"; ?>" class="petbtn">See</a>
          </div>
        </div>
      </div>
	    </div>
	  </div>
	</div>
	  </section>

	  <section class="pets">
	  	<div class="team-area">
	  <div class="container">
	    <div class="row">
	      <div class="col-md-12">
	        <div class="section-title text-center">
	          <h2 style="font-weight: 600;">PETS</h2>
	          <p>Shop for a specific pet</p>
	        </div>
	      </div> 

      <!--== Single Team Item ==-->
      <div class="col-md-3" data-aos="fade-right" data-aos-duration="1000">
        <div class="single-team">
          <div class="team-img">
            <img src="https://cdn.pixabay.com/photo/2018/09/22/17/05/ara-3695678_1280.jpg" alt="" class="img-responsive">
          </div>
          <div class="team-content">
            <div class="team-info">
              <h3>Bird</h3>
            </div>
            <p class="team-text">Foods and Accessories</p>
            <a href="selected.php?pet=<?php echo "bird"; ?>" class="petbtn">Shop</a>
          </div>
        </div>
      </div>
      <!--== Single Team Item ==-->
      <div class="col-md-3" data-aos="fade-right" data-aos-duration="1000">
        <div class="single-team">
          <div class="team-img">
            <img src="https://cdn.pixabay.com/photo/2015/12/14/10/26/cat-1092371_1280.jpg" alt="" class="img-responsive">
          </div>
          <div class="team-content">
            <div class="team-info">
              <h3>Cat</h3>
            </div>
            <p class="team-text">Foods and Accessories</p>
            <a href="selected.php?pet=<?php echo "cat"; ?>" class="petbtn">Shop</a>
          </div>
        </div>
      </div>
      <!--== Single Team Item ==-->
      <div class="col-md-3" data-aos="fade-left" data-aos-duration="1000">
        <div class="single-team">
          <div class="team-img">
            <img src="https://cdn.pixabay.com/photo/2016/12/13/05/15/puppy-1903313_1280.jpg" alt="" class="img-responsive">
          </div>
          <div class="team-content">
            <div class="team-info">
              <h3>Dog</h3>
            </div>
            <p class="team-text">Foods and Accessories</p>
            <a href="selected.php?pet=<?php echo "dog"; ?>" class="petbtn">Shop</a>
          </div>
        </div>
      </div>
      <!--== Single Team Item ==-->
      <div class="col-md-3" data-aos="fade-left" data-aos-duration="1000">
        <div class="single-team">
          <div class="team-img">
            <img src="https://cdn.pixabay.com/photo/2015/05/23/00/51/cichlid-780124_1280.jpg" alt="" class="img-responsive">
          </div>
          <div class="team-content">
            <div class="team-info">
              <h3>Fish</h3>
            </div>
            <p class="team-text">Foods and Accessories</p>
            <a href="selected.php?pet=<?php echo "fish"; ?>" class="petbtn">Shop</a>
          </div>
        </div>
      </div>
	    </div>
	  </div>
	</div>
	  </section>


	  <div class="headline">
	  	<div class="pic">
	  		<img src="images/pet/dog.png">
	  	</div>
	  	<h1>Best authentic imported products</h1>
	  </div>

	  <div class="container food">
	  	 <div class="row">
	  	 	<?php 
		      $sql = "SELECT * FROM `product` ORDER BY rand() ";
		        $result=$conn->query($sql);
		        while($row = mysqli_fetch_assoc($result))
		        {
		    ?>		
		    	 <a href="product.php?id=<?php echo $row["id"]; ?>&name=<?php echo $row["name"]; ?>">
		     	 <div class="col-sm-3">      
		          <form id="form" name="form">
		            <div class="card card-body" style="">
		              <img class="card-img-top img-responsive" src="images/<?php echo $row["image"]; ?>" /><br />

                  <?php 

                    $o = $row["o_price"];
                    $n = $row["n_price"];
                    if ($o !=0 ){
                      $d = 100 - (($n*100)/$o);
                  ?>
                      <span class="onsale">-<?php echo number_format($d); ?>%</span>
                  <?php } else {} ?>

		              <h4 class="text-info"><?php echo $row["name"]; ?></h4>

		          	  <h4 class="text-success" style="font-weight: 600;"> 
		          	  	<?php 
		          	  		$op = $row["o_price"];
		          	  		if($op != 0 ) { 
		          	  	?>
		          	  	<span class="o_price">৳ <?php echo $row["o_price"]; ?></span> <?php } ?>  ৳ <?php echo $row["n_price"]; ?>
		          	  </h4></a>
                  <?php if (isset($_SESSION["authen"])){if ($_SESSION["authen"]){ ?>
                  <span style="font-weight: 600;font-size: 20px;color: var(--pink);">Quantity: </span>
                  <input type="number"  id="quantity<?php echo $row["id"]; ?>" name="quantity" value="1" style="width: 18%;text-align: center;margin-left: 40%;font-weight: 900;">
                    <?php
                      $stock = $row["stock"]; 
                      if($stock>0){ ?>
                        <span style="color: red;font-weight: 900;margin-top: 5px;">
                        <?php echo "# ".$stock." left in stock"; ?>
                      </span><br><?php
                      } else { ?>
                        <span class="stck">Out of stock</span>
                      <?php
                      }
                     ?>
                  

		              <input type="hidden" name="id" id="id<?php echo $row["id"]; ?>" value="<?php echo $row["id"]; ?>" />
                  <input type="hidden" name="hidden_name" id="hidden_name<?php echo $row["id"]; ?>" value="<?php echo $row["name"]; ?>" />
              		  <input type="hidden" name="hidden_price" id="hidden_price<?php echo $row["id"]; ?>" value="<?php echo $row["n_price"]; ?>" />
                    <input type="hidden" name="hidden_stk" id="hidden_stk<?php echo $row["id"]; ?>" value="<?php echo $row["stock"]; ?>" />
              		  <input type="hidden" name="hidden_img" id="hidden_img<?php echo $row["id"]; ?>" value="<?php echo $row["image"]; ?>" />
                    <p class="rslt" id="result<?php echo $row["id"]; ?>"></p>
					    <?php
                $stock = $row["stock"]; 
                if($stock>0){
              ?>
		              <input id="<?php echo $row["id"]; ?>" type="button" value="Add to Cart"  style="margin-top: 5px;" class="butn btn-primary add_to_cart" />
              <?php
                } else {
              ?>
                  <p style="font-size: 15px;color: green;font-weight: 900;margin-top: 10px;">
                    Stock coming soon, stay with us!
                  </p>
              <?php
                }
              } else {
              ?>
                <a href="login.php" style="color: red;font-size: 20px;font-weight: 900;">Sign in to continue</a>
              <?php
              }} else{
                ?>
                <a href="login.php" style="color: red;font-size: 20px;font-weight: 900;">Sign in to continue</a>
              <?php
              }
              ?>

		            </div>
		          </form>
        
		        </div>
		    <?php
		        }
		     ?>
        
	  	 </div>
	  </div>

	  <div class="headline" style="position: relative;" data-aos="fade-up" data-aos-duration="1000">
	  	<div class="pic2">
	  		<img src="images/phone.png">
	  	</div>
	  	<h1>Call our hotline number for enquiry </h1> <a href=""><p>017XXXXXXXX</p></a>
	  </div>


    <div class="headline">
      <?php
        if(isset($_SESSION["em"])){
          $email = $_SESSION["em"];
          $sql = "SELECT address FROM `users` WHERE email='$email' ";
            $result=$conn->query($sql);
            while($row = mysqli_fetch_assoc($result))
            {
                $address = $row["address"];
                if($address == ""){
      ?>
                <a href="profile.php"><h1>Please update your address <i class="far fa-building"></i></h1></a>
      <?php
                  
                } else {
      ?>
                <h1>Failing to find your product? Hit the search bar...  <i class="fas fa-search"></i></h1>
      <?php
                }
            }
          }
        ?>
    </div>




<!-- </body>
</html> -->

<?php include("message.php"); ?>
<?php include("contact.php"); ?>
<?php include("footer.php"); ?>




<!-- SELECT name, SUM(quantity) AS TotalQuantity
FROM orders
GROUP BY name
ORDER BY SUM(quantity) DESC
LIMIT 5 -->