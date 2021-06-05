<?php
session_start();
$db=mysqli_connect("localhost","root","","mydb");

if (isset($_POST['signup-btn'])) {

$username=mysqli_escape_string($db,$_POST['user-name']);
$passwordd=mysqli_escape_string($db,$_POST['user-pass']);
$email=mysqli_escape_string($db,$_POST['user-email']);
 

 
 
     //$passwordd = md5($passwordd);
    $sql="INSERT INTO users(username,passwordd,email,	to_date) VALUES ('$username','$passwordd','$email',now())";
    mysqli_query($db,$sql);
    header("location: index.php");
}
 

 
?>
