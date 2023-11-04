<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "project_1";


$connection = new mysqli($server, $username, $password, $database);

if ($connection->connect_error) {
    die("Konekcija na bazu podataka nije uspela: " . $connection->connect_error);
}
?>
