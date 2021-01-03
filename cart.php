<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cart | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid" id="content">
            <?php include 'includes/header.php'; ?>
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped"> 
					
					<div class="row" style="margin-top:80px;">
				<div class="col-lg-4 col-lg-offset-4">
					<table class="table table-striped">
						<thead>
							<tr>
							<th>Item Number</th>
							<th>Price</th>
							<th></th>
							</tr>
						</thead>
						<tbody>
							<tr><td>#1</td><td>5000</td><td><a href='remove.php?id=1' style='color:#0000ff;'> Remove</a></td></tr><tr><td>#2</td><td>4000</td><td><a href='remove.php?id=2' style='color:#0000ff;'> Remove</a></td></tr><tr><td>#3</td><td>4000</td><td><a href='remove.php?id=3' style='color:#0000ff;'> Remove</a></td></tr><tr><td>Total</td><td>13000</td><td><a href='success.php?itemsid=1, 2, 3, ' class='btn btn-primary'> Confirm</a></td></tr>					</table>
				</div>
			</div>
    
                      <!--show table only if there are items added in the cart  -->
                       <?php
                   /*     $sum = 0;
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con)); 
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
              
                            <tbody>
                                <?php
						 while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["Price"];
                                    $id .= $row["id"] . ", ";
                                    echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td></tr>";
                                }
                                $id = rtrim($id, ", ");
                                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?itemsid=" . $id . "' class='btn btn-primary'>Confirm Order</a></td></tr>";
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo "Add items to the cart first!";
                        } */
                        ?>
                        <?php
                        ?>
             
       </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br> <?php include("includes/footer.php"); ?>
    </body>
</html>