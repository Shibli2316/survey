<?php
$server = "localhost";
$database = "survey";
$user = "root";
$pass = "";

$conn = mysqli_connect($server, $user, $pass, $database);

if($conn){
    echo "Connected";
}else{
    echo "Error in connection";
}
?>