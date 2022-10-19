<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
$wiek=40;
echo $wiek."<br>";


if ($wiek <= 17) {
    echo "Jeszcze nie możesz głosować";
}
else if ($wiek == 18) {
    echo "Możesz głosować";
}

else if ($wiek <= 21) {
    echo "Możesz głosować i kandydować do Sejmu";
}

else if ($wiek <= 34) {
    echo "Możesz głosować i kandydować do Sejmu i senatu";
}
else if ($wiek >= 35) {
    echo "Możesz głosować i kandydować do Sejmu i senatu oraz na Prezydenta";
}


?>

</body>
</html>

