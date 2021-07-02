 <?php require_once("conn.php"); ?>
<?php include("header.php"); ?>

<!-- <!DOCTYPE html>
<html> -->
  <?php 
  if (isset($_SESSION["admin"])){
    if ($_SESSION["admin"]){
  ?>

<!-- <head>
	<title>Messages</title>
</head>
<body> -->

	<div class="headline" style="position: relative;">
	  	<h1>Messages</h1>
	  </div>



	<div class="container">
		<div class="table-responsive" style="margin-bottom: 20px;"> 
      		
      			<?php 
      				$sql = "SELECT * FROM `customermessage` ";
			        $result=$conn->query($sql);
			        while($row = mysqli_fetch_assoc($result)){ ?>
			        	
			        <table class="table table-bordered shadow p-3 mb-5 bg-white rounded">
						<tbody style="background: white;">
      					<tr>
      					<th>Email</th>
      					<th>Phone</th>
      					<th>Subject</th>
      					<th colspan="3">Message</th>
      					</tr>
      					<tr>
      						<td><?php echo $row["email"]; ?></td>
      						<td><?php echo $row["phone"]; ?></td>
      						<td><?php echo $row["subject"]; ?></td>
      						<td colspan="3"><?php echo $row["message"]; ?></td>
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