<?php

$connect = new PDO("mysql:host=localhost;dbname=survey", "root", "");

$start_date_error = '';
$end_date_error = '';

if (isset($_POST["export"])) {
    $file_name = 'Survey Data.csv';
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=$file_name");
    header("Content-Type: application/csv;");

    $file = fopen('php://output', 'w');

    $header = array("Admin ID", "Username", "Password", "Email");

    fputcsv($file, $header);

    $query = "
  SELECT * FROM ars
  ";
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    foreach ($result as $row) {
        $data = array();
        $data[] = $row["a_id"];
        $data[] = $row["uname"];
        $data[] = $row["password"];
        $data[] = $row["email"];
        fputcsv($file, $data);
    }
    fclose($file);
    exit;
}

$query = "
SELECT * FROM ars;
";

$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

?>