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
<pre>
<?php

$owoce = array_fill(8, 5, 'mango');
print_r($owoce);


?>
    </pre>
<pre>
<?php
$parzyste = range(0, 12,2);
$dziesiatki = range(-10,100,10);
$polowki = range(-5.5, 5.5,0.5);
$litery_od_em = range("m","u");
$litery_wstecz = range("X","E" );
print_r($parzyste);
print_r($dziesiatki);
print_r($polowki);
print_r($litery_od_em);
print_r($litery_wstecz);



?>
    </pre>
<pre>
<?php
$info = array('Tworzenie', ' stron', ' aplikacji', ' internetowych');
list($n[0], $n[1], $n[2], $n[3]) = $info;
print_r($n);

echo "$n[0]".$n[1]. "$n[2]"." i". "$n[3]"."."


?>
    </pre>
<pre>
    <table style="border:solid"
    <table>
        <td>
<?php
$array = array(
        "Skazani na Shawshank" => "dramat",
    "Nietykalni" => "biograficzny",
    "Władca Pierścieni:Powrót króla" => "fantasy",
    "Pulp Fiction" => "gangsterski",
    "Siedem" => "kryminał",
    "Podziemny krąg" => "thriller",
    "Avangers: Wojna bez granic" => "akcja",
    "Dobry, zły i brzydki" => "western",



);

print_r($array);
asort( $array);
print_r($array);
ksort($array);
print_r($array);
arsort($array);
print_r($array);
krsort($array);
print_r($array);

?>
</pre>
</td>
</table>
</body>
</html>


