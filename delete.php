<?php
include 'connection.php';
if(isset($_GET['deleteid'])){
    $serial=$_GET['deleteid'];
    $sql="DELETE FROM `crud` WHERE serial='$serial'";
    if(isset($_POST['submit'])){
    $resul=mysqli_query($conn,$sql);
    if($resul)  {
        echo "the contact is deleted";

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
        <form action="" method="post">
            <div class="mb-3">
                <table style=" font-style: bold;" >Delete Contact#<?php echo $serial;?></table>
                <hr>
                <h1>Are you sure want to delete contact?</h1>
                <button type="submit" name="submit" class="btn btn-primary my-5" >
                <a  class="text-light">Yes</a>
                </button>
                <button type="submit" name="delete" class="btn btn-primary my-5" >
                <a href="details.php"  class="text-light">No</a>
                </button>


            </div>

        </form>
    </div>
</body>
</html>