<?php
include '../includes/_dbconnect.php';

if($_SERVER['REQUEST_METHOD']=="POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pData = $_POST['pData'];
    $location = $_POST['location'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $fDay = $_POST['fDay'];
   
    
    $sql = "INSERT INTO `voul` (`username`, `password`, `fname`, `lname`, `details`, `address`, `email`, `phone`, `employed`) VALUES ('$username', '$password', '$fname', '$lname' ,'$pData', '$location', '$email', '$phone', '$fDay');";
    $run = mysqli_query($conn, $sql);
    // var_dump($sql);
    if($run){
        echo "<script>alert('Your records has been added successfully!!!')</script>";
        ?>
        <meta http-equiv="refresh" content="0; url = index.php" />
        <?php
    }else{
        echo "<script>alert('Error while updating. Please try again.')</script>";
        ?>
        <!-- <meta http-equiv="refresh" content="0; url = add.php" /> -->
        <?php
    }
}