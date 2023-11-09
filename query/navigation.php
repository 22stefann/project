<?php
//ucitavanje baze podatraka
include("db.php");

// Upit za izvlačenje podataka iz tabele navigacija
$query = "SELECT * FROM navigacija";
$result = $connection->query($query);
$connection->close();

?>