
<?php

$number1 = (float)readline("Enter the first number: ");
$number2 = (float)readline("Enter the second number: ");

$addition = $number1 + $number2;
$subtraction = $number1 - $number2;
$multiplication = $number1 * $number2;
$division = $number2 != 0 ? $number1 / $number2 : 'undefined (division by zero)';
$modulo = $number2 != 0 ? $number1 % $number2 : 'undefined (modulo by zero)';
$exponentiation = $number1 ** $number2;

echo "Addition: $number1 + $number2 = $addition\n <br>";
echo "Subtraction: $number1 - $number2 = $subtraction\n <br>";
echo "Multiplication: $number1 * $number2 = $multiplication\n <br>";
echo "Division: $number1 / $number2 = $division\n <br>";
echo "Modulo: $number1 % $number2 = $modulo\n<br>";
echo "Exponentiation: $number1 ** $number2 = $exponentiation\n<br>";

$result1 = ($number1 + $number2) * $number1;
$result2 = $number1 + ($number2 * $number1);
$result3 = $number1 != 0 ? ($number1 ** $number2) % $number1 : 'undefined (modulo by zero)';
$result4 = $number1 != 0 ? $number1 ** ($number2 % $number1) : 'undefined (modulo by zero)';

echo "Result 1: ($number1 + $number2) * $number1 = $result1\n";
echo "Result 2: $number1 + ($number2 * $number1) = $result2\n";
echo "Result 3: ($number1 ** $number2) % $number1 = $result3\n";
echo "Result 4: $number1 ** ($number2 % $number1) = $result4\n";
?>
