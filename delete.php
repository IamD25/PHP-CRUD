<?php 
include "connection.php";

$id = $_GET["id"];

$query = "DELETE FROM `emp` WHERE `id`='$id'";
$result = mysqli_query($connection, $query);
if ($result  == TRUE) {
    echo "<script>alert('Data was Deleted!')</script>";
    echo "<script>location.replace('index.php')</script>";
    // header("index.php");
    
}else{
    echo "Error deleting data",$connection->error;
}
?>