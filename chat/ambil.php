<?php
require "kdb.php";

$result = mysqli_query($kdb, "SELECT * FROM pesan ORDER BY waktu ASC");
while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class='pesan'>";
    echo "<strong>" . htmlspecialchars($row['nama']) . ":</strong> ";
    echo htmlspecialchars($row['isi']);
    echo "<br><span class='waktu'>" . date('H:i', strtotime($row['waktu'])) . "</span>";
    echo "</div>";
}
?>
