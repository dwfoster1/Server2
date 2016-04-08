<?php
require "conn.php";
/*
 * Following code will list all the players
 */

// array for JSON response
$response = array();
    
// get all names from player table
$result = mysql_query("SELECT *FROM player_info") or die(mysql_error());

// check for empty result
if (mysql_num_rows($result) > 0) {
    // looping through all results
    // player node
    $response["userlist"] = array();

    while ($row = mysql_fetch_array($result)) {
        $response["success"] = 1;
        // temp user array
            $userlist = array();
            $userlist["id"] = $row["id"];
            $userlist["username"] = $row["username"];

        // push player name into final response array
        array_push($response["userlist"], $userlist);
    }
    // success
    $response["message"] = "DISPLAYED Success";

    // echoing JSON response
    echo json_encode($response);
} else {
    // no player found
    $response["success"] = 0;
    $response["message"] = "No User(s) found";

    // echo no users JSON
    echo json_encode($response);
}
?>