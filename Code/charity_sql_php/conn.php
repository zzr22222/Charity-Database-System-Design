<?php
$hostname = "localhost"; //主机名,可以用IP代替
$database = "donationdb"; //数据库名
$username = "root"; //数据库用户名
$password = "123456"; //数据库密码
$conn = mysqli_connect($hostname, $username, $password) or trigger_error(mysqli_error() , E_USER_ERROR);
mysqli_select_db($conn,$database);
$db = @mysqli_select_db($conn,$database) or die("未选择任何数据库");
?>


