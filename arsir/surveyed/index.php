<?php
include '../includes/header.php';
?>

<?php

$connect = new PDO("mysql:host=localhost;dbname=survey", "root", "");

$query = "
SELECT * FROM ars;
";

$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Data collected</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">List of people surveyed</h6>
            <button type="button" class="btn btn-sm btn-primary">
                Add
                <i class="fas fa-fw fa-plus"></i>
            </button>
        </div>


        <!-- add filters here -->
        <div class="card-body">
            <div class="row">
                <form method="post" action="export.php">
                    <div class="col-md-2">
                        <input type="submit" name="export" value="Export" class="btn btn-info" />
                    </div>
                </form>
            </div>



            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Name</th>
                                <th>Posted on</th>
                                <th>Survey done</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>S.No</th>
                                <th>Name</th>
                                <th>Posted on</th>
                                <th>Survey done</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        <?php
      foreach($result as $row)
      {
       echo '
       <tr>
        <td>'.$row["a_id"].'</td>
        <td>'.$row["uname"].'</td>
        <td>'.$row["password"].'</td>
        <td>'.$row["email"].'</td>
        <td>View | Delete</td>

       </tr>
       ';
      }
      ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php
    include '../includes/footer.php';
    ?>