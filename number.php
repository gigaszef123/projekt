<!doctype html>
<html lang="en">
<head>

</head>
<body>


<?php

$x= 2525;
var_dump(is_int($x));
echo"<br>";
$x2= 2242;
var_dump(is_int($x2));
echo"<br>";
$x3= 524.2;
echo"zmienna ".$x3." ma wartość ".$x2." a funkcja is_int zwraca dla niej wartość ";var_dump(is_float($x3));
echo"<br>";
$x4= 223.2;
var_dump(is_float($x4));
echo"<br>";
$o=59.85 + 100;
var_dump(is_numeric($o));
echo"<br>";
echo"Stała PHP_INT_MAX ma wartość ". PHP_INT_MAX;
echo"<br>";
echo"Stała PHP_INT_MIN ma wartość ". PHP_INT_MIN;
echo"<br>";
echo"Stała PHP_INT_SIZE ma wartość ". PHP_INT_SIZE;
echo"<br>";
echo"Stała PHP_FLOAT_MAX ma wartość ". PHP_FLOAT_MAX;
echo"<br>";
echo"Stała PHP_FLOAT_MIN ma wartość ". PHP_FLOAT_MIN;
echo"<br>";
echo"Stała PHP_FLOAT_DIG ma wartość ". PHP_FLOAT_DIG;
echo"<br>";
echo"Stała PHP_FLOAT_EPSILON ma wartość ". PHP_FLOAT_EPSILON;
echo"<br>";




?>
</body>
</html>
