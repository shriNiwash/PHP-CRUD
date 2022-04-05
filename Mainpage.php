<?php
include 'connection.php';
if(isset($_GET['submit'])){
  $serial=$_GET['serial'];
  $name=$_GET['name'];
  $email=$_GET['email'];
  $phone=$_GET['phone'];
  $tittle=$_GET["tittle"];
  $created=$_GET['created'];
  if($serial!="" && $name!="" && $email!="" && $email!="" && $phone!="" && $tittle!="" && $created!="")
  {
  $quer="INSERT INTO `crud`(`serial`, `name`, `email`, `phone`, `tittle`, `created`)
   VALUES ('$serial','$name','$email','$phone','$tittle','$created')";
  $data=mysqli_query($conn,$quer);
  if($data){
    echo "the data is inserted";
    mysqli_close($conn);
    
          }
else{
    echo "connection failed";
    }
          }
          else{
            echo "all fiels are required";
          }
        }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>CRUD Operation</title>
  </head>
  <body>
  <div class="topnav">
        <a href="contact.php"><i class="fa fa-address-book"></i>Contact</a>
        <a href="homepage.php"><i class="fa fa-home fa-fw" ></i>Home</a>
        
      </div>  
<div class="container">
<form method="get"># Create Contacts
  <div class="mb-3">
    <label >S.No</label>
    <input type="number" class="form-control" name="serial" placeholder="Enter Serial No" autocomplete="off" >
  </div>
  <div class="mb-3">
    <label >Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter your Name"  autocomplete="off">
  </div>
  <div class="mb-3">
    <label >Email</label>
    <input type="email" class="form-control" name="email" placeholder="Enter your Email" autocomplete="off">
  </div>
  <div class="mb-3">
    <label >Phone</label>
    <input type="text" class="form-control" name="phone" placeholder="Enter your phone number" autocomplete="off">
  </div>
  <div class="mb-3">
    <label >Tittle</label>
    <input type="text" class="form-control" name="tittle" placeholder="Enter the Tittle" autocomplete="off">
  </div>
  <div class="mb-3">
    <label >Created</label>
    <input type="datetime-local" class="form-control" name="created" placeholder="Enter the date" autocomplete="off" >
  </div>
  <button type="submit" class="btn btn-primary" name="submit" onClick="fun()">Submit</button>
  <a href="details.php">Click here for details</a>



</form>
</div>  
  </body>
</html>