<?php
include 'connection.php';
    $id=$_GET['updateid'];
    error_reporting(0);
      $sel="SELECT * FROM `crud` WHERE serial='$id'";
      $resol=mysqli_query($conn,$sel);
      $row=mysqli_fetch_Array($resol);
      $seria=$row['serial'];
      $nam=$row['name'];
      $emai=$row['email'];
      $phon=$row['phone'];
      $tittl=$row['tittle'];
      $create=$row['created'];


        if(isset($_GET['submit'])){
            $serial=$_GET['serial'];
            $name=$_GET['name'];
            $email=$_GET['email'];
            $phone=$_GET['phone'];
            $tittle=$_GET["tittle"];
            $created=$_GET['created'];
            $sql="UPDATE crud SET `serial`='$serial',`name`='$name',`email`='$email',`phone`='$phone',`tittle`='$tittle',`created`='$created' WHERE serial='$serial' ";
            $resul=mysqli_query($conn,$sql);
            if($resul){
                echo "The data are updated";
                error_reporting(0);
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
        <a href="Mainpage.php"><i class="fa fa-address-book"></i>Contact</a>
        <a href="homepage.php"><i class="fa fa-home fa-fw" ></i>Home</a>
        
      </div>  
<div class="container">
<form method="get"># Update Contacts#<?php echo $id;?>
  <div class="mb-3">
    <label >S.No</label>
    <input type="number" class="form-control" name="serial" placeholder="Enter Serial No" autocomplete="off" value=<?php echo $seria;?>  >
  </div>
  <div class="mb-3">
    <label >Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter your Name"  autocomplete="off" value=<?php echo $nam;?>>
  </div>
  <div class="mb-3">
    <label >Email</label>
    <input type="email" class="form-control" name="email" placeholder="Enter your Email" autocomplete="off" value=<?php echo $emai;?>>
  </div>
  <div class="mb-3">
    <label >Phone</label>
    <input type="text" class="form-control" name="phone" placeholder="Enter your phone number" autocomplete="off" value=<?php echo $phon;?>>
  </div>
  <div class="mb-3">
    <label >Tittle</label>
    <input type="text" class="form-control" name="tittle" placeholder="Enter the Tittle" autocomplete="off" value=<?php echo $tittl;?>>
  </div>
  <div class="mb-3">
    <label >Created</label>
    <input type="datetime-local" class="form-control" name="created" placeholder="Enter the date" autocomplete="off" value=<?php echo $create;?> >
  </div>
  <button type="submit" class="btn btn-primary" name="submit" >Update</button>
</form>
</div>  
  </body>
</html>