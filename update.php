<?php
include 'db.php';
if (isset($_GET['fill'])){
$id=$_GET['fill'];
$sql1="SELECT * from customers WHERE  customerID=$id";
$sql2=" SELECT * from  addresses  WHERE addressID=$id";
$result1=mysqli_query($conn,$sql1);
$result2=mysqli_query($conn,$sql2);
$rows=mysqli_fetch_assoc($result1);
  $firstname=$rows['firstName'];
  $lastname=$rows['lastName'];
  $email=$rows['email'];
  $phoneNumber= $rows['phoneNumber'];
  $Gender=$rows['gender'];
  $rows=mysqli_fetch_assoc($result2);
 $city=$rows['city'];
 $address=$rows['address'];
 $country= $rows['country'];
 $state= $rows['state'];
 $zipCode=$rows['zipCode'];
}

if(isset($_POST['submit'])){
  $Firstname=$_POST['Firstname'];
  $Lastname=$_POST['Lastname'];
  $phoneNumber=$_POST['phoneNumber'];
  $Gender=$_POST['Gender'];
  $email=$_POST['email'];
  $address=$_POST['address'];
  $state=$_POST['state'];
  $zipCode=$_POST['zipCode'];
  $city=$_POST['city'];
  $country=$_POST['country'];
  $sql1="UPDATE customers  set customerID=$id,  Firstname='$Firstname',Lastname= '$Lastname',email='$email',phoneNumber='$phoneNumber',Gender='$Gender'WHERE customerID=$id";
  $result=mysqli_query($conn,$sql1,);
  if($result==1){
   $sql2="UPDATE addresses set addressID=$id,address='$address',city='$city',zipCode='$zipCode' ,state='$state',country='$country' where addressID=$id";
    $result=mysqli_query($conn,$sql2,)or die ('query one is failed'.mysqli_error($conn));
  if($result)
  {
    echo "inserted succesfully";
    header('location:read.php');
  }
  else{
    die(mysqli_error($conn));
  }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    
</head>
<body>
<div class="container">
<img  class ="img"src="../images/in.png">
  <Div class="container my-5">
<form class="row g-3" method="post">
  <div class="col-md-4">
    <label  class="form-label">Lastname</label>
    <input type="text" class="form-control" id="inputEmail4" name="Lastname"  placeholder="Enter ur LastName" value=<?php echo $lastname?>>
  </div>
  <div class="col-md-4">
    <label class="form-label">Firstname</label>
    <input type="text" class="form-control" id="firstname"  name="Firstname" placeholder="Enter ur FirstName" value=<?php echo $firstname?>>
  </div>
  <div class="col-4">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" id="inputAddress" placeholder="Enter ur Email" name="email" value=<?php echo $email?>>
  </div>
  <div class="col-4 ">
    <label  class="form-label">PhoneNumber</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="+" name="phoneNumber" value=<?php echo $phoneNumber?>>
  </div>
  <div class="col-4">
    <label  class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="address" value=<?php echo $address?>>
  </div>
  <div class="col-md-5">
    <label class="form-label">country</label>
    <select class="form-select" name="country" values=<?php echo $country?>>
      <option selected> country...</option>
      <option>Us</option>
      <option>Uk</option>
      <option>Nigeria</option>
      <option>Algeria</option>
      <option>Canada</option>
      <option>Turkey</option>
      <option>Cyprus</option>
      <option>Japan</option>
      <option>china</option>
      <option>korean</option>
      <option>Russian</option>
      <option>Ukrine</option>
    </select>
  </div>
  <div class="col-md-5">
    <label class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity" name="city" value=<?php echo $city
    ?>>
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select" name="state" value=<?php echo $state?>>
      <option selected> State...</option>
      <option>NY</option>
      <option>CA</option>
      <option>WA</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip" name="zipCode" value=<?php echo $zipCode?>>
  </div>
 
  <label>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="Gender" id="inlineRadio1" value=<?php echo $Gender?>>
  <label class="form-check-label" for="inlineRadio1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="Gender" id="inlineRadio2" value=<?php echo $Gender?>>
  <label class="form-check-label" for="inlineRadio2">Female</label>

  </label>
</div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="submit">update</button>
  </div>
</form>
</Div>
</div>
</body>
</html>