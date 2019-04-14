<?php
include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Insert Operation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
</head>
<body>

<div class="col-md-6 m-auto">
<form action="" method="post">
<br><br><div class="card">
<div class="card-header">
<h1 class="text-center">Insert Your Data</h1>
</div>

<lable>Name :</lable>
<input type="text" name="name" class="form-control"><br>

<lable>MobileNumber :</lable>
<input type="number" name="mobilenumber" class="form-control"><br>

<lable>Email Id :</lable>
<input type="email" name="email" class="form-control"><br>

<input type="submit" name="submit" value="Submit" class="form-control btn-success">
</form>
<br><br>
<div><button class="btn btn-primary "><a class="text-white" href="index.php">Back to HomePage</a></button></div>
</div>

<?php

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $mobilenumber = $_POST['mobilenumber'];
    $email = $_POST['email'];

    $query = "INSERT INTO `crudtable`(`name`, `mobilenumber`, `email`) VALUES ('$name','$mobilenumber','$email')";

    $result = mysqli_query($connect,$query);


    if($result){
        echo "Data Saved Succsessfully in Database";
    }

}


?>
    
</body>
</html>