<?php
include 'db.php';
if(isset($_POST['update'])){
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


  $sql= "INSERT INTO customers(Firstname,Lastname,email,phoneNumber,Gender)
  VALUES('$Firstname','$Lastname','$email','$phoneNumber','$Gender')";
  $result=mysqli_query($conn,$sql,)or die ('query one is failed'.mysqli_error($conn));
  if($result==1){
   $sql2="INSERT INTO addresses(address,city,zipCode,state,country)
    VALUES('$address','$city','$zipCode','$state','$country')";
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
    <input type="text" class="form-control" id="inputEmail4" name="Lastname"  placeholder="Enter ur LastName">
  </div>
  <div class="col-md-4">
    <label class="form-label">Firstname</label>
    <input type="text" class="form-control" id="firstname"  name="Firstname" placeholder="Enter ur FirstName">
  </div>
  <div class="col-4">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" id="inputAddress" placeholder="Enter ur Email" name="email">
  </div>
  <div class="col-4 ">
    <label  class="form-label">PhoneNumber</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="+" name="phoneNumber">
  </div>
  <div class="col-4">
    <label  class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="address">
  </div>
  <div class="col-md-5">
    <label class="form-label">country</label>
    <select class="form-select" name="country">
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
    <input type="text" class="form-control" id="inputCity" name="city">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select" name="state">
      <option selected> State...</option>
      <option>NY</option>
      <option>CA</option>
      <option>WA</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip" name="zipCode">
  </div>
 
  <label>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="Gender" id="inlineRadio1" value="Male">
  <label class="form-check-label" for="inlineRadio1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="Gender" id="inlineRadio2" value="Female">
  <label class="form-check-label" for="inlineRadio2">Female</label>

  </label>
</div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="update">Insert</button>
  </div>
</form>
</Div>
</div>
</body>
</html>