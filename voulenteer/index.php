<?php
$showError = false;

$server = "localhost";
$database = "survey";
$user = "root";
$pass = "";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
  echo "Error in connection";
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {


  $username = $_POST['username'];
  $pass = $_POST['password'];
  $username = mysqli_real_escape_string($conn, $username);

  $sql = "SELECT * FROM voul WHERE username = '$username'";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);


  if ($num == 1) {
    while ($row = mysqli_fetch_assoc($result)) {

      if ($pass == $row['password']) {
        // if (password_verify($pass, $row['pass'])){

        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header('location: dash/index.php');
      } else {
        $showError = "Invalid Password";
      }
    }
  } else {
    $showError = "Invalid Credentials";
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title>Login to your account</title>
</head>

<body>


  <?php

  if ($showError) {
    echo '<div class="alert alert-danger alert-success fade show" role="alert">
    <strong>Error! </strong>' . $showError . ' <br>Click <a href="index.php">here</a> to try again
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
  }

  ?>

  <section class="vh-100" style="background-color: #9A616D;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <!-- <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div> -->
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">

                  <form action="index.php" method="post">

                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                      <span class="h1 fw-bold mb-0">Logo</span>
                    </div>

                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                    <div class="form-outline mb-4">
                      <input type="text" id="form2Example17" class="form-control form-control-lg" name="username" />
                      <label class="form-label" for="form2Example17">Username</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" id="form2Example27" class="form-control form-control-lg" name="password" />
                      <label class="form-label" for="form2Example27">Password</label>
                    </div>

                    <div class="pt-1 mb-4">
                      <button class="btn btn-dark btn-lg btn-block">Login</button>
                    </div>

                    <a class="small text-muted" href="#!">Forgot password?</a>
                    <!-- <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? 
                  <a href="#!"style="color: #393f81;">Register here</a></p> -->
                    <br>
                    <a href="#!" class="small text-muted">Terms of use.</a>
                    <a href="#!" class="small text-muted">Privacy policy</a>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>

</html>