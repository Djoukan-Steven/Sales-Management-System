<?php
include "db.php"; 
$sql = "SELECT c.customerID, c.firstName, c.lastName, c.email, c.phoneNumber, 
                    c.gender, a.address,a.country,a.city,a.state, a.zipCode
                    FROM customers c INNER JOIN addresses a on c.customerID = a.addressID
                    ORDER BY customerID ASC";
                    $result=mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="EN">
<head>
    <title>VIEW</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">  
</head>     
<body>
<div class="container">
<img  class ="img"src="../images/in.png">

<div class="link-right">
                    <a href =insert.php class="link-primary bg-light text-black border rounded border-black p mb-1" 
                    style="text-decoration: none; font-size:20px">Insert</a>
                </div> 
                <div class="link-right">
                    <a href = login.php class="link-primary bg-light text-black border rounded border-black p mb-1" 
                    style="text-decoration: none; font-size:20px">Log Out</a>
                </div> 
  
        <div class="box">    <br/><br/>
                <div class="">
                    <h4 class="display-8 text-center">VIEWS</h4>
                </div>
                <?php if(mysqli_num_rows($result));?>
                <table class="table table-bordered text-center">
                <thead>
                    <tr class="bg-dark text-white">
                    <th scope="col">customerID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Address</th>
                    <th scope="col">City</th>
                    <th scope="col">Country</th>
                    <th scope="col">state</th>
                    <th scope="col">ZipCode</th>
                    <th scope="col">Operation</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php

                    if($result){
                        while ($rows = mysqli_fetch_assoc($result))
                        {$id=$rows['customerID'];
                         $firstname=$rows['firstName'];
                         $lastname=$rows['lastName'];
                         $email=$rows['email'];
                         $phoneNumber= $rows['phoneNumber'];
                         $Gender=$rows['gender'];
                         $city=$rows['city'];
                         $country=$rows['country'];
                         $address=$rows['address'];
                         $state= $rows['state'];
                         $zipCode=$rows['zipCode'];
                         
                         echo '<tr>
                         <th scope="rows">'.$id.'</th>
                         <td>'.$firstname.'</td>
                         <td>'.$lastname.'</td>
                         <td>'.$email.'</td>
                         <td>'.$phoneNumber.'</td>
                         <td>'.$Gender.'</td>
                         <td>'.$city.'</td>
                         <td>'.$country.'</td>
                         <td>'.$address.'</td>
                         <td>'.$state.'</td>
                         <td>'.$zipCode.'</td>
                         <td> 
                       
                         <button class="btn btn-primary my-3" class="link-primary bg-light text-black border rounded border-black p mb-1"><a href="fill.php? fill='.$id.'" class="text-light">Update</a></button>
                         <button  class="btn btn-danger" class="link-primary bg-light text-black border rounded border-black p mb-1"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button></td>
    
                         
                         </tr>';
                        }
                    } 
                    ?>
                </table>
        </div>        
</body>
</html>