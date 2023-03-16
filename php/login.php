<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "guvi";

$connection = mysqli_connect($serverName, $userName, $password, $dbName);

if(mysqli_connect_error()){
    echo "failed";
    exit();
}
// echo "database connected";      

$mailid = $_POST['mailid'];
$pwd = $_POST['pwd'];

// echo $mailid.$pwd;

$sql = "SELECT * FROM users WHERE email = '$mailid' and password = '$pwd'";
$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    echo "user found";
    echo $row["id"];
} else {
    echo "invalid credentials";
}

mysqli_close($connection);
?>
