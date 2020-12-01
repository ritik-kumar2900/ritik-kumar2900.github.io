<?php
    include 'includes/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>CART | SPORTS STORE</title>
        <?php
            include 'includes/links.php';
        ?>
    <body>
        <?php
            include 'includes/header.php';
        ?>
        
        <div class="content">
            <div class="container">
                <table class="table table-striped table-responsive">
                    <?php
                        if(isset($_GET['m1'])){
                            $disc=$_GET['m1'];
                        }
                        $sum = 0;
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT items.price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id = '$user_id' and status='Added To Cart'";
                        $result = mysqli_query($con, $query) or die(mysqli_error($con));
                        if(mysqli_num_rows($result) >= 1){
                    ?>
                    <thead>
                        <tr>
                            <th>Item Number</th>
                            <th>Item Name</th>
                            <th>Price</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row = mysqli_fetch_array($result)){
                                $sum+= $row['price'];
                                $id = $row["id"];
                                echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>Rs." . $row['price'] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link btn btn-danger btn-block'> Remove</a></td></tr>";
                                echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>Rs." . $row['price'] . "</td><td><a href='success.php' class='btn btn-success btn-block'>Confirm Order</a></td></tr>";
                            }
                        }
                        else{
                            echo "<h2>Add items to the cart first!</h2>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
    </head>
</html>