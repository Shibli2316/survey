<?php
include '../includes/header.php';
include '../includes/_dbconnect.php';
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Voulenteers</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">List of voulenteers</h6>
            <a href="add.php">
                <button type="button" class="btn btn-sm btn-primary">
                    Add
                    <i class="fas fa-fw fa-plus"></i>
                </button>
            </a>
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
                    <?php
                    $sno = 1;
                    $sql = "SELECT * FROM `voul`;";
                    $run = mysqli_query($conn, $sql);
                    if (!$run) {
                        echo "error";
                    }
                    // Chechking the number of rows the database has and iterating it only if the number of rows are greater than 0
                    $howManyRows = mysqli_num_rows($run);
                    // var_dump($howManyRows);
                    if ($howManyRows > 0) {
                        while ($row = mysqli_fetch_assoc($run)) {
                            echo
                            "<tbody>
                        <tr>
                            <td>" . $sno . "</td>
                            <td>" . $row['fname'] . "</td>
                            <td>" . $row['employed'] . "</td>
                            <!-- A link has to be added here to go to particular.php -->
                            <td>3</td>
                            <td> <a href='profileView.php?vid=".$row['v_id']."'> View </a> | Delete</td>
                        </tr>
                    </tbody>";
                            $sno = $sno + 1;
                        }
                    }
                    // If there is 0 records it will display no records.
                    else {
                        echo "No records yet";
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
include '../includes/footer.php';
?>