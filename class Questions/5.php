<?php
function areaOfRectangle($length, $width) {
  return $length * $width;
}
function areaOfSquare($side) {
  return $side * $side;
}

function areaOfTriangle($base, $height) {
  return 0.5 * $base * $height;
}

function areaOfCircle($radius) {
  return pi() * pow($radius, 2);
}

$length = 10;
$width = 5;
$side = 4;
$base = 8;
$height = 6;
$radius = 3;

echo "Area of Rectangle: " . areaOfRectangle($length, $width) . " square units\n<br>";
echo "Area of Square: " . areaOfSquare($side) . " square units\n<br>";
echo "Area of Triangle: " . areaOfTriangle($base, $height) . " square units\n<br>";
echo "Area of Circle: " . areaOfCircle($radius) . " square units\n<br>";
