<?php
include '../include/_header.php';
?>

<div class="card text-center">
    <div class="card-header">
        Your dashboard
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6 mx-auto m-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Number of survey done:</h5>
                        <p class="card-text">5</p>
                        <a href="#" class="btn btn-primary">View</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mx-auto m-3">
                <div class="card">
                    <div class="card-body">
                        <div class="mx-3">
                            <label class="form-label" for="name">Report inaccuracy/Edit:</label>
                            <input class="form-control" type="text" name="#" id="#" placeholder="Enter head name" readonly>
                            <a href="#" class="btn btn-primary mt-2">Request Change</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer text-muted">
        2 survey done today
    </div>
</div>



<?php
include '../include/_footer.php';
?>