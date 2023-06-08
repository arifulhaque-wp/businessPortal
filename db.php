<?php

$localHost  = "localhost";
$dbUser     = "root";
$dbPassword = "";
$dbName     = "business_portal";

$conn = mysqli_connect( $localHost, $dbUser, $dbPassword, $dbName );

if ( !$conn ) {
 die( "Failed to connect with Database." );
}

?>