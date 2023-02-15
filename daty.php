<!doctype html>
<html lang="en">
<head>
</head>
<body>
<style>

    table{
        border-collapse: collapse;
    }

</style>
<?php
$dni = array("pon", "wto", "śro", "czw", "pią", "sob", "nie");

echo "<table>";
echo "<tr>";

foreach ($dni as $a) {
    echo "<td style='border: 2px solid black; padding: 20px;'>$a</td>";
}

echo "</tr>";
echo "</table>";
?>
</body>
</html>
