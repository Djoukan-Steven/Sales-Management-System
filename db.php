<?php
$sname="localhost";
$uname="root";
$password="0000";
$db_name="cmpe344";
$conn =mysqli_connect($sname,$uname,$password,$db_name);
 if(!$conn)
 {
   die(mysqli_error($conn));
 }

?>