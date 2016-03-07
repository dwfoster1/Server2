<?php
require "conn.php";
$username = $_POST["user"];
$password = $_POST["pass"];

$mysql_qry = "SELECT * FROM player_info WHERE username='$username' and password='$password'";
$result = mysqli_query($conn ,$mysql_qry);
if(mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_assoc($result);
	$name = $row["name"];
	echo "Login successful! Welcome " .$name;
}
else {
	echo "Login not successful";
	echo $username 
	echo $password
}
?>
