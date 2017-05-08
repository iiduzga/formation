<?php

$conn = mysqli_connect("localhost", "root", "", "kysely");

if (!$conn) {
	die("Connection failed:".mysqli_connect_error());
}
?>