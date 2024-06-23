<?php
if(isset($_GET['id'])){
    include "db.php";
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $id=validate($_GET['id']);
    $sql="SELECT * FROM customers where userid=$id";
    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);

    }else{
        header("location:update.php"); 
    }
}else if(isset($_POST['update'])){
   


    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $firstname=test_input($_POST['firstname']);
    $email=test_input($_POST['Email']);
    $phonenumber=test_input($_POST['PhoneNumber']);
    $city=test_input($_POST['city']);
    $state=test_input($_POST['state']);
    
    $address=test_input($_POST['address']);
    $zip=test_input($_POST['zip']);

    if(empty ($firstname)){
        header("location:../update.php?error=firstName is Required");
    } else if(empty($email)){
        header("location: ../update.php?error=email is Required");
    }
 else if(empty($phonenumber)){
    header("location: ../update.php?error=phonenumberis Required");
} else
$sql="UPDATE customer, address 
     set firstname='$firstname', email=$email

";
  $result=mysqli_query($conn,$sql);

  if(($result))
  {
    header("location:../read.php?sucess=sucessfuly created");
  
}
}else{
    header("location:update.php"); 
}