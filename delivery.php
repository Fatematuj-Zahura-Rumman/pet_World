<?php require_once("conn.php"); ?>
<?php include("header.php"); ?>
  <?php 
  if (isset($_SESSION["authen"])){
    if ($_SESSION["authen"]){
  ?>

<!-- <!DOCTYPE html>
<html>
<head>
  <title>Pet Paradise | Delivery Info</title>
</head>
<body> -->
    <?php if ($_SESSION["authen"]){ ?>
    <h3 style="margin-top: 10px;color: #dc3545;font-size:25px;">We will contact with you soon in this number: <span style="color: #007bff;"><?php $phn = $_SESSION["phone"]; echo "<br>".$phn; ?></span></h3>
    <h3 style="font-size:25px;color: #dc3545;">Delivery address: <span style="color: #007bff;"><?php $addrs = $_SESSION["address"]; echo "<br>".$addrs; ?></span> </h3>


<?php
    
    if(isset($_POST["checkout"])){
        $total = $_POST["total"];
        date_default_timezone_set("Asia/Dhaka");
        $today = date("h:i:a  |  d-m-Y");
        $user = $_SESSION["user"];
        $d_id = $user . $today;
        $d_id = md5($d_id);
?>
        <div class="container">
            <div class="table-responsive shadow p-3 mb-5 bg-white rounded" style="margin-bottom: 20px;"> 
                <table class="table table-bordered">
                    <tr>
                        <th><p style="font-weight: 900;">Delivery No.: <span style="color: red;"><?php echo $d_id; ?></span></p></th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>


<?php
        foreach($_SESSION["shopping_cart"] as $keys => $values) {

                $id = $values["item_id"];
                $n = $values["item_name"];
                $q = $values["item_quantity"];
                $i = $values["item_img"];
                $p = $values["item_quantity"] * $values["item_price"];
                $email = $_SESSION["em"];

                
               

?>
                    <tr>
                        <td><img style="width: 70px;height: 90px;" class="card-img-top img-responsive" src="images/<?php echo $i; ?>"></td>
                        <td><?php echo $n; ?></td>
                        <td><?php echo $q; ?></td>
                        <td><?php echo $p; ?></td>
                    </tr>

<?php

                $sql = "INSERT INTO orders (d_id, email, image, name, quantity, price, p_date, total)
                            VALUES ('$d_id', '$email', '$i', '$n' , '$q', '$p', '$today', '$total') ";
                mysqli_query($conn,$sql);

                $status = False;
                $sql = "INSERT INTO orderstatus (d_id, status)
                            VALUES ('$d_id', '$status') ";
                mysqli_query($conn,$sql);

                $sql = "INSERT INTO $user (id,name,quantity,price,image,purchased_time) 
                            VALUES ('$id','$n','$q','$p','$i','$today')"; //keeping record for each user
                mysqli_query($conn,$sql);
                
                $sql = "SELECT stock FROM product WHERE name='$n'";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        $q = $row["stock"] - $q;
                        $sqli = "UPDATE product SET stock='$q' WHERE name='$n'";
                        $resulti = mysqli_query($conn, $sqli);    
                    }
                }
        }
        unset($_SESSION["shopping_cart"]); //clearing cart
        $_SESSION["cart_no"] = 0;
    }

    
    }
else {
  ?>
  <h1 style="margin-top: 200px;color: red;text-align: center;"> You are not logged in! </h1>
  <?php
  }
 ?>
                    <tr>
                        <td></td>
                        <td colspan="2">Total</td>
                        <td style="color: red;font-weight: 900;">TK <?php echo $total; ?></td>
                    </tr>
                </table>
            </div>
        </div>

<!--  </body>
</html> -->

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