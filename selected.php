<?php require_once("conn.php"); ?>
<?php include("header.php"); ?>

<!-- <!DOCTYPE html>
<html>
<head>
  <title>Pet Paradise</title>
</head>
<body>
 -->
   <?php 
  if (isset($_SESSION["authen"])){  
    if ($_SESSION["authen"]){
      include("sidebar.php");
    } 
    else {
    }
  }
  ?>
	<div class="headline">
	  	<h1 style="text-transform: uppercase;">
	  		<?php
	  			if (isset($_GET["brand"])){
	  				echo $_GET["brand"];
	  			} else if (isset($_GET["pet"])){
	  				echo $_GET["pet"];
	  			} else if (isset($_GET["category"])){
            echo $_GET["category"];
          } else{

	  			}
	  		?>
	  	</h1>
	  </div>

	<div class="container">
	  	 <div class="row">
	  	 	<?php
	  	 		if (isset($_GET["brand"])){
	  	 			$brand = $_GET["brand"]; 
	  	 		} else{
	  	 			$brand="";
	  	 		}
				
				if(isset($_GET["pet"])){
	  	 			$pet = $_GET["pet"]; 
	  	 		} else{
	  	 			$pet="";
	  	 		}
        if(isset($_GET["category"])){
            $category = $_GET["category"]; 
          } else{
            $category = "";
          }

		      $sql = "SELECT * FROM `product` WHERE brand='$brand' OR pet='$pet' OR category='$category' ";
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

<!-- </body>
</html> -->
<?php include("message.php"); ?>
<?php include("contact.php"); ?>
<?php include("footer.php"); ?>