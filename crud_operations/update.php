<?php
include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Update you Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
</head>
<body>
<?php

if(isset($_POST['submit'])){

    $id = $_GET['id'];
    $name = $_POST['name'];
    $mobilenumber = $_POST['mobilenumber'];
    $email = $_POST['email'];

    $query = " UPDATE `crudtable` SET id=$id ,name='$name',mobilenumber='$mobilenumber',email='$email' WHERE id=$id ";

    $result = mysqli_query($connect,$query);

    header('location:index.php');

}


?>
 



<div class="col-md-6 m-auto">
<form action="" method="post">
<br><br><div class="card">
<div class="card-header">
<h1 class="text-center">Update Your Data</h1>
</div>

<lable>Name :</lable>
<input type="text" name="name" class="form-control"><br>

<lable>MobileNumber :</lable>
<input type="number" name="mobilenumber" class="form-control"><br>

<lable>Email Id :</lable>
<input type="email" name="email" class="form-control"><br>

<input type="submit" name="submit" value="Submit" class="form-control btn-success">
</form>
</div>

   
</body>
</html>