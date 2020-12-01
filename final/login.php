<?php 
require 'Includes/common.php';
?>
<html>
    <head>
        <?php
        include 'Includes/links.php';
        ?>
    </head>
    <body>
        <?php 
        include 'Includes/header.php';
        ?>
       
        <div class="container">
            <div class="row">
                <div class="col-md-offset-4 col-md-4">
                        <form method="post" action="login_script.php">
                            <div class="form-group">
                                <p>Don't have an Account? <a href="signup.php">Register</a></p>
                            </div>
                            <div><?php if(isset($_GET['m1'])){?>
                                <p><?php echo  $_GET['m1'];}?></p> </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Enter Email" required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" pattern=".{6,}" placeholder="Enter Password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                            <div class="form-group">
                                <p><a href="#">Forgot Password?</a></p>
                            </div>
                        </form>                        
                    </div>                        
                </div>
            </div>
        </div>
    </body>
</html>