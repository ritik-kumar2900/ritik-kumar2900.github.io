<?php
    require 'includes/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>SIGN UP | SPORTS STORE</title>
        <?php
            include 'includes/links.php';
        ?>
    <body>
        <?php
            include 'includes/header.php';
        ?>
        
        <div class="content">
            <div class="container">
                <div classs="row">
                    <div class="col-sm-6">
                        <center>
                            <img src="img/sportstore.jpg" class="img-responsive signup-image" alt="Image">
                        </center>
                    </div>
                    <div class="col-sm-6">
                        <div class="panel panel-default-setting panel-primary">
                        <div class="panel-heading">
                            <h2 class="text-center">SIGN UP</h2>
                        </div>
                        <div class="panel-body">
                        <form action="signup_script.php" method="POST">
                            
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" required>
                            </div>
                                
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                                <?php
                                    if(isset($_GET['m1'])){
                                        echo $_GET['m1'];
                                    }
                                ?>
                            </div>
                            
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" pattern=".{8,}" required>
                            </div>
                            
                             <div class="form-group">
                                 <input type="text" class="form-control" placeholder="Conatct" name="contact" maxlength="10" size="10" required>
                                 <?php
                                    if(isset($_GET['m2'])){
                                        echo $_GET['m2'];
                                    }
                                 ?>
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="City" name="city" required>
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Address" name="address" required>
                            </div>
                            
                            <div class="btn-signup">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
                
            </div>
        </div>
    </body>
    </head>
</html>