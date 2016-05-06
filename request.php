<?php
/**
*script to get latitude and longitude coordinates for each player whenever 
*the player updates location on the app.
*
*@author Dylan Foster
*@version 5/2/16
*/
$sql = "SELECT name, lat, lng FROM player_info";

require "conn.php";

$result = $conn->query($sql);

$xml = "<?xml version=\"1.0\"?>";
$xml .= "<PLAYERS>";

while($data = mysqli_fetch_assoc($result)) {
  $i = 0;
  $xml1 = "<PLAYER>";
  $tag = "NAME";

  #This makes sure the order is correct based on our sql query
  foreach($data as $key => $value){
	 $xml1 .= "<$tag>$value</$tag>";
     if($tag == "NAME"){
        $tag = "LAT";
     }elseif($tag == "LAT"){
        $tag = "LNG";
     }else{
        $tag = "NAME";
     }
  }
  $xml1 .= "</PLAYER>";
  $xml .= $xml1;
  $xml1 = "<PLAYER>";
}
$xml .= "</PLAYERS>";  
echo $xml;
return $xml;
?>