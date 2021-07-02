<?php
    ob_start(); //to store the header in the buffer, we will use the php ob_start() function 
    require_once("conn.php"); 
?> 
<?php include("header.php"); ?>

<?php 
	
	if(isset($_POST["signup"])){
		
        $email  = $_POST['email'];
        $phone = "+88".$_POST['phone'];
        $pass   = $_POST['pass1'];

        // producing username from email
        $words = explode('@', $email);
        $a = array();
        $b = array();

        if (count($words)>0){
            foreach($words as $word){
                array_push($a, $word);
            }
        }

        $strng = $a[0];
        $words = explode('.', $strng);
        if (count($words)>0){
            foreach($words as $word){
                array_push($b, $word);
            }
        }
        $user = $b[0].$b[1];
        // .......................

        $sql = "SELECT email FROM users";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                if($email === $row["email"]){
                    $u = $row["email"];
                } else {
                    $u = "";
                }
           }
        }


        if($email == $u){
             $message = "Email already taken!";
             echo "<script type='text/javascript'>alert('$message');</script>";
        
        } else if(strlen($pass)<8){
             $message = "Password should be minimum 8 characters";
             echo "<script type='text/javascript'>alert('$message');</script>";
        } else {
                    $pass = md5($pass);
                    $sql = "INSERT INTO users (username, email, password, phone) VALUES ('$user', '$email', '$pass', '$phone')";

                    if (mysqli_query($conn, $sql)) {
                        $message = "Sign up successfull!";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                    } else {
                        $message = "Error: " . $sql . "<br/>" . mysqli_error($conn);
                        echo "<script type='text/javascript'>alert('$message');</script>";
                    }
                    $_SESSION["user"] = $user;
                    $sql = "CREATE TABLE $user (
                        id INT(11) NOT NULL,
                        name VARCHAR(255) NOT NULL,
                        quantity VARCHAR(255) NOT NULL,
                        price VARCHAR(255) NOT NULL,
                        image VARCHAR(255) NOT NULL,
                        purchased_time VARCHAR(255) NOT NULL
                        )";
                    mysqli_query($conn, $sql);
        }
	}

 ?>

 <!-- Sign in part -->

<?php  
    $_SESSION["authen"] = False;
    $_SESSION["admin"] = False;
    $_SESSION["not_pass"] = False;
    if(isset($_POST['signin'])){

    	$email = mysqli_real_escape_string($conn, $_POST["email"]);  
        $password = mysqli_real_escape_string($conn, $_POST["password"]);  
        $pass = md5($password);

        $sql = "SELECT * FROM users WHERE email='$email' AND password='$pass'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $_SESSION["fn"] = $row["fullname"];
                $_SESSION["user"] = $row["username"];
                $_SESSION["em"] = $row["email"];
                $_SESSION["address"] = $row["address"];
                $_SESSION["phone"] = $row["phone"];
                $_SESSION["gender"] = $row["gender"];
                $_SESSION["pass"] = $row["password"];
                $_SESSION["authen"] = True;
                $_SESSION["cart_no"] = 0;
            }
        } else {
            $_SESSION["not_pass"] = True;
            $_SESSION["authen"] = False;
        }

        $change = $_SESSION["authen"];
        if($change == True){
            header("Location: index.php");
            ob_end_flush(); //to clean the buffer, we will use the ob_end_flush() function
        }

        $admin = $_SESSION["em"];
        $adminemail = "admin@admin.com";

        if($admin == $adminemail){
            $_SESSION["admin"] = True;
        } else {
            $_SESSION["admin"] = False;
        }
    }
?>

<!-- <!DOCTYPE html>
<html lang="en" >

<head>
  <title>Pet Paradise | Sign In</title>
  <link rel="stylesheet" href="css/login.css">  
</head> -->

<body class="parallax">

	<div class="row" style="margin: 0;">
		<div class="col-sm">
			<div class="form" id="form">
			 <form method="POST" name="signin_form" action="">
			  <h1 style="color: black; margin-top: 20px;">Sign In</h1>
			  <div class="field email">
			    <div class="icon"></div>
			    <input class="input" id="email" name="email" type="email" placeholder="Email" autocomplete="on"/>
			  </div>
			  <div class="field password">
			    <div class="icon"></div>
			    <input class="input" id="password" name="password" type="password" placeholder="Password"/>
			  </div>
			  <button class="button" id="submit" name="signin">LOGIN
			    <div class="side-top-bottom"></div>
			    <div class="side-left-right"></div>
			  </button><small>Don't have an account? <a href="signup.php">Create new</a></small>
			</form>
			</div>
		</div>
	</div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>

</body>

<!-- </html> -->

<?php include("footer.php"); ?>
