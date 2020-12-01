<?php
    require 'includes/common.php';
    
    $oldpassword = $_POST['oldpassword'];
    $oldpassword = mysqli_real_escape_string($con,$oldpassword);
    $oldpassword = md5($oldpassword);
    
    $newpassword = $_POST['newpassword'];
    $newpassword = mysqli_real_escape_string($con,$newpassword);
    $newpassword = md5($newpassword);
    
    $newpasswordre = $_POST['newpasswordre'];
    $newpasswordre = mysqli_real_escape_string($con,$newpasswordre);
    $newpasswordre = md5($newpasswordre);
    
    $email = $_SESSION['email'];
    
    $select_query = "SELECT * FROM users WHERE email = '$email' AND password = '$oldpassword'";
    $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
    $rows = mysqli_num_rows($select_query_result);
    
    if($rows > 0 && $newpassword==$newpasswordre){
        $success = "<span class='green'>Password Changed</span>";
        $update_query = "UPDATE users SET password = '$newpassword' WHERE email = '$email'";
        $update_query_result = mysqli_query($con, $update_query) or die(mysqli_error($con));
        header("location:settings.php?m1=".$success);
    }
    else{
        $error = "<span class='red'>Invalid Credentials</span>";
        header("location:settings.php?m1=".$error);
    }
?>
