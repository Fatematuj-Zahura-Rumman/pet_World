<?php require_once("conn.php"); ?>
<?php include("header.php"); ?>

<?php 
	if(isset($_SESSION["admin"])){
		if($_SESSION["admin"]){

?>

<?php 
	// update stock
	if(isset($_POST["stk"])){
		$id = $_POST["id"];
		$stk = $_POST["stock"];

		$sql = "UPDATE product SET stock='$stk' WHERE id='$id'";

		if (mysqli_query($conn, $sql)) {
			$message = "Stock Updated!";
		} else {
			$message = "Error: " . $sql . "<br/>" . mysqli_error($conn);
		}

	}
?>

<?php 
	// update new price
	if(isset($_POST["np"])){
		$id = $_POST["id"];
		$np = $_POST["nprice"];

		$sql = "UPDATE product SET n_price='$np' WHERE id='$id'";

		if (mysqli_query($conn, $sql)) {
			$message = "New Price Updated!";
			echo "<script type='text/javascript'>alert('$message');</script>";
		} else {
			$message = "Error: " . $sql . "<br/>" . mysqli_error($conn);
			echo "<script type='text/javascript'>alert('$message');</script>";
		}

	}
?>

<?php 
	// update old price
	if(isset($_POST["op"])){
		$id = $_POST["id"];
		$op = $_POST["oprice"];

		$sql = "UPDATE product SET o_price='$op' WHERE id='$id'";

		if (mysqli_query($conn, $sql)) {
			$message = "Old Price Updated!";
			echo "<script type='text/javascript'>alert('$message');</script>";
		} else {
			$message = "Error: " . $sql . "<br/>" . mysqli_error($conn);
			echo "<script type='text/javascript'>alert('$message');</script>";
		}

	}
?>
<!-- <head>
  <title>Pet Paradise | Update Product</title>
</head>

<body> -->

	<div class="container" style="padding: 2%;font-weight: 900;padding-top: 5px;">
		<h3 style="text-transform: uppercase;margin-top: 0;color: darkred;">Update your products here</h3>

		<div class="table-responsive" style="margin-bottom: 20px;"> 
	    <table class="table table-bordered">
	            <tr>
	              <th>Image</th>
	              <th>Name</th>
	              <th>Old Price</th>
	              <th>New Price</th>
	              <th>Stock</th>
	            </tr>
	            <?php
	          	$sql = "SELECT * FROM product ";
	          	$result = mysqli_query($conn, $sql);

		        if (mysqli_num_rows($result) > 0) {
		            while($row = mysqli_fetch_assoc($result)) {  
	            ?>
	            <tr>
	              <td><img style="width: 70px;height: 90px;" class="card-img-top img-responsive" src="images/<?php echo $row["image"]; ?>"></td>
	              <td><?php echo $row["name"]; ?></td>
	              <td>
	              	<?php echo $row["o_price"]; ?>
	              	<form method="POST">
						<input type="number" name="oprice">
						<input type="hidden" name="id" value="<?php echo $row["id"]; ?>"> <br>
						<button type="submit" name="op">Update</button>
					</form>	
	              </td>
	              <td>
	              	<?php echo $row["n_price"]; ?>
	              	<form method="POST">
						<input type="number" name="nprice">
						<input type="hidden" name="id" value="<?php echo $row["id"]; ?>"> <br>
						<button type="submit" name="np">Update</button>
					</form>		
	              </td>
	              <td>
	              	<?php echo $row["stock"]; ?><br>
			      	<form method="POST">
						<input type="number" name="stock">
						<input type="hidden" name="id" value="<?php echo $row["id"]; ?>"> <br>
						<button type="submit" name="stk">Update</button>
					</form>		
	              </td>
				</tr>
	            <?php }} ?>
	   	</table>
	  </div>
	</div>
<!-- </body> -->

<?php 
		}
	}
 ?>

<?php include("footer.php"); ?>