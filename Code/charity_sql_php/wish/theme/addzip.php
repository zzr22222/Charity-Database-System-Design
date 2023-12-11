<?php
include("conn.php");
$table_name = 'Zip';
$conn = mysqli_connect("localhost", "root", "123456", "donationdb");
$query = '';

$query = $query . '"' . $_POST["zip"] . '",';
$query = $query . '"' . $_POST["city"] . '",';
$query = $query . '"' . $_POST["state"] . '"';
$res = mysqli_query($conn, "call manage_zip($query);");
if ($res)
  echo "<script>window.alert('Add Succeed. Please return.');history.back(1);</script>";
else {
  $errorCode = mysqli_sqlstate($conn);
  echo "<script>window.alert('Add Failed. Error Code:" . $query . "');history.back(1);</script>";
}
?>
