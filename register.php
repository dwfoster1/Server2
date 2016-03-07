<?php
require "conn.php";
$name = $_POST["name"];
$username = $_POST["user"];
$password = $_POST["pass"];

$mysql_query = "INSERT into user_info (name, username, password) values ('$name','$username','$password')";
    if($conn->query($mysql_qry) === TRUE){
        echo "DB Record Insert Successful!!!";
    }else{
        echo "DB Record Insert Error: ".$mysql_qry."<br>".$conn->error;
		echo $username
		echo $password
    }
$conn->close();
?>
