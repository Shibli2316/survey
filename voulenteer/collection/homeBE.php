<?php
include '../include/_dbconnect.php';

if($_SERVER['REQUEST_METHOD']=="POST"){
    $house = $_POST['house'];
    $type = $_POST['type'];
    $ifJoined = $_POST['ifJoined'];
    $rooms = $_POST['rooms'];
    $address = $_POST['address'];
    $isEle = $_POST['isEle'];
    $isWater = $_POST['isWater'];
    $locality = $_POST['locality'];
    $ele = $_POST['ele'];
    
    $sql = "INSERT INTO `home` (`isHouse`, `type`, `families`, `room`, `address`, `isElec`, `isWater`, `locality`, `electronics`) VALUES ('$house', '$type', '$ifJoined', '$rooms', '$address', '$isEle', '$isWater', '$locality', '$ele');";
    $run = mysqli_query($conn, $sql);
    if($run){
        echo "<script>alert('Your records has been updated successfully!!!')</script>";
        ?>
        <meta http-equiv="refresh" content="0; url = ../collect/head.php" />
        <?php
    }else{
        echo "<script>alert('Error while updating. Please try again.')</script>";
        ?>
        <meta http-equiv="refresh" content="0; url = ../collect/home.php" />
        <?php
    }
}