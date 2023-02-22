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
$a = array(
    'styczen',
    'luty' ,
    'marzec' ,
    'kwiecien'  ,
    'maj' ,
    'czerwiec' ,
    'lipiec' ,
    'sierpien' ,
    'wrzesien' ,
    'pazdziernik' ,
    'listopad' ,
    'grudzien' ,
);


?>

<select>
<?php
$selected = '';
foreach($a as $indeks => $a) {


    echo '<option value="' . $a . '"' . $selected . '>' . $a . '</option>';
}
?>
</select>
</body>

</html>
