<?php
$server = "localhost";
$database = "survey_done";
$user = "root";
$pass = "";

$conn = mysqli_connect($server, $user, $pass, $database);

if($conn){
    echo "Connected";
}else{
    echo "Error in connection";
}
?>