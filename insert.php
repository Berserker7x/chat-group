<?php
  if( isset( $_POST['form-control type_msg'] ) )
  {
    $msg = $_POST['form-control type_msg'];
    $con = mysqli_connect("localhost","root","","mydb");
    $insert = " INSERT INTO msgg VALUES('$msg') ";
    mysqli_query($con, $insert); 
  }
?>