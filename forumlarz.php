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

<form action="forumlarz.php" method="post">
    <label for="jed">Jeden</label><br>
    <input type="text" id="jed" name="jed"> <br>
    <label for="jed">Dwa</label><br>
    <input type="text" id="dru" name="dru"> <br>
    <label for="jed">Trzy</label><br>
    <input type="text" id="trz" name="trz"> <br>

    <input type="Submit" value="Submit">




</form>
<pre>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")

var_dump($_POST["jed"]);
var_dump($_POST["dru"]);
var_dump($_POST["trz"]);

var_dump(trim($_POST["jed"]));
var_dump(stripslashes($_POST["dru"]));
var_dump(htmlspecialchars($_POST["trz"]));



?>
</pre>

<?php
$a = array(
    'styczen' => '1',
    'luty' => '2',
    'marzec' => '3',
    'kwiecien'  => '4',
    'maj' => '5',
    'czerwiec' => '6',
    'lipiec' => '7',
    'sierpien' => '8',
    'wrzesien' => '9',
    'pazdziernik' => '10',
    'listopad' => '11',
    'grudzien' => '12',
);
print_r($a);
?>
</body>
</html>






