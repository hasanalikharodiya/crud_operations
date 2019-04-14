<?php
include "connection.php";
error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CRUD Operations</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="main.js"></script>
</head>
<body>


<div class="container"><br><br>
<div class=col-md-6 m-auto><button class="btn btn-success"><a class="text-white" href="insert.php">Insert Data</a></button></div>

  <h2 class="text-center m-auto">User Information</h2>           
  <table class="table table-striped col-md-11">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>MobileNumber</th>
        <th>Email Id</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <div class="card text-danger"> Created by : HasanAli Kharodiya</div>
    <?php

    $name = $_POST['name'];
    $mobilenumber = $_POST['mobilenumber'];
    $email = $_POST['email'];

    $query = "SELECT * FROM crudtable";

    $result = mysqli_query($connect,$query);

    while($display = mysqli_fetch_array($result)){
    ?>


      <tr>
        <td> <?php echo $display['id']; ?> </td>
        <td> <?php echo $display['name']; ?> </td>
        <td> <?php echo $display['mobilenumber']; ?> </td>
        <td> <?php echo $display['email']; ?> </td>
        <td> <button class="btn btn-primary"> <a class="text-white" href="update.php?id=<?php echo $display['id']; ?>"> Update </a> </button> </td>
        <td> <button class="btn btn-danger"> <a class="text-white" href="delete.php?id=<?php echo $display['id']; ?>"> Delete </a> </button> </td>
      </tr>
    <?php
    }
    ?>
  </table>

  
    
</body>
</html>