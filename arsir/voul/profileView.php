<?php
include '../includes/header.php';
include '../includes/_dbconnect.php';
$vid=$_GET['vid'];


$sql = "SELECT * FROM `voul` WHERE username = '$vid'";
    $result = mysqli_query($conn, $sql);
    
    // Storing it into an associative array called details.
    $details = mysqli_fetch_assoc($result);
    // echo $details;
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">XYZ profile</h1>

    <div class="container-xl px-4 mt-4">
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Profile Picture</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-account-profile rounded-circle mb-2 img-fluid" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                        <!-- Profile picture upload button-->
                        <input type="file" name="" id="" class="btn btn-primary">
                        <!-- <button class="btn btn-primary" type="button">Upload new image</button> -->
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Account Details</div>
                    <div class="card-body">
                        <form>
                            <!-- Form Group (username)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Username (how your name will appear to other users on the site)</label>
                                <input readonly class="form-control" id="inputUsername" type="text" placeholder="Enter your username" value="<?=$details['username']?>">
                                <label class="small my-3" for="inputUsername">Password (this is sensitive data. DO NOT SHARE OR MISUSE)</label>
                                <input readonly class="form-control mb-1" id="inputUsername" type="text" placeholder="Enter your password" value="<?=$details['password']?>">
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputFirstName">First name</label>
                                    <input readonly class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="<?=$details['fname']?>">
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLastName">Last name</label>
                                    <input readonly class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="<?=$details['lname']?>">
                                </div>
                            </div>
                            <!-- Form Row        -->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (organization name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputOrgName">Personal Details</label>
                                    <input readonly class="form-control" id="inputOrgName" type="text" placeholder="Enter your" value="<?=$details['details']?>">
                                </div>
                                <!-- Form Group (location)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLocation">Location</label>
                                    <input readonly class="form-control" id="inputLocation" type="text" placeholder="Enter your address" value="<?=$details['address']?>">
                                </div>
                            </div>
                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                <input readonly class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="<?=$details['email']?>">
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (phone number)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputPhone">Phone number</label>
                                    <input readonly class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="<?=$details['phone']?>">
                                </div>
                                <!-- Form Group (birthday)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputBirthday">First Day</label>
                                    <input readonly class="form-control" id="inputBirthday" type="text" name="birthday" placeholder="Enter your first day" value="<?=$details['employed']?>">
                                </div>
                            </div>
                            <!-- Save changes button-->
                            <button class="btn btn-primary" type="button">Save changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include '../includes/footer.php';
?>