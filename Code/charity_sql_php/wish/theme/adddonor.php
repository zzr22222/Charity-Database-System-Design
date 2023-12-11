<?php
include("conn.php");
$table_name = 'Donor';
$conn = mysqli_connect("localhost", "root", "123456", "donationdb");
$query = '';
$query = $query  . $_POST["id"] .',';
$query = $query . '"' . $_POST["lname"] . '",';
$query = $query . '"' . $_POST["fname"] . '",';
$query = $query . '"' . $_POST["zip2"] . '",';
$query = $query . '"' . $_POST["Address"] . '",';
$query = $query . '"' . $_POST["phone"] . '"';
$res = mysqli_query($conn, "call manage_donor($query);");
if ($res) {
  echo "<a href='confirmation.html' >Click here to confirm!</a>";
}
else {
  $errorCode = mysqli_sqlstate($conn);
  echo "<script>window.alert('Add Failed. Error Code:" . $query . "');history.back(1);</script>";
}
?>

