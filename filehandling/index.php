<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $file = fopen("demo.txt","r");
    echo fread($file, filesize("demo.txt"));
    fclose($file);
?> 

</body>
</html>