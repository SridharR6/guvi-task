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

$id = $_POST['id'];

$sql = "SELECT * FROM users1 WHERE id = '$id'";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['fname']." ".$row['lname'];
echo "Name: ".$name."<br>"."Age: ".$row['age']."<br>"."Address: ".$row['address']."<br>"."Phone: ".$row['mobile']."<br>"."UserAgent: ".$_SERVER['HTTP_USER_AGENT']."<br>";
mysqli_close($connection);

?>
