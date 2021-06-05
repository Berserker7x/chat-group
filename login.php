<?php
session_start();
    $db=mysqli_connect("localhost","root","","mydb");


if (isset($_POST['login-btn'])) {
    $username=mysqli_escape_string($db,$_POST['user-name']);
    $passwordd=mysqli_escape_string($db,$_POST['user-pass']);
     
    //$passwordd=md5($passwordd);
    $sql = "SELECT * FROM users WHERE username='$username' AND passwordd='$passwordd' ";
  
    $result=mysqli_query($db,$sql);


    if (mysqli_num_rows($result)==1  ) {
         $_SESSION['message']="welcome";
         $_SESSION['username']=$username;
       

         header("location:./salam.php?q=$username");
        } 
        else{
          $_SESSION['message']="invalid information";
          header("location:index.php");
        }

}
?>