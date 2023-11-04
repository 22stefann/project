<?php
include("db.php");

// Upit za izvlačenje podataka
$query = "SELECT * FROM proizvodi";
$result = $connection->query($query);

if ($result->num_rows > 0) {
    echo "<h1>Proizvodi:</h1>";
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Naziv: " . $row["name"] . " - Description: " . $row["description"]. " - Price: " . $row["price"]. "<br>" ;
    }
} else {
    echo "Nema rezultata.";
}

$connection->close();
?>
