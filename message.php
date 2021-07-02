<?php require_once("conn.php"); ?>
<?php   if (isset($_SESSION["authen"])){
    if ($_SESSION["authen"]){
  ?>
<!-- <!DOCTYPE html>
<html> -->
<head>
	<style type="text/css">
		.message{
			background: #28a745;
			padding: 2%;
		}
	</style>
</head>
<!-- <body> -->
     <br>

	 	<div class="container-fluid message">							
	 	<form method="POST">
	 		<h2 style="text-align: center;color: white;font-weight: 900;margin-bottom: 20px;">Tell us, how we can get better?<br>Also you can request for a particular product!</h2>
	 		<div class="form-group">
                <textarea style="width: 50%;margin: auto;" class="form-control textarea" rows="1" name="subject" id="Subject" placeholder="Subject" required></textarea>
            </div>
	 		<div class="form-group">
                <textarea style="width: 50%;margin: auto;" class="form-control textarea" rows="3" name="Message" id="Message" placeholder="Message..." required></textarea>
            </div>
            <button type="submit"  class="btn btn-danger" name="send" style="margin-left: 25%;">Send</button>
	 	</form>
	 	</div>
	  </section>

<!-- </body>
</html> -->
<?php }} ?>

<?php 
	
	if(isset($_POST["send"])){

		$email = $_SESSION["em"];
	 	$phone = $_SESSION["phone"];
	 	$sub = $_POST["subject"];
	 	$msg = $_POST["Message"];

	 	$sql = "INSERT INTO customermessage (email, phone, subject, message) VALUES('$email', '$phone', '$sub', '$msg')";

	 	if (mysqli_query($conn, $sql)) {
            $message = "Thanks for your valuable words!";
            echo "<script type='text/javascript'>alert('$message');</script>";
        } else {
            $message = "Error: " . $sql . "<br/>" . mysqli_error($conn);
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
	}



?>