<?php
require "conn.php";
$username = $_GET["username"];

$mysql_qry = "SELECT * FROM player_info WHERE username='$username'";
$result = mysqli_query($conn ,$mysql_qry);
if(mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_assoc($result);
	$name = $row["name"];
	echo "Login successful! Welcome " .$name;
}
else {
	echo "Login not successful";
}
?>