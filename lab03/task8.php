<?php
 
$array2D = [
    [1, 2, 3, 4],
    [5, 6, 7, 8]
];
 
foreach ($array2D as $row) {
    foreach ($row as $element) {
        echo $element . " ";
    }
    echo "<br>";
}
?>