<?php
require "includes/connection.php"; 
if (!isset($_SESSION['email'])) { 
    header('location : login.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Lifestyle Store</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <body>
        <?php include"includes/header.php"; ?>

        <?php 
            $num_of_rows=0;
            $user_id=$_SESSION['id'];
            $product_query="SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart' ORDER BY item_id ASC";
            $run_product_query=mysqli_query($con,$product_query)  or die($mysqli_error($con));
            $num_of_rows=mysqli_num_rows($run_product_query);
            if($num_of_rows<=0){
               echo "<script type='text/javascript'> window.location='cart-return.php';</script>";
            } else
        ?>
        
        <div class="container-fluid" id="content">
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>
                    <?php 
                    {
                        $sum=0; ?>
                        
                        <tbody>
                            <?php
                            while($row = mysqli_fetch_array($run_product_query)){
                                $sum+=$row['Price'];
                                echo "<tr>
                                          <td>" . "#" . $row["id"] . "</td>
                                          <td>" . $row["Name"] . "</td>
                                          <td>Rs " . $row["Price"] . "</td>
                                          <td><a href='success.php?itemid={$row['id']}' class='btn btn-primary btn-sm'>Order This Product</a></td>
                                          <td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> X </a></td>
                                      </tr>";
                            }
                            echo "<tr>
                                      <td></td>
                                      <td>Total</td>
                                      <td>Rs " . $sum . "</td>
                                  </tr>"; ?>
                        </tbody>
                    </table>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php include"includes/footer.php"; ?>

    </body>
</html>