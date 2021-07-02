<?php
    ob_start(); //to store the header in the buffer, we will use the php ob_start() function 
    require_once("conn.php");
?>

<?php  
    $_SESSION["dauthen"] = False;
    $_SESSION["not_pass"] = False;
    if(isset($_POST['signin'])){

    	$mobile = $_POST["mobile"];
        $password = mysqli_real_escape_string($conn, $_POST["password"]);  
        $pass = md5($password);

        $sql = "SELECT * FROM deliveryman WHERE mobile='$mobile' AND password='$pass'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $_SESSION["dfn"] = $row["name"];
                $_SESSION["uname"] = $row["username"];
                $_SESSION["dem"] = $row["email"];
                $_SESSION["daddress"] = $row["address"];
                $_SESSION["dphone"] = $row["phone"];
                $_SESSION["dgender"] = $row["gender"];
                $_SESSION["dpass"] = $row["password"];
                $_SESSION["dauthen"] = True;
            }
        } else {
            $_SESSION["not_pass"] = True;
            $_SESSION["dauthen"] = False;
        }

        $change = $_SESSION["dauthen"];
        if($change == True){
            header("Location: dindex.php");
            ob_end_flush(); //to clean the buffer, we will use the ob_end_flush() function
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
	<title>Pet World | Deliveryman</title>
</head>
<body class="parallax3">

		<div class="row" style="margin: 0;">
		<div class="col-sm">
			<div class="form" id="form">
			 <form method="POST" name="signin_form" action="">
			  <h1 style="color: black; margin-top: 20px;">Deliveryman Sign-in</h1>
			  <div class="field email">
			    <div class="icon"></div>
			    <input class="input" name="mobile" type="text" placeholder="Mobile" autocomplete="on"/>
			  </div>
			  <div class="field password">
			    <div class="icon"></div>
			    <input class="input" id="password" name="password" type="password" placeholder="Password"/>
			  </div>
			  <button class="button" id="submit" name="signin">LOGIN
			    <div class="side-top-bottom"></div>
			    <div class="side-left-right"></div>
			  </button><small>© Pet World</small>
			</form>
			</div>
		</div>
		</div>






<?php include("footer.php"); ?>