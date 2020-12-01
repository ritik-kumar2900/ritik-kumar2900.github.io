<?php
    require 'includes/common.php';
    include 'includes/links.php';
    
    $name = $_POST['name'];
    $name = mysqli_real_escape_string($con, $name);
    
    $email = $_POST['email'];
    $email = mysqli_real_escape_string($con, $email);
    
    $password = $_POST['password'];
    $password = mysqli_real_escape_string($con, $password);
    $password = md5($password);
    
    $contact = $_POST['contact'];
    $contact = mysqli_real_escape_string($con, $contact);
    
    $city = $_POST['city'];
    $city = mysqli_real_escape_string($con, $city);
    
    $address = $_POST['address'];
    $address = mysqli_real_escape_string($con, $address);
    
    $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
    
    $select_query = "SELECT * FROM users WHERE email = '$email'";
    $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
    $select_rows = mysqli_num_rows($select_query_result);
    
    if($select_rows != 0){
        $error = "<span class='red'>Email Already Exists</span>";
        header('location:signup.php?m1='.$error);
    }
    else if(!preg_match($regex_email,$email)){
        $error = "<span class='red'>Incorrect Email</span>";
        header('location:signup.php?m1='.$error);
    }
    else{
        $insert_query = "INSERT INTO users(name,email,password,contact,city,address) VALUES ('$name','$email','$password','$contact','$city','$address')";
        $insert_query_result = mysqli_query($con, $insert_query) or die(mysqli_error($con));
        $user_id = mysqli_insert_id($con);
        $_SESSION['user_id'] = $user_id;
        $_SESSION['email'] = $email;
        header('location:home.php');
    }
?>