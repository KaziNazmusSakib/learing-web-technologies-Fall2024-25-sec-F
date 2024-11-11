<?php

// To calculate area
function calculateArea($length, $width) {
    return $length * $width;
}

// To calculate perimeter
function calculatePerimeter($length, $width) {
    return 2 * ($length + $width);
}

// Given values
$length = 10;
$width = 5;

$area = calculateArea($length, $width);
$perimeter = calculatePerimeter($length, $width);

echo "Area of Rectangle: $area\n";
echo "Perimeter of Rectangle: $perimeter";

?>
