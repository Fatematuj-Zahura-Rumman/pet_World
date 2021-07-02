<?php require_once("conn.php"); ?>
<?php include("header.php"); ?>

  <?php 
  if (isset($_SESSION["authen"])){
    if ($_SESSION["authen"]){
  ?>
  <div class="headline" style="position: relative;">
	  	<h1 style="font-weight: 900;">WISHLIST</h1>
	  </div>

  <?php		

  		include("message.php");
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

<?php include("contact.php"); ?>
<?php include("footer.php"); ?>