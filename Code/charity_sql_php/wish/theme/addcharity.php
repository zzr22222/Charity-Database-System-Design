<?php
include("conn.php");
$table_name = 'Donor';
$conn = mysqli_connect("localhost", "root", "123456", "donationdb");
$query = '';
$query = $query  . $_POST["cid"] .',';
$query = $query . '"' . $_POST["caid"] . '",';
$query = $query . '"' . $_POST["cn"] . '",';
$query = $query . '"' . $_POST["add"] . '",';
$query = $query . '"' . $_POST["zip"] . '",';
$query = $query . '"' . $_POST["tel"] . '",';
$query = $query . '"' . $_POST["rev"] . '",';
$query = $query . '"' . $_POST["pe"] . '",';
$query = $query . '"' . $_POST["ae"] . '",';
$query = $query . '"' . $_POST["fe"] . '"';

$res = mysqli_query($conn, "call manage_charity($query);");
if ($res) {
  echo "<a href='confirmation1.html' >Click here to confirm!</a>";
}
else {
  $errorCode = mysqli_sqlstate($conn);
  echo "<script>window.alert('Add Failed. Error Code:" . $query . "');history.back(1);</script>";
}
?>

