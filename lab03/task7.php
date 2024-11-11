<?php

echo "<table border='1' cellpadding='5' cellspacing='0'>";

 
echo "<tr>";

 
echo "<td>";
echo "Pattern 1: <br>";
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
echo "</td>";

 
echo "<td>";
echo "Pattern 2: <br>";
for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}
echo "</td>";

 
echo "<td>";
echo "Pattern 3: <br>";
$letter = 'A';
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $letter . " ";
        $letter++;
    }
    echo "<br>";
}
echo "</td>";

 
echo "</tr>";

 
echo "</table>";
?>
