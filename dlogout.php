<?php 
    if(isset($_POST['dlogout'])){
    session_destroy(); //session destroy followed by s.start is given so that the cart details doesn't show in other users cart
    session_start();
    $_SESSION["dauthen"] = False;
    header("Location: deliveryman-login.php");
    ob_end_flush();
  }
  header("refresh:0; url=deliveryman-login.php");
?> 