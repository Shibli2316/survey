<?php
include '../include/_dbconnect.php';

if($_SERVER['REQUEST_METHOD']=="POST"){
    $nature = $_POST['nature'];
    $members = $_POST['members'];
    $cast = $_POST['cast'];
    $bankAcc = $_POST['bankAcc'];
    $govt = $_POST['govt'];
    $income = $_POST['income'];
    $illness = $_POST['illness'];
    $child = $_POST['child'];
    
    $sql = "INSERT INTO `family` (`nature`, `member`, `cast`, `noBank`, `govtScheme`, `income`, `illness`, `child`) VALUES ('$nature', '$members', '$cast', '$bankAcc', '$govt', '$income', '$illness', '$child');";
    $run = mysqli_query($conn, $sql);
    
    if($run){
        echo "<script>alert('Your records has been updated successfully!!!')</script>";
        ?>
        <meta http-equiv="refresh" content="0; url = ../collect/home.php" />
        <?php
    }else{
        echo "<script>alert('Error while updating. Please try again.')</script>";
        ?>
        <meta http-equiv="refresh" content="0; url = ../collect/family.php" />
        <?php
    }
}