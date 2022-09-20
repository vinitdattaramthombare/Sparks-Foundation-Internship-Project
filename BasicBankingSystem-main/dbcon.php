<?php
/* 
// For 000webhostapp database connection
$server = "localhost";
$username = "id19579538_sparksprojects";
$password = "aDoN{%7uY-S9e4RR";
$database = "id19579538_anand";
*/
// For localhost XAMPP database connection
$server = "localhost";
$username = "root";
$password = "";
$database = "Vinit";

$con = mysqli_connect($server, $username, $password, $database);

if (!$con) {
    die("connection to this database failed due to" . mysqli_connect_error());
} else {
    // echo "Success connecting to the db";
}

?>