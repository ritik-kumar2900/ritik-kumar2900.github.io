<?php
    include 'includes/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>CONFIRM | SPORTS STORE</title>
        <?php
            include 'includes/links.php';
        ?>
    <body>
        <?php
            include 'includes/header.php';
        ?>
        
        <div class="content">
            <div class="container">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default-setting panel-primary">
                        <div class="panel-heading">
                            <h3 class="text-center">Change Password</h3>
                        </div>
                        <div class="panel-body">
                            <form action="settings_script.php" method="POST">
                                
                                <div class="form-group">
                                    <p>Old Password</p>
                                    <input type="password" class="form-control" name="oldpassword" required>
                                </div>
                                
                                <div class="form-group">
                                    <p>New Password</p>
                                    <input type="password" class="form-control" name="newpassword" required>
                                </div>
                                
                                <div class="form-group">
                                    <p>Re-type New Password</p>
                                    <input type="password" class="form-control" name="newpasswordre" required>
                                </div>
                                
                                <?php
                                    if(isset($_GET['m1'])){
                                        echo $_GET['m1'];
                                    }
                                ?>
                                
                                <button type="submit" class="btn btn-primary btn-block" value="confirm">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </head>
</html>