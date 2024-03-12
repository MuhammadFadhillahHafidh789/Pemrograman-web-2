<?php
echo "<table border='1'>";
echo "<tr><th>*</th>";
for ($i = 1; $i <= 15; $i++) {
    echo "<th>$i</th>";
}
echo "</tr>";

for ($i = 1; $i <= 15; $i++) {
    echo "<tr><th>$i</th>";
    for ($j = 1; $j <= 15; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
