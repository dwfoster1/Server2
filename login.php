<?php
require "conn.php";
$username = $_POST["username"];
$password = $_POST["password"];
#$username = "wck";
#$password = "capstone";
$mysql_qry = "SELECT * FROM player_info WHERE username='$username' and password='$password'";
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