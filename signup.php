<?php require_once("conn.php"); ?>
<?php include("header.php"); ?>

<!-- <!DOCTYPE html>
<html lang="en" >

<head>
  <title>Pet Paradise | Sign Up</title>
  <link rel="stylesheet" href="css/login.css">
</head> -->

<body class="parallax2">

	<div class="container">
	<form class="form" method="post" action="login.php">
		<h1 style="color: black; margin-top: 20px;">Sign Up</h1>
		<div class="field email">
			<div class="icon"></div>
			  <input class="input" name="email" type="email" id="signup-email" placeholder="Email" required/>
			</div>
			<div class="field password">
			    <div class="icon"></div>
			    <input class="input" type="password" name="pass1" id="password" placeholder="Password" required/>
			</div>
			<div class="field password">
			    <div class="icon"></div>
			    <input class="input" type="password" name="pass2" id="confirm_password" placeholder="Re-enter Password" required/>
			</div>
			<span id='message'></span><br>
			<div style="display: inline-block;border: 1px solid black;padding-right: 5px;"><img style="width: 30px;height: 20px;" src="images/bd.png"> +88</div>
	    <input type="text" name="phone" id="number" placeholder="01780009005" style="padding: 1px;" required/><br><br>
	    <button type="submit" name="signup" class="button">Register</button>
			    <div class="side-top-bottom"></div>
			    <div class="side-left-right"></div>
			  </button><small>Already have an account? <a href="login.php">Sign in</a></small>
	</form>

	</div>
	</div>

	<script type="text/javascript">
		$('#password, #confirm_password').on('keyup', function () {
		  if ($('#password').val() == $('#confirm_password').val()) {
		    $('#message').html('*Password matched!').css('color', 'green');
		  } else 
		    $('#message').html("*Password didn't match!").css('color', 'red');
		});
	</script>

</body>

<!-- </html> -->

<?php include("footer.php"); ?>
