<?php require_once("conn.php"); ?>
<?php include("dheader.php") ?>

  <?php 
  if (isset($_SESSION["dauthen"])){  
    if ($_SESSION["dauthen"]){

		if(isset($_POST["done"])){
			$status = True;
			$did = $_POST["did"];
      $total = $_POST["total"];
      date_default_timezone_set("Asia/Dhaka");
      $today = date("d-m-Y");
      $earned = 100;
      $user = $_SESSION["uname"];

			$sql = "UPDATE orderstatus SET status='$status' WHERE d_id='$did'";
			mysqli_query($conn, $sql);

      $sqll = "INSERT INTO $user (id, total, earned, delivered_date) VALUES ('$did', '$total', '$earned', '$today')";
      mysqli_query($conn, $sqll);

      $sqll = "INSERT INTO delivered_by (name, d_id) VALUES ('$user', '$did')";
      mysqli_query($conn, $sqll);
		}

		// if(isset($_POST["notdone"])){
		// 	$status = False;
		// 	$did = $_POST["did"];

		// 	$sql = "UPDATE orderstatus SET status='$status' WHERE d_id='$did'";
		// 	mysqli_query($conn, $sql);
		// }

		?>

	<div class="headline" style="position: relative;margin-top: 0;">
	  	<h1 style="margin-top: 0;">Delivery List</h1>
	</div>

	<div class="container">
		<div class="table-responsive" style="margin-bottom: 20px;"> 

            <!-- retrieving delivery area -->
            <?php 
              $u = $_SESSION["uname"];
              $sql = "SELECT d_area, d_area2 FROM `deliveryman` where username='$u' ";
              $result=$conn->query($sql);
              while($row = mysqli_fetch_assoc($result)){
                  $area = $row["d_area"];
                  $area2 = $row["d_area2"];
              }
              ?>

              <h3 style="margin-bottom: 20px;">Delivery Area: <span style="color: red;"><?php echo "$area , $area2"; ?></span></h3>

              <?php
              $area = htmlspecialchars($area);
              $area = mysqli_real_escape_string($conn,$area);

              $sql = "SELECT DISTINCT d_id, total, fullname, phone, address FROM orders INNER JOIN users ON orders.email = users.email WHERE (`address` LIKE '%".$area."%')" or die(mysql_error()); //needs address check

			        $raw_results = mysqli_query($conn,$sql);
              if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
              while($row = mysqli_fetch_assoc($raw_results))
              {
			        	$total = $row["total"];
			        	//$email = $row["email"];
			        	$did = $row["d_id"];
			        	
			        	
			        	$address = $row["address"];
			        	$phone = $row["phone"];
			        	$name = $row["fullname"];
			        	

			        	$sqli = "SELECT status FROM `orderstatus` WHERE d_id='$did' ";
			        	$resulti=$conn->query($sqli);
			        	while($rowi = mysqli_fetch_assoc($resulti)){
			        		$status = $rowi["status"];
			        	}


      			?><table class="table table-bordered shadow p-3 mb-5 bg-white rounded">
      				<?php 

      					if($status == 1){
      				?>
      					<tbody style="background-color: #84eba4;background-image: url(https://www.transparenttextures.com/patterns/always-grey.png);display: none;">
      				<?php		
      					} else {
      				?>
      					<tbody style="background: white;">
      				<?php
      					}
      				?>
      				<tr>
      					<th>
      						<p style="font-weight: 900;">Delivery No.: <span style="color: red;"><?php echo $did; ?></span></p>
      						<p style="font-weight: 900;">Name: <span style="color: red;"><?php echo $name; ?></span></p>
      						<p style="font-weight: 900;">Mobile: <span style="color: red;"><?php echo $phone; ?></span></p>
      						<p style="font-weight: 900;">Address: <span style="color: red;"><?php echo $address; ?></span></p>
      					</th>
      					<th>Name</th>
      					<th>Quantity</th>
      					<th>Price</th>
      				</tr>
      				
      			<?php 
      				$sqlt = "SELECT * FROM `orders` WHERE d_id='$did' ";
			        $resultt=$conn->query($sqlt);
			        while($rowt = mysqli_fetch_assoc($resultt)){
			    ?>      
			    		<tr>
			    			<td> <img style="width: 70px;height: 90px;" class="card-img-top img-responsive" src="images/<?php echo $rowt["image"]; ?>"> </td>
			    			<td><?php echo $rowt["name"]; ?></td>
			    			<td><?php echo $rowt["quantity"]; ?></td>
			    			<td><?php echo $rowt["price"]; ?></td>
			    		</tr>
			    		 	
		      <?php }
      			?>
      					<tr>
      						<td colspan="2"><span style="font-weight: 900;"><b>* Delivery Charge: 100tk</b></span></td>
      						<td>Total</td>
      						<td style="color: red;font-weight: 900;">TK <?php echo $total; ?></td>
      					</tr>
      					<tr>
      						<td><!-- <form method="post"><input type="hidden" name="did" value="<?php echo $did; ?>"><button class="btn btn-danger" name="notdone">Not Done</button></form> --></td>
      						<td colspan="3">
                    <form method="post">
                      <input type="hidden" name="did" value="<?php echo $did; ?>">
                      <input type="hidden" name="total" value="<?php echo $total; ?>">            
                      <button class="btn btn-success" name="done" id="done">Done</button>
                    </form>
                  </td>
      					</tr>
            </tbody>
          	</table> 
          <?php }} else{

          } ?>
         </div>
	</div>

    <div class="container">
    <div class="table-responsive" style="margin-bottom: 20px;"> 

            <!-- retrieving delivery area -->
            <?php 
              $u = $_SESSION["uname"];
              $sql = "SELECT distinct d_area2 FROM `deliveryman` where username='$u' ";
              $result=$conn->query($sql);
              while($row = mysqli_fetch_assoc($result)){
                  $area2 = $row["d_area2"];
              }
              ?>

              <?php
              $area2 = htmlspecialchars($area2);
              $area2 = mysqli_real_escape_string($conn,$area2);

              $sql = "SELECT DISTINCT d_id, total, fullname, phone, address FROM orders INNER JOIN users ON orders.email = users.email WHERE (`address` LIKE '%".$area2."%')" or die(mysql_error()); //needs address check

              $raw_results = mysqli_query($conn,$sql);
              if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
              while($row = mysqli_fetch_assoc($raw_results))
              {
                $total = $row["total"];
                //$email = $row["email"];
                $did = $row["d_id"];
                
                
                $address = $row["address"];
                $phone = $row["phone"];
                $name = $row["fullname"];
                

                $sqli = "SELECT status FROM `orderstatus` WHERE d_id='$did' ";
                $resulti=$conn->query($sqli);
                while($rowi = mysqli_fetch_assoc($resulti)){
                  $status = $rowi["status"];
                }


            ?><table class="table table-bordered shadow p-3 mb-5 bg-white rounded">
              <?php 

                if($status == 1){
              ?>
                <tbody style="background-color: #84eba4;background-image: url(https://www.transparenttextures.com/patterns/always-grey.png);display: none;">
              <?php   
                } else {
              ?>
                <tbody style="background: white;">
              <?php
                }
              ?>
              <tr>
                <th>
                  <p style="font-weight: 900;">Delivery No.: <span style="color: red;"><?php echo $did; ?></span></p>
                  <p style="font-weight: 900;">Name: <span style="color: red;"><?php echo $name; ?></span></p>
                  <p style="font-weight: 900;">Mobile: <span style="color: red;"><?php echo $phone; ?></span></p>
                  <p style="font-weight: 900;">Address: <span style="color: red;"><?php echo $address; ?></span></p>
                </th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
              </tr>
              
            <?php 
              $sqlt = "SELECT * FROM `orders` WHERE d_id='$did' ";
              $resultt=$conn->query($sqlt);
              while($rowt = mysqli_fetch_assoc($resultt)){
          ?>      
              <tr>
                <td> <img style="width: 70px;height: 90px;" class="card-img-top img-responsive" src="images/<?php echo $rowt["image"]; ?>"> </td>
                <td><?php echo $rowt["name"]; ?></td>
                <td><?php echo $rowt["quantity"]; ?></td>
                <td><?php echo $rowt["price"]; ?></td>
              </tr>
                
          <?php }
            ?>
                <tr>
                  <td colspan="2"><span style="font-weight: 900;"><b>* Delivery Charge: 100tk</b></span></td>
                  <td>Total</td>
                  <td style="color: red;font-weight: 900;">TK <?php echo $total; ?></td>
                </tr>
                <tr>
                  <td><!-- <form method="post"><input type="hidden" name="did" value="<?php echo $did; ?>"><button class="btn btn-danger" name="notdone">Not Done</button></form> --></td>
                  <td colspan="3">
                    <form method="post">
                      <input type="hidden" name="did" value="<?php echo $did; ?>">
                      <input type="hidden" name="total" value="<?php echo $total; ?>">            
                      <button class="btn btn-success" name="done" id="done">Done</button>
                    </form>
                  </td>
                </tr>
            </tbody>
            </table> 
          <?php }} else{

          } ?>
         </div>
  </div>



	<?php
    } 
    else {
    	echo "<h3 style='color:red;text-align:centre;margin:8%;font-weight:900;'>Login to Continue!</h3>";
    }
  } else{
  		echo "<h3 style='color:red;text-align:centre;margin:8%;font-weight:900;'>Login to Continue!</h3>";
  }
  ?> 

<?php include("contact.php"); ?>
<?php include("footer.php"); ?>