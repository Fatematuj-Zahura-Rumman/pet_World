<?php require_once("conn.php"); ?>
<?php include("header.php"); ?>
  <?php 
  if (isset($_SESSION["authen"])){  
    if ($_SESSION["authen"]){
      include("sidebar.php");
    } 
    else {
    }
  }
  ?>

<!-- <!DOCTYPE html>
<html>
<head>
	<title>Pet Paradise | Cart</title>
</head>
<body> -->

  <?php 
  if (isset($_SESSION["authen"])){
    if ($_SESSION["authen"]){
  ?>
  
	<!--Cart Section Starts -->
  <div class="cart" id="cart">
    <div class="container" style="background-color: #ffffffb0; padding: 0;margin-top: 50px;">
  

     <div class="table-responsive" style="margin-bottom: 20px;"> 
      <table class="table table-bordered">
            <tr>
              <th width="10%">Image</th>
              <th width="35%">Item Name</th>
              <th width="10%">Quantity</th>
              <th width="12%">Price</th>
              <th width="12%">Total</th>
              <th width="21%">Action</th>
            </tr>
            <?php
            if(!empty($_SESSION["shopping_cart"]))
            {
              $total = 0;
              foreach($_SESSION["shopping_cart"] as $keys => $values) {
            ?>
            <tr>
              <td><img style="width: 70px;height: 90px;" class="card-img-top img-responsive" src="images/<?php echo $values["item_img"]; ?>"></td>
              <td><a href="product.php?id=<?php echo $values["item_id"]; ?>"><?php echo $values["item_name"]; ?></a></td>
              <td><?php echo $values["item_quantity"]; ?></td>
              <td>৳ <?php echo $values["item_price"]; ?></td>
              <td>৳ <?php echo number_format(($values["item_quantity"] * $values["item_price"]), 2);?></td>
              <td><a href="action.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
            </tr>
            <?php $delivery=100; ?>
            <?php
                $total = $total + ($values["item_quantity"] * $values["item_price"]);
              }
            ?>
            <tr>
              <td colspan="3" align="right">Delivery Charge</td>
              <td colspan="2" align="right">৳ <?php echo $delivery; ?> </td>
              <td></td>
            </tr>
            <tr>
              <td colspan="3" align="right">Total</td>
              <?php $total = $total+$delivery; ?>
              <td colspan="2" align="right" class="text-danger">৳ <?php echo number_format($total, 2); ?></td>
              <td>
                <?php 
                $addrs = $_SESSION["address"];
                $mob = $_SESSION["phone"];
                $name = $_SESSION["fn"];
                if($addrs == NULL){
                ?>
                <a href="profile.php"style="font-weight: 900;color: red;font-size: 14px;border: 1px solid;padding: 5px;">Add your address to continue</a>
                <?php
                    if($mob == NULL){
                  }
                } else if($name == NULL) {
                ?>
                <a href="profile.php"style="font-weight: 900;color: red;font-size: 14px;border: 1px solid;padding: 5px;">Add your name to continue</a>
                <?php
                  } else {
                  if($mob == NULL){
                ?>
                <a href="profile.php"style="font-weight: 900;color: red;font-size: 14px;border: 1px solid;padding: 5px;">Add your number to continue</a>
                <?php
                  } else{
                ?>
                <form method="post" action="delivery.php"><input type="hidden" name="total" value="<?php echo $total; ?>"><button class="btn btn-success" type="submit" name="checkout">Checkout</button></form>
                <?php
                 }
                }
                ?>
              </td>
            </tr>
            <?php
            }
            ?>
          </table> 
          </div> 
  </div>
  </div>
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

<!-- </body>
</html> -->

<?php include("footer.php") ?>
