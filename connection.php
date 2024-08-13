<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'crudform';

$connection = mysqli_connect($host, $username, $password, $dbname);

if($connection){
    // echo "Connected to database";
}else{
    echo "Not connected to database";
}

?>