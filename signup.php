<?php
	
include 'dbh.php';


$FName = $_POST['FName'];
$LName = $_POST['LName'];
$City = $_POST['City'];
$Department = $_POST['Department'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];

$sql = "INSERT INTO user (FName, LName, City, Department, Username, Password) VALUES ('$FName', '$LName', '$City', '$Department', '$Username', '$Password')";
$result = mysqli_query($conn, $sql);

header("Location: C:/xampp/htdocs/info.html");
?>