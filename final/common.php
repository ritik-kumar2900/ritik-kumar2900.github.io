<?php
$con= mysqli_connect("localhost", "root", "", "mysql")or die(mysqli_error($con));
if(!isset($_SESSION['email'])){
    session_start();
}
if($con)
	echo "hello"
?>
