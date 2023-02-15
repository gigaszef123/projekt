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

<h3>Aktualna godzina</h3>


</body>
</html>



<?php

$data = time();
echo date("H:i:s", $data);


?>
<h3>Osiem godzin później</h3>
<?php

$nowa_godzina = date('H:i:s', strtotime($current_time . '+ 8 hours'));
echo $nowa_godzina

?>


