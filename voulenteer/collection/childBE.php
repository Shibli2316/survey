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
    $withParent = $_POST['withParent'];
    $currentAddress = $_POST['currentAddress'];
    $status = $_POST['status'];
    
    $sql = "INSERT INTO `child` (`name`, `gender`, `age`, `dob`, `qualification`, `employment`, `phone`, `aadhar`, `otherID`, `idNum`, `status`, `isWithParent`, `otherAddress`) VALUES ('$name', '$gender', '$age', '$dob', '$status' ,'$qual', '$employment', '$phone', '$aadhar', '$oID', '$oIDnum', '$withParent', '$currentAddress');";
    $run = mysqli_query($conn, $sql);
    if($run){
        echo "<script>alert('Your records has been updated successfully!!!')</script>";
        ?>
        <meta http-equiv="refresh" content="0; url = ../dash/index.php" />
        <?php
    }else{
        echo "<script>alert('Error while updating. Please try again.')</script>";
        ?>
        <meta http-equiv="refresh" content="0; url = ../collect/child.php" />
        <?php
    }
}