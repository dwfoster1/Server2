<?php
require "conn.php";
$name_db = $_POST["name"];
$username_db = $_POST["user"];
$password_db = $_POST["pass"];

$mysql_query = "INSERT into user_info (name, username, password) values ('$name_db','$username_db','$password_db')";
    if($conn->query($mysql_qry) === TRUE){
        echo "DB Record Insert Successful!!!";
    }else{
        echo "DB Record Insert Error: ".$mysql_qry."<br>".$conn->error;
		echo $username_db
		echo $password_db
    }
$conn->close();
?>
