<!DOCTYPE html>
<html>

<body>

    <h2>Makanan Khas Nusantara</h2>

    <?php
    $cars = array("Jawa Tengah", "Jawa Timur", "Jawa Barat", "Kalimantan", "Sulawesi", "Sumatera", "Bali", "Papua", "Maluku", "NTT");
    $foods = array("Gudeg", "Rawon", "Sate Maranggi", "Soto Banjar", "Coto Makassar", "Rendang", "Lawar", "Papeda", "Ikan Asar", "Se'i Sapi");

    echo "<table border='1'>";
    echo "<tr><th>Provinsi</th><th>Makanan Khas</th></tr>";  // Header table
    for ($i = 0; $i < count($cars); $i++) {
        echo "<tr><td>$cars[$i]</td><td>$foods[$i]</td></tr>";
    }
    echo "</table>";
    ?>

</body>

</html>