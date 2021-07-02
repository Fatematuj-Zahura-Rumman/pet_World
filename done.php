<?php require_once("conn.php"); ?>
<?php 
	
	$status = True;
	$did = $_POST["id"];

	$sql = "UPDATE orderstatus SET status='$status' WHERE d_id='$did'";
	mysqli_query($conn, $sql);

?>