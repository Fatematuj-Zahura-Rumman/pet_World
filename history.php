 <?php require_once("conn.php"); ?>
 <?php include("header.php") ?>
  <?php 
  if (isset($_SESSION["authen"])){  
    if ($_SESSION["authen"]){
      include("sidebar.php");
    } 
    else {
    }
  }
  ?>
<!-- <head>
	<title>Pet Paradise | Purchase History</title>
</head> -->
  <?php 
  if (isset($_SESSION["authen"])){
    if ($_SESSION["authen"]){
  ?>
<!-- <body> -->
  <div style="text-align: center;margin: 2%;">
	<h2 style="text-transform: uppercase;">Purchase History</h2>
  </div>
  <div class="table-responsive" style="margin-bottom: 8%;">	
	<table class="table" style="width: 80%;margin: auto auto;">
	  <thead class="thead-dark">
	    <tr>
	      <th></th>
	      <th scope="col">Name</th>
	      <th scope="col">Quantity</th>
	      <th scope="col">Price</th>
	      <th scope="col">Purchase time and date</th>
	      <th></th>
	    </tr>
	  </thead>
	  <tbody>
	    <?php 
				    $user = $_SESSION["user"];
				    $sql = "SELECT * FROM $user";
        		$result = mysqli_query($conn, $sql);

        		if (mysqli_num_rows($result) > 0) {
            		while($row = mysqli_fetch_assoc($result)) {
            ?>
            			<tr class="drop-shadow1">
							<td><img style="width: 70px;height: 90px;" class="card-img-top img-responsive" src="images/<?php echo $row["image"]; ?>"></td>
							<td><a href="product.php?id=<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></a></td>
							<td><?php echo $row["quantity"]; ?></td>
							<td><?php echo $row["price"]; ?></td>
							<th colspan="2"><?php echo $row["purchased_time"]; ?></th>
						</tr>
            <?php   
            		}
        		} else {
           	?>		
           			<tr>
           				<td colspan="4"><?php echo "No items purchased yet!"; ?></td>
           			</tr>
           	<?php		
        		}
			?>
	  </tbody>
	</table>	
  </div>

<!-- 
</body> -->
  <?php
  } 
  else {
  ?>
  <h1 style="margin-top: 200px;text-align: center;"> <a style="color: red;" href="login.php">Login to continue</a> </h1>
  <?php
  }} else {
  ?>
  <h1 style="margin-top: 200px;text-align: center;"> <a style="color: red;" href="login.php">Login to continue</a> </h1>
  <?php
  }
  ?>


<?php include("footer.php") ?>