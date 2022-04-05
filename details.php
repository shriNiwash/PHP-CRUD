<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="topnav">
        <a href="contact.php"><i class="fa fa-address-book"></i>Contact</a>
        <a href="homepage.php"><i class="fa fa-home fa-fw" ></i>Home</a>
        
      </div>
    <div class="container">
    <button class="btn btn-primary my-5">
    <a href="Mainpage.php" class="text-light">Create Contact</a>
        </button>
<table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Tittle</th>
        <th scope="col">Created</th>

        </tr>
    </thead>
  <tbody>
      <?php

      $sql="SELECT * FROM `crud`";
      $result=mysqli_query($conn,$sql);
      if($result){
      while($row=mysqli_fetch_assoc($result)){
          $serial=$row['serial'];
          $name=$row['name'];
          $email=$row['email'];
          $phone=$row['phone'];
          $tittle=$row['tittle'];
          $created=$row['created'];
          echo '   <tr>
                <th scope="row">'.$serial.'</th>
                <td>'.$name.'</td>
                <td>'.$email.'</td>
                <td>'.$phone.'</td>
                <td>'.$tittle.'</td>
                <td>'.$created.'</td>
                <td>
                <a class="list-group-item" href="update.php?updateid='.$serial.'"><i class="fa fa-pencil-square-o" style="font-size:30px;width:0px"></i></i></a>
                </td>
                <td>
                <a class="list-group-item" href="delete.php?deleteid='.$serial.'"><i class="fa fa-trash-o" style="font-size:30px;color:red;width:0px"></i></a>

                </td>
                     </tr>';
      }
      }
      ?>
  </tbody>
</table>
    </div>
</body>
</html>