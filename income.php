<?php require_once("conn.php"); ?>
<?php include("header.php"); ?>

<!-- <!DOCTYPE html>
<html> -->
  <?php 
  if (isset($_SESSION["admin"])){
    if ($_SESSION["admin"]){
  ?>


<head>
	<title>Income</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
</head>
<!-- <body> -->

	<div class="headline" style="position: relative;">
	  	<h1>Income</h1>
	  </div>

	<?php
		$order = 0; 
		$number = 0;
		$total = 0;
		$totald = 0;
		$sql = "SELECT DISTINCT total,d_id FROM orders";
		$result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            	$order = $order + 1;
            }
        }

        $sql = "SELECT DISTINCT d_id, name FROM delivered_by";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            	$user = $row["name"];
            	$did = $row["d_id"];
            	$number = $number + 1;

            	$sqll = "SELECT total FROM `$user` WHERE id='$did'";
            	$resultt = mysqli_query($conn, $sqll);

		        if (mysqli_num_rows($resultt) > 0) {
		            while($roww = mysqli_fetch_assoc($resultt)) {
		            	$t = $roww["total"];
		            	$total = $total + $t;
		            	$td = $roww["total"] - 100;
		            	$totald = $totald + $td;
		            }
		        }
        	}
        }


	?>

	<div class="container" style="padding: 5% 3%">
		<div class="row">
			<div class="col-sm" style="background: #fd7e14cf;height: 100px;width: 250px;position: relative;display: inline-block;margin: 1% 5%;">
				<div class="icon" style="background: var(--orange);position: absolute;height: 100px;width: 75px;top: 0;left: 0;padding: 25px;font-size: 30px;">
					<i class="fas fa-archive" style="color: white;"></i>
				</div>
				<div class="info" style="position: absolute;left: 100px;top: 8px;color: white;">
					<p style="font-size: 20px;margin: 0;">ORDER PENDING</p>
					<p class="num" style="text-align: center;font-size: 35px;"><?php echo number_format($order-$number); ?></p>
				</div>
			</div>
			<div class="col-sm" style="background: #e83e8cd1;height: 100px;width: 230px;position: relative;display: inline-block;margin: 1% 5%;">
				<div class="icon" style="background: var(--pink);position: absolute;height: 100px;width: 75px;top: 0;left: 0;padding: 25px;font-size: 30px;">
					<i class="fas fa-archive" style="color: white;"></i>
				</div>
				<div class="info" style="position: absolute;left: 100px;top: 8px;color: white;">
					<p style="font-size: 20px;margin: 0;">DELIVERED</p>
					<p class="num" style="text-align: center;font-size: 35px;"><?php echo number_format($number); ?></p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm" style="background: #6f42c1c2;height: 100px;width: 230px;position: relative;display: inline-block;margin: 1% 5%;">
				<div class="icon" style="background: var(--purple);position: absolute;height: 100px;width: 75px;top: 0;left: 0;padding: 25px;font-size: 30px;">
					<i class="far fa-money-bill-alt" style="color: white;"></i>
				</div>
				<div class="info" style="position: absolute;left: 100px;top: 8px;color: white;">
					<p style="font-size: 20px;margin: 0;text-align: center;">INCOME</p>
					<p style="text-align: center;font-size: 35px;"><span class="num"><?php echo number_format($totald); ?></span> TK</p>
				</div>
			</div>
			<div class="col-sm" style="background: #17a2b8c7;height: 100px;width: 250px;position: relative;display: inline-block;margin: 1% 5%;">
				<div class="icon" style="background: var(--cyan);position: absolute;height: 100px;width: 75px;top: 0;left: 0;padding: 25px;font-size: 30px;">
					<i class="fas fa-money-bill-alt" style="color: white;"></i>
				</div>
				<div class="info" style="position: absolute;left: 100px;top: 8px;color: white;">
					<p style="font-size: 20px;margin: 0;">INCOME   <span style="font-size: 15px;font-weight: 900;"> (inc. delivery)</span></p>
					<p style="text-align: center;font-size: 35px;"><span class="num"><?php echo number_format($total); ?></span> TK</p>
				</div>
			</div>
		</div>

	</div>

<script type="text/javascript">
    $(".num").counterUp({delay:10,time:1000});
</script> 	


<!-- </body> -->
<?php
  } 
  else {
  } }
  ?>
<!-- </html> -->


<?php include("footer.php"); ?>