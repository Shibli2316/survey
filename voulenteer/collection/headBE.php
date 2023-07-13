<?php
include '../include/_dbconnect.php';

if($_SERVER['REQUEST_METHOD']=="POST"){
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $dob = $_POST['dob'];
    $qual = $_POST['qual'];
    $employment = $_POST['employment'];
    $phone = $_POST['phone'];
    $aadhar = $_POST['aadhar'];
    $oID = $_POST['oID'];
    $oIDnum = $_POST['oIDnum'];
    
    $sql = "INSERT INTO `head` (`name`, `gender`, `age`, `dob`, `qualification`, `employment`, `phone`, `aadhar`, `otherID`, `idNum`) VALUES ('$name', '$gender', '$age', '$dob', '$qual', '$employment', '$phone', '$aadhar', '$oID', '$oIDnum');";
    $run = mysqli_query($conn, $sql);
    if($run){
        echo "<script>alert('Your records has been updated successfully!!!')</script>";
        ?>
        <meta http-equiv="refresh" content="0; url = ../collect/spouse.php" />
        <?php
    }else{
        echo "<script>alert('Error while updating. Please try again.')</script>";
        ?>
        <meta http-equiv="refresh" content="0; url = ../collect/head.php" />
        <?php
    }
}