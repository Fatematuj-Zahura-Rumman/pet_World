<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">

	<!-- AOS -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">

	<title>Pet World</title>

</head>
<body>

		<!-- Navbar Starts -->
	
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	 <div class="container">
	  <a class="navbar-brand" href="index.php" style=" margin: 0; padding: 0;"><img style="width: 40%;margin-left: 40%;" src="images/logo.png"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav ml-auto">
	      <!-- <li class="nav-item active">
	        <button style="border: none;background: #f9f9f9;margin: 0;padding: 0;margin-top: 8px;display: inline-block;" onclick="getLocation()"><p style="margin: 0;color: red;" id="place">Set your Location</p></button>
	      </li> -->
	      <li class="nav-item active">
	        <a class="nav-link nav-color" href="index.php">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link nav-color dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Brands
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item nav-color" href="selected.php?brand=<?php echo "brit"; ?>">Brit</a>
	          <a class="dropdown-item nav-color" href="selected.php?brand=<?php echo "premium"; ?>">Premium</a>
	          <a class="dropdown-item nav-color" href="selected.php?brand=<?php echo "ivy"; ?>">Ivy</a>
	          <a class="dropdown-item nav-color" href="selected.php?brand=<?php echo "sanicat"; ?>">Sanicat</a>
	          <a class="dropdown-item nav-color" href="selected.php?brand=<?php echo "smart heart"; ?>">Smart Heart</a>
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item nav-color" href="all.php">All</a>
	        </div>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link nav-color dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Pets
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item nav-color" href="selected.php?pet=<?php echo "bird"; ?>">Bird</a>
	          <a class="dropdown-item nav-color" href="selected.php?pet=<?php echo "cat"; ?>">Cat</a>
	          <a class="dropdown-item nav-color" href="selected.php?pet=<?php echo "dog"; ?>">Dog</a>
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item nav-color" href="all.php">All</a>
	        </div>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link nav-color dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Catagories
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item nav-color" href="selected.php?category=<?php echo "litter"; ?>">Litter</a>
	          <a class="dropdown-item nav-color" href="selected.php?category=<?php echo "food"; ?>">Foods</a>
	          <a class="dropdown-item nav-color" href="selected.php?category=<?php echo "shampoo"; ?>">Shampoo</a>
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item nav-color" href="all.php">All</a>
	        </div>
	      </li>
	      <li class="nav-item dropdown">
	      	<?php
	      	   if (isset($_SESSION["authen"])){
	        	if ($_SESSION["authen"]){
	        		$user = $_SESSION["user"];
	        ?>		
	        		<a class="nav-link nav-color dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			         <?php echo $user; ?>
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="margin: 0;padding: 0;">
			          <a class="dropdown-item nav-color" href="wishlist.php" style="text-align: center;">WishList</a>
	          		  <div class="dropdown-divider" style="margin: 0;"></div>
			          <form method="post" action="logout.php"><button type="submit"class="nav-link nav-color" style="border: 0;background: #f8f9fa;text-align: center;width: 100%;" name="logout">Logout</button>
	        		  </form>
			        </div>
	        <?php 
	        	} else { ?>
	        		<a class="nav-link nav-color dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Login
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item nav-color" href="login.php">Sign In</a>
			          <div class="dropdown-divider"></div>
			          <a class="dropdown-item nav-color" href="signup.php">Sign Up</a>
			        </div>
	        <?php } } else {
	        		?>
	        		<a class="nav-link nav-color dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Login
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item nav-color" href="login.php">Sign In</a>
			          <div class="dropdown-divider"></div>
			          <a class="dropdown-item nav-color" href="signup.php">Sign Up</a>
			        </div>
	        <?php } ?>
	      </li>
	    </ul>
	    <form class="form-inline my-2 my-lg-0" method="POST" action="search.php">
	        <input class="form-control mr-sm-2" type="search" name="query" placeholder="Search here" aria-label="Search">
	        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search" data-toggle="tooltip" data-placement="left" >Search</button>
	    </form>
	  </div>
	 </div>
	</nav>

	<!--Navbar Ends -->

<?php 
	if(isset($_SESSION["admin"])){
		if($_SESSION["admin"]){

?>
	<nav class="navbar navbar-expand-lg navbar-dark bg-success" style="padding-right: 10%;padding-left: 10%;font-weight: 400;">
	  <div class="container">
	  <span class="navbar-brand" href="#">Admin Panel</span>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	    <div class="navbar-nav  ml-auto">
	      <a class="navbar-brand nav-item " href="income.php">Income</a>
	      <a class="navbar-brand nav-item " href="orders.php">Orders</a>
	      <a class="navbar-brand nav-item " href="cust_comment.php">Message</a>
	      <a class="navbar-brand nav-item " href="addProduct.php">Add Product</a>
	      <a class="navbar-brand nav-item " href="updateProduct.php">Update Product</a>
	      <a class="navbar-brand nav-item " style="color: blue;font-weight: 600;" href="addDman.php">Add DeliveryMan</a>
	    </div>
	  </div>
	  </div>
	</nav>

<?php 
		}
	}
 ?>
<!-- </body>
</html> -->