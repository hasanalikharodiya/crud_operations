<?php
include "connection.php";


    $name = $_POST['name'];
    $mobilenumber = $_POST['mobilenumber'];
    $email = $_POST['email'];

    $query = "SELECT * FROM crudtable";

    $result = mysqli_query($connect,$query);


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Display Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="col-md-12">


</div>
    
</body>
</html>