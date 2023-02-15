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

</body>
</html>

<p>Rozpoczęcie roku odbyło się w
<?php

echo date("l", mktime(9,0,0,9,1,2022));


    
    
    ?>
 i był to
    <?php

echo date("z", mktime(9,0,0,9,1,2022));




    ?>
 dzień roku
</p>
<p>

<p>Najbliższy Sylwester odbędzie się w
    <?php

echo date('N', strtotime( '31-12-2023'));
?>
 dniu tygodnia
</p>
<?php

$dni_tygodnia = array("poniedziałek", "wtorek", "środa", "czwartek", "piątek", "sobota", "niedziela");
$miesiace = array("styczeń", "luty", "marzec", "kwiecień", "maj", "czerwiec", "lipiec", "sierpień", "wrzesień", "październik", "listopad", "grudzień");

echo "urodziłem sie";
echo date(" l", mktime(0,0,0,6,23,2423));
echo date(" m", mktime(0,0,0,6,23,2423));
echo date(" y ", mktime(0,0,0,6,23,2423));





?>
