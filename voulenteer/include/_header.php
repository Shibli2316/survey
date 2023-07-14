<?php

session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: ../index.php");
    exit;
}else{
    $usernameVoul = $_SESSION['username'];
    // echo $usernameVoul;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    
    <nav class='navbar navbar-expand-lg bg-dark navbar-dark'>
        <div class='container-fluid'>
            <a class='navbar-brand' href='../dash/'>Survey</a>
            <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarNav'>
                <ul class='navbar-nav ms-auto'>

                    <li class='nav-item'>
                        <a class='nav-link' href='../dash/'>Dashboard</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='../collect/family.php'>Family</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='../collect/home.php'>Home</a>
                    </li>

                    <li class='nav-item'>
                        <a class='nav-link' href='../collect/head.php'>Head</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='../collect/spouse.php'>Spouse</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='../collect/child.php'>Children</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='../collection/logout.php'>Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container mx-auto m-3">
    <div class="p-5 mb-4 bg-body-tertiary rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Genral Instruction</h1>
            <p class="justify-content-center fs-10">Write correct name.</p>
            <p class="justify-content-center fs-10">Upload all information.</p>
            <p class="justify-content-center fs-10">Do not force for extra information.</p>
            <p class="justify-content-center fs-10">Make sure the spellings are correct.</p>
        </div>
    </div>