<?php
header( 'Content-Type:text/xml' );
require "conn.php";
$dd = new PDO('mysql:host=localhost;dbname=ttt', 'root', '');
$sql = 'INSERT INTO player_info VALUES ( 0 )';
$sth = $dd->prepare($sql);
$sth->execute( array() );
$qid = $dd->lastInsertId();

$doc = new DOMDocument();
$r = $doc->createElement( "game" );
$r->setAttribute( 'id', $qid );
$doc->appendChild( $r );

print $doc->saveXML();
?>