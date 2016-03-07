<?php
/**
*conn.php - script to establish the database connection.
*
*@author Dylan Foster
*@version February 2016
*/
/**The database URL*/
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

/**The server URL*/
$server = $url["host"];

/**The database username*/
$username = $url["user"];

/**The database password*/
$password = $url["pass"];

/**The database name*/
$db = substr($url["path"], 1);

/**Makes the connection to the database*/
$conn = new mysqli($server, $username, $password, $db);
?>
