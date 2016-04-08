<?php
function show_names( $dbh, $game ) {
  $sql = 'SELECT * FROM moves WHERE game=?';

  $q = $dbh->prepare( $sql );
  $q->execute( array( $game ) );

  $doc = new DOMDocument();
  $r = $doc->createElement( "player_list" );
  $doc->appendChild( $r );

  foreach ( $q->fetchAll() as $row) {
    $e = $doc->createElement( "list" );
    $e->setAttribute( 'x', $row['x'] );
    $e->setAttribute( 'color', $row['color'] );
    $r->appendChild( $e );
  }

  print $doc->saveXML();
}
?>