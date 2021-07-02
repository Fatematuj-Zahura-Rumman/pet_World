<?php require_once("conn.php"); ?>
<?php include("header.php"); ?>

<!-- <!DOCTYPE html>
<html> -->
  <?php 
  if (isset($_SESSION["admin"])){
    if ($_SESSION["admin"]){
  ?>

<!-- <head>
	<title>Orders List</title>
</head>
<body> -->

	<div class="headline" style="position: relative;">
	  	<h1>ORDERS</h1>
	  </div>

    <?php 
          if(isset($_POST["notdone"])){
           $status = False;
           $did = $_POST["did"];

           $sql = "UPDATE orderstatus SET status='$status' WHERE d_id='$did'";
           mysqli_query($conn, $sql);

           $sql = "SELECT * FROM `delivered_by` WHERE d_id = '$did'";
           $result=$conn->query($sql);
           while($row = mysqli_fetch_assoc($result)){
              $uname = $row["name"];
           }

           $sql = "DELETE FROM $uname WHERE id='$did'";
           mysqli_query($conn, $sql);

           $sql = "DELETE FROM delivered_by WHERE d_id='$did'";
           mysqli_query($conn, $sql);
          }
    ?>

	<div class="container">
		<div class="table-responsive" style="margin-bottom: 20px;"> 
      		
      			<?php 
      				$sql = "SELECT DISTINCT d_id, total, email FROM `orders` ";
			        $result=$conn->query($sql);
			        while($row = mysqli_fetch_assoc($result)){
			        	$total = $row["total"];
			        	$email = $row["email"];
			        	$did = $row["d_id"];
			        	
			        	$sqli = "SELECT phone, address,fullname FROM `users` WHERE email='$email' ";
			        	$resulti=$conn->query($sqli);
			        	while($rowi = mysqli_fetch_assoc($resulti)){
			        		$address = $rowi["address"];
			        		$phone = $rowi["phone"];
			        		$name = $rowi["fullname"];
			        	}

			        	$sqli = "SELECT status FROM `orderstatus` WHERE d_id='$did' ";
			        	$resulti=$conn->query($sqli);
			        	while($rowi = mysqli_fetch_assoc($resulti)){
			        		$status = $rowi["status"];
			        	}


      			?><table class="table table-bordered shadow p-3 mb-5 bg-white rounded">
      				<?php 

      					if($status == 1){
      				?>
      					<tbody style="background-color: #84eba4;background-image: url(https://www.transparenttextures.com/patterns/always-grey.png);">
                  <tr>
                    <th>
                      <?php 
                      $sqll = "SELECT * FROM `delivered_by` WHERE d_id='$did' ";
                      $resultl=$conn->query($sqll);
                      while($rowl = mysqli_fetch_assoc($resultl)){
                        $uname = $rowl["name"];
                      }
                      ?>
                      <h5 style="font-weight: 900;background: var(--primary);color: white;display: inline-block;padding: 5px;">Delivered By: <span style="color: white;"><?php echo $uname; ?></span></h5>
      				<?php		
      					} else {
      				?>
      					<tbody style="background: white;">
                  <tr>
                    <th>
      				<?php
      					}
      				?>
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
                  <td><form method="post"><input type="hidden" name="did" value="<?php echo $did; ?>"><button class="btn btn-danger" name="notdone">Not Done</button></form></td>
                  <td colspan="3"><!-- <form method="post"><input type="hidden" name="did" value="<?php echo $did; ?>"><button class="btn btn-success" name="done" id="done">Done</button></form> --></td>
                </tr>
            </tbody>
          	</table> 
          <?php } ?>
         </div>
	</div>


<!-- </body> -->
<?php
  } 
  else {
  } }
  ?>
<!-- </html> -->


<?php include("footer.php"); ?>