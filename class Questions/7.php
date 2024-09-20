
<?php
// Define multiple variables with some of them being null
$var1 = null;
$var2 = null;
$var3 = 'First non-null value';
$var4 = 'Another value';

// Use the null coalescing operator to find the first non-null value
$firstNonNull = $var1 ?? $var2 ?? $var3 ?? $var4;

// Output the result
echo "The first non-null value is: " . $firstNonNull;
?>
