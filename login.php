<?php
 session_start();
 $_SESSION;
?>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">    
    <title>Main page </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="login">
 <h1>LOGIN</h1>
 <form  action="check.php" method="post">
<?php if (isset($_Get['error'])){ ?> 
 <div class="alert alert-danger" role="alert">
  <?=$_Get['error']?>
</div>
<?php } ?>   
    <div>
        <label class="form-label">username</label>
        <input class="form-control"type="text" name="username" id="username"required>
      
    </div>
    <div>
        <label class="form-label">password</label>
        <input class="form-control"type="password" name="password" id="password" required>

    </div>
<div>
    <label class="form-label">Select user</label>
    <select class="form-select form-select-lg mb-3"
    name="role"
     aria-label=".form-select-lg example">       
    <option selected></option>
  <option value="1">Customer</option>
  <option value="2">Admin</option>
  <option value="3">Employee</option>
   </select> 
   </div>
    <div class="form-group  form-check">
    <input class="form-check-input" type="checkbox" name="Remeber me">
        <label class="form-check-label">Remeber me</label>
    </div>

    <input  class="btn btn-success w-100"type="submit"  value="login">

</div>
 
</body>
</html>