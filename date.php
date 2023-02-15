<!doctype html>
<html lang="en">
<head>
    <style>

        table{
            border-collapse: collapse;
        }

    </style>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<caption>31</caption>
</body>
</html>
<?php

$b = date('n');
$c = date('t', strtotime("$b-01"));

echo '<table>';
echo '<tr>';
for ($a = 1; $a <= $c; $a++) {
    echo '<td style="border: solid 2px black; padding: 20px">';
    echo $a;
    echo '</td>';
    if ($a % 7 == 0) {
        echo '</tr>';
        echo '<tr>';
    }
}
echo '</tr>';
echo '</table>';

;


?>
