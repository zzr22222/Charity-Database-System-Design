<?php
include("conn.php");
$table_name = 'Gifts';
$conn = mysqli_connect("localhost", "root", "123456", "donationdb");
$query = 'insert into ' . $table_name . ' (';
$res = mysqli_query($conn, "show columns from " . $table_name);
$rows = mysqli_num_rows($res);
$columns = array();
for ($i = 0; $i < $rows; $i++) {
  $cname = mysqli_fetch_array($res)[0];
  array_push($columns, $cname);
  $query = $query . $cname . ',';
}
$query = substr($query, 0, strlen($query) - 1);
$query = $query . ') values (';
$query = $query . '"' . $_POST["giftid"] . '",';
$query = $query . '"' . $_POST["DonorId"] . '",';
$query = $query . '"' . $_POST["charityid"] . '",';
$query = $query . '"' . $_POST["date"] . '",';
$query = $query . '"' . $_POST["money"] . '"';
$query = $query . ')';
$res = mysqli_query($conn, $query);
if ($res) {
  echo "<a href='confirmation.html' >Click here to confirm!</a>";
} else {
  $errorCode = mysqli_sqlstate($conn);
  echo "<script>window.alert('Add Failed. Error Code:" . $query . "');history.back(1);</script>";
}
?>
