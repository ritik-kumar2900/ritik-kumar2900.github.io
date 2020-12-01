<?php
    require 'includes/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>CONTACT | SPORTS STORE</title>
        <?php
            include 'includes/links.php';
        ?>
    <body>
        <?php
            include 'includes/header.php';
        ?>
        
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <h2 class="p-bold">Contact Us</h2>
                        <div class="box-padding-10">
                            <form action="#" method="POST">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$"  required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="message" cols="85" class="form-control" rows="10"></textarea>
                                </div>
                                <input type="submit" class="btn btn-primary" value="Submit">
                            </form>
                        </div>
                    </div>
                    <center>
                    <div class="col-sm-5">
                        <img src="img/contact.jpg" alt="Image" class="img-responsive">
                        <div class="box-padding-rl">
                            <h2 class="p-bold">Contact Information</h2>
                            <p>454 Model Town,Ludhiana</p>
                            <p>Punjab</p>
                            <p>INDIA</p>
                            <p>Phone : +91 9876543211</p>
                            <p>Email : sportsstore@ani.com</p>                  
                        </div>
                    </div>
                    </center>
                </div>
            </div>
        </div>
    </body>
    </head>
</html>