<?php 
ob_start();
require_once("conn.php"); 
?>
<?php 

	if(isset($_POST['u1'])){

		$name = $_POST['nme'];
		$u = $_SESSION["em"];
		$sql = "UPDATE users SET fullname='$name' WHERE email='$u'";

		if (mysqli_query($conn, $sql)) {
			$_SESSION["fn"] = $_POST['nme'];
			$message = "Full name updated successfully.";
		} else {
			$message = "Error: " . $sql . "<br/>" . mysqli_error($conn);
		}
	}
?>

<?php 

	if(isset($_POST['u2'])){

		$oldp = $_POST['p1'];
		$oldp = md5($oldp);
		$newp = $_POST['p2'];
		$newpp = $_POST['p3'];
		$u = $_SESSION["em"];
		$p = $_SESSION["pass"];

		if($newp == $newpp) {
			$newp = md5($newp);
			$sql = "UPDATE users SET password='$newp' WHERE email='$u' AND password= '$oldp'";

			if($oldp == $p) {
				if (mysqli_query($conn, $sql)) {
					$message = "Password updated successfully.";
				} else {
					$message = "Error: " . $sql . "<br/>" . mysqli_error($conn);
					echo "<script type='text/javascript'>alert('$message');</script>";
				}
			} else {
				$message = "Entered wrong old password!";
			}
	    }
	}
?>


<?php 
	if(isset($_POST['mob'])){
		$mob = $_POST['mobile'];
		$u = $_SESSION["em"];
		$sql = "UPDATE users SET phone='$mob' WHERE email='$u'";
		if (mysqli_query($conn, $sql)) {
			$_SESSION["phone"] = $_POST['mobile'];
			$message = "Number updated successfully.";
		} else {
			$message = "Error: " . $sql . "<br/>" . mysqli_error($conn);
		}
	}
?>

<?php 
	if(isset($_POST['gen'])){
		$gender = $_POST['gender'];
		$u = $_SESSION["em"];
		$sql = "UPDATE users SET gender='$gender' WHERE email='$u'";
		if (mysqli_query($conn, $sql)) {
			$_SESSION["gender"] = $_POST['gender'];
			$message = "Gender updated successfully.";
		} else {
			$message = "Error: " . $sql . "<br/>" . mysqli_error($conn);
		}
	}
?>

<?php 
	
	if(isset($_POST["address"])){
		$h = $_POST["house"];
		$a = $_POST["area"];
		$d = $_POST["district"];
		$p = $_POST["pcode"];

		$addrs = "House: " . $h . ", " . $a . ", " . $d . " - " . $p;

		$u = $_SESSION["em"];

		$sql = "UPDATE users SET address='$addrs' WHERE email='$u'";

		if (mysqli_query($conn, $sql)) {
			$_SESSION["address"] = $addrs;
			$message = "Address updated!";
		} else {
			$message = "Error: " . $sql . "<br/>" . mysqli_error($conn);
		}
	}


?>

<?php include ("header.php") ?>
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
	<title>Pet Paradise | Profile</title>
</head> -->
  <?php 
  if (isset($_SESSION["authen"])){
    if ($_SESSION["authen"]){
  ?>
<!-- <body> -->
  <div class="table-responsive" style="margin-top: 5%;">
	<table class="table table-striped" style="width: 60%;margin: auto auto;">
	  <tbody>
	    <tr>
	      <th scope="row">Full name</th>
	      <td><?php echo $_SESSION["fn"]; ?></td>
	      <td>
	      	<button class="edit" onclick="toggler('fname')">[+edit]</button>
	      <form method="POST" id="fname" style="display: none;">
				Enter new name: 
				<input type="text" name="nme" required> <button type="submit" name="u1">Update</button>
			</form>
		</td>
	    </tr>
	    <tr>
	      <th scope="row">Email</th>
	      <td><?php echo $_SESSION["em"]; ?></td>
	    </tr>
	    <tr>
	      <th scope="row">Gender</th>
	      <td><?php echo $_SESSION["gender"]; ?></td>
	      <td>
	      <button class="edit" onclick="toggler('gender')">[+edit]</button>
	      	<form method="POST" id="gender" style="display: none;">
				Enter your gender: 
				<input type="text" name="gender" required> 
				<button type="submit" name="gen">Add</button>
			</form>
		</td>
	    </tr>
	    <tr>
	      <th scope="row">Address</th>
	      <td><?php echo $_SESSION["address"]; ?></td>
	      <td>
	      	<button class="edit" onclick="toggler('a')">[+edit]</button>
	      	<form method="POST" id="a" style="display: none;"> 
				<input  type="text" name="house" placeholder="House No:" required> <br>
				<input  type="text" name="area" placeholder="Road and Area: " required><br> 
				<input  type="text" name="district" placeholder="District:" required><br> 
				<input  type="text" name="pcode" placeholder="Postal Code:" required><br>
				<button type="submit" name="address">Set</button>
			</form>
	      </td>
	    </tr>
	    <tr>
	      <th scope="row">Mobile</th>
	      <td><?php echo $_SESSION["phone"]; ?></td>
	      <td>
	      	<button class="edit" onclick="toggler('mob')">[+edit]</button>
	      	<form method="POST" id="mob" style="display: none;">
				Enter your mobile number: 
				<input type="text" name="mobile" value="+880" required> 
				<button type="submit" name="mob">Add</button>
			</form>
	      </td>
	    </tr>
	    <tr>
	      <th scope="row">Password</th>
	      <td>It's a good idea to use a strong password that you don't use elsewhere</td>
	      <td>
	      <button class="edit" onclick="toggler('p')">[+edit]</button>
	      <form name="passForm" method="POST" id="p" style="display: none;">
				Enter Old Password: 
				<input style="margin-left: 45px;" type="password" name="p1" required> <br>
				Enter New Password: 
				<input style="margin-left: 39px;" type="password" name="p2" required><br>
				Re-enter New Password: 
				<input style="margin-left: 14.5px;" type="password" name="p3" required><br>
				<button type="submit" name="u2" onclick="validate()" >Update</button>

			</form>
	  	  </td>
	    </tr>
	  </tbody>
	</table>
  </div>


	<script type="text/javascript">
        function toggler(divId) {
      		$("#" + divId).toggle();
      	}

      	function validate(){
      		var x = document.forms["passForm"]["p2"].value;
      		var y = document.forms["passForm"]["p3"].value;

      		if(x == y){

		  	}
		  	else{
		  		alert("Password didn't match, try again!");
		  		return false;
		  	}
      	}
    </script> 


<!-- </body> -->

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