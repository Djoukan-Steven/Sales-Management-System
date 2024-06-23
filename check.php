<?php
include "db.php";
if( isset($_POST['username'])&&isset($_POST['password'])
&& isset($_POST['role'])) {

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username=test_input($_POST['username']);
    $password=test_input($_POST['password']);
    $role=test_input($_POST['role']);

    if(empty ($username)){
        header("location:../login.php?error=User  Name is Required");
    } else if(empty($password)){
        header("location: ../login.php?error=Password is Required");
    }
 else if(empty($role)){
    header("location: ../login.php?error=roleis Required");
} else{
$password=md5($password);
$sql="SElECT * from users where username='$username'AND password='$password'";
  $result=mysqli_query($conn,$sql);

  if(mysqli_num_rows($result)==1)
  {
    $row=mysqli_fetch_assoc($result);
  
  if($row['password']==$password && $row['role']==$role){}
}
 
    }

}
else{
    header("location:../login.php");
}
