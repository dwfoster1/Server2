<?php
require "conn.php";
$name = $_POST["name"];
$username = $_POST["username"];
$password = $_POST["password"];
#$name = "Dylan";
#$username = "dwfoster";
#$password = "capstone";

$mysql_query = "insert into user_info (name, username, password) values ('$name','$username','$password')";
    if($conn->query($mysql_qry) === TRUE){
        echo "DB Record Insert Successful!!!";
    }else{
        echo "DB Record Insert Error: ".$mysql_qry."<br>".$conn->error;
    }
$conn->close();
?>
