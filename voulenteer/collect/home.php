<?php
include '../include/_header.php';
?>

<form action="../collection/homeBE.php" method="post">
    <div class="card">
        <div class="card-header text-center">
            Details about house
        </div>
        <div class="mx-3 mt-3">
            <label class="form-label" for="name">Does the family own a house:</label>
            <!-- RADIO -->
            <input class="form-control" type="text" name="house" id="house" placeholder="Yes/No">
        </div>

        <div class="mx-3 my-1">
            <label class="form-label" for="name">Type of house:</label>
            <!-- DROPDOWN -->
            <input class="form-control" type="text" name="type" id="type" placeholder="Type of house">
        </div>

        <div class="mx-3 my-1">
            <label class="form-label" for="name">If joined, no of families living:</label>
            <input class="form-control" type="text" name="ifJoined" id="ifJoined" placeholder="Enter number of families">
        </div>

        <div class="mx-3 my-1">
            <label class="form-label" for="name">No of rooms:</label>
            <input class="form-control" type="text" name="rooms" id="rooms" placeholder="Enter number of rooms">
        </div>

        <div class="mx-3 my-1">
            <label class="form-label" for="name">Address:</label>
            <input class="form-control" type="text" name="address" id="address" placeholder="Enter address">
        </div>

        <div class="mx-3 my-1">
            <label class="form-label" for="name">Electricity supply:</label>
            <!-- RADIO -->
            <input class="form-control" type="text" name="isEle" id="isEle" placeholder="Do they have electricity supply">
        </div>

        <div class="mx-3 my-1">
            <label class="form-label" for="name">Water supply:</label>
            <!-- RADIO -->
            <input class="form-control" type="text" name="isWater" id="isWater" placeholder="Do they have water supply">
        </div>

        <div class="mx-3 my-1">
            <label class="form-label" for="name">Locality:</label>
            <!-- DROPDOWN -->
            <input class="form-control" type="text" name="locality" id="locality" placeholder="What is there locality">
        </div>

        <div class="mx-3 my-1">
            <label class="form-label" for="name">Electronics:</label>
            <!-- CHECKBOX -->
            <input class="form-control" type="text" name="ele" id="ele" placeholder="Electronic gadgets owned by the family">
        </div>

        <div class="mx-3 m-3 text-center">
            <button class="btn btn-primary">SAVE</button>
        </div>

    </div>
</form>
<?php
include '../include/_footer.php';
?>