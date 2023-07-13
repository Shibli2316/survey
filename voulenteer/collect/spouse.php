<?php
include '../include/_header.php';
?>

<form action="../collection/spouseBE.php" method="post">
    <div class="card">
        <div class="card-header text-center">
            Details about the spouse
        </div>
        <div class="mx-3 mt-3">
            <label class="form-label" for="name">Name:</label>
            <input class="form-control" type="text" name="name" id="name" placeholder="Enter name">
        </div>

        <div class="mx-3 my-1">
            <label class="form-label" for="name">Gender:</label>
            <!-- DROPDOWN -->
            <input class="form-control" type="text" name="gender" id="gender" placeholder="Enter gender">
        </div>

        <div class="mx-3 my-1">
            <label class="form-label" for="name">Age</label>
            <input class="form-control" type="text" name="age" id="age" placeholder="Enter age">
        </div>

        <div class="mx-3 my-1">
            <label class="form-label" for="name">Date of birth:</label>
            <input class="form-control" type="text" name="dob" id="dob" placeholder="Enter DOB">
        </div>

        <div class="mx-3 my-1">
            <label class="form-label" for="name">Highest Qualification:</label>
            <!-- DROPDOWN -->
            <input class="form-control" type="text" name="qual" id="qual" placeholder="Enter highest qualification">
        </div>

        <div class="mx-3 my-1">
            <label class="form-label" for="name">Employment:</label>
            <!-- DROPDOWN -->
            <input class="form-control" type="text" name="employment" id="employment" placeholder="Enter their employment">
        </div>

        <div class="mx-3 my-1">
            <label class="form-label" for="name">Phone number:</label>
            <input class="form-control" type="text" name="phone" id="phone" placeholder="Enter House Number">
        </div>

        <div class="mx-3 my-1">
            <label class="form-label" for="name">Aadhar number:</label>
            <input class="form-control" type="text" name="aadhar" id="aadhar" placeholder="Enter aadhar number">
        </div>

        <div class="mx-3 my-1">
            <label class="form-label" for="name">Any other id:</label>
            <!-- RADIO -->
            <input class="form-control" type="text" name="oID" id="oID" placeholder="Enter other id name">
        </div>

        <div class="mx-3 my-1">
            <label class="form-label" for="name">Id number:</label>
            <input class="form-control" type="text" name="oIDnum" id="oIDnum" placeholder="Enter other id number">
        </div>

        <div class="mx-3 m-3 text-center">
            <button class="btn btn-primary">SAVE</button>
        </div>

    </div>
</form>

<?php
include '../include/_footer.php';
?>