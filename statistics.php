<?php require_once("conn.php"); ?>
<?php include("dheader.php"); ?>

<!-- <!DOCTYPE html>
<html> -->
  


<head>
	<title>Income</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<!-- <body> -->

	  </div>

	<?php 
		$number = 0;
		$total = 0;
		$tnumber = 0;
		$ttotal = 0;
		$user = $_SESSION["uname"];
		date_default_timezone_set("Asia/Dhaka");
		$today = date("d-m-Y");

		$sql = "SELECT * FROM `$user`";
		$result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            	$number = $number + 1;
            	$t = $row["earned"];
            	$total = $total + $t;
            }
        }

        $sql = "SELECT * FROM `$user` WHERE delivered_date='$today'";
		$result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            	$tnumber = $tnumber + 1;
            	$t = $row["earned"];
            	$ttotal = $ttotal + $t;
            }
        }
	?>
		<br><br>
		<div class="container" display="inline-block" style="width: 700px;">

			<table class="table table-bordered">
			  <thead>
			    <tr>
			      <th scope="col" ><p style="font-size: 20px;"><i class="fa fa-vcard"> Today's Statistics</p></th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td>
				      	<div class="order" style="background: #fd7e14cf;height: 100px;width: 230px;position: relative;display: inline-block;margin: 0 5%;">
							<div class="icon" style="background: var(--orange);position: absolute;height: 100px;width: 75px;top: 0;left: 0;padding: 25px;font-size: 30px;">
								<i class="fas fa-archive" style="color: white;"></i>
							</div>
							<div class="info" style="position: absolute;left: 100px;top: 8px;color: white;">
								<p style="font-size: 20px;margin: 0;">DELIVERED</p>
								<p class="num" style="text-align: center;font-size: 35px;"><?php echo number_format($tnumber); ?></p>
							</div>
						</div>
			      		<div class="order" style="background: #25963ed1;height: 100px;width: 230px;position: relative;display: inline-block;margin: 0 5%;">
							<div class="icon" style="background: #228939;position: absolute;height: 100px;width: 75px;top: 0;left: 0;padding: 25px;font-size: 30px;">
								<i class="far fa-money-bill-alt" style="color: white;"></i>
							</div>
							<div class="info" style="position: absolute;left: 100px;top: 8px;color: white;">
								<p style="font-size: 20px;margin: 0;text-align: center;">EARNED</p>
								<p style="text-align: center;font-size: 35px;"><span class="num"><?php echo number_format($ttotal); ?></span> TK</p>
							</div>
						</div>
			      </td>
			    </tr>
			    
			  </tbody>
			</table>
		</div>
			<div class="container" display="inline-block" style="width: 700px;">
			<table class="table table-bordered">
			  <thead>
			    <tr>
			      <th scope="col" ><p style="font-size: 20px;"><i class="fa fa-vcard-o"> Lifetime Statistics</p></th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td>
				      	<div class="order" style="background: #e83e8cd1;height: 100px;width: 230px;position: relative;display: inline-block;margin: 0 5%;">
							<div class="icon" style="background: var(--pink);position: absolute;height: 100px;width: 75px;top: 0;left: 0;padding: 25px;font-size: 30px;">
								<i class="fas fa-archive" style="color: white;"></i>
							</div>
							<div class="info" style="position: absolute;left: 100px;top: 8px;color: white;">
								<p style="font-size: 20px;margin: 0;">DELIVERED</p>
								<p class="num" style="text-align: center;font-size: 35px;"><?php echo number_format($number); ?></p>
							</div>
						</div>
			      		<div class="order" style="background: #6f42c1c2;height: 100px;width: 230px;position: relative;display: inline-block;margin: 0 5%;">
							<div class="icon" style="background: var(--purple);position: absolute;height: 100px;width: 75px;top: 0;left: 0;padding: 25px;font-size: 30px;">
								<i class="far fa-money-bill-alt" style="color: white;"></i>
							</div>
							<div class="info" style="position: absolute;left: 100px;top: 8px;color: white;">
								<p style="font-size: 20px;margin: 0;text-align: center;">EARNED</p>
								<p style="text-align: center;font-size: 35px;"><span class="num"><?php echo number_format($total); ?></span> TK</p>
							</div>
						</div>
			      </td>
			    </tr>
			  </tbody>
			</table>
		</div>





<script type="text/javascript">
    $(".num").counterUp({delay:5,time:500});
</script> 	

<?php include("footer.php"); ?>

<!-- </body> -->

<!-- </html> -->


