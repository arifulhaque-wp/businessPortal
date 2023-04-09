<?php

$localHost  = "localhost";
$dbUser     = "root";
$dbpassword = "";
$dbname     = "business_portal";

$conn = new mysqli( $localHost, $dbUser, $dbpassword, $dbname );

if ( $conn->connect_errno ) {
    echo "Failed to connect with Database: " . $conn->connect_error;
    exit();
}

?>