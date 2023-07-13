<?php
include '../include/_header.php';
?>
<form action="../collection/familyBE.php" method="post">
    <div class="card">
        <div class="card-header text-center">
            Details of the Family
        </div>
        <div class="mx-3 mt-3">
            <label class="form-label" for="name">Nature of family:</label>
            <!-- DROPDOWN -->
            <input class="form-control" type="text" name="nature" id="nature" placeholder="Enter nature of family">
        </div>

        <div class="mx-3 my-1">
            <label class="form-label" for="name">No of members:</label>
            <input class="form-control" type="text" name="members" id="members" placeholder="Enter number of members">
        </div>

        <div class="mx-3 my-1">
            <label class="form-label" for="name">Cast:</label>
            <input class="form-control" type="text" name="cast" id="cast" placeholder="Enter cast">
        </div>

        <div class="mx-3 my-1">
            <label class="form-label" for="name">No of bank accounts the family has:</label>
            <input class="form-control" type="text" name="bankAcc" id="bankAcc" placeholder="Enter the number of bank accounts">
        </div>

        <div class="mx-3 my-1">
            <label class="form-label" for="name">Any government scheme:</label>
            <input class="form-control" type="text" name="govt" id="govt" placeholder="Enter name of scheme">
        </div>

        <div class="mx-3 my-1">
            <label class="form-label" for="name">Family income:</label>
            <input class="form-control" type="text" name="income" id="income" placeholder="Rough estimate">
        </div>

        <div class="mx-3 my-1">
            <label class="form-label" for="name">Any illness:</label>
            <input class="form-control" type="text" name="illness" id="illness" placeholder="Enter the name of illness if any">
        </div>

        <div class="mx-3 my-1">
            <label class="form-label" for="name">No of children:</label>
            <input class="form-control" type="text" name="child" id="child" placeholder="Enter number of children in the family">
        </div>

        <div class="mx-3 m-3 text-center">
            <button class="btn btn-primary">SAVE</button>
        </div>

    </div>
</form>

<?php
include '../include/_footer.php';
?>