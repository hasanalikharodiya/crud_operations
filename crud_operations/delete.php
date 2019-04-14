<?php

include "connection.php";

$id = $_GET['id'];

$query = " DELETE FROM `crudtable` WHERE id = $id ";

mysqli_query($connect,$query);

header('location:index.php');

?>