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

$miesiac = rand (1,15);




?>
<h1 style="border:4px;text-align: center; color: pink; border-style: dotted;" >
    <?php
    echo $miesiac."<br>";
    ?>
</h1>
    <h1 style="border-top-style: dotted;border: 4px;color:pink;border-bottom-style:dotted;">

<?php
switch ($miesiac){
    case 1:
    case 2:
    case 3:
    echo "pierwszy kwartał";
    break;
    case 4:
    case 5:
    case 6:
    echo "drugi kwartał";
    break;
    case 7:
    case 8:
    case 9:
    echo "trzeci kwartał";
    break;
    case 10:
    case 11:
    case 12:
    echo "czwarty kwartał";
    break;
    case 13:
    case 14:
    case 15:
        echo "Błędny numer miesiąca";
        break;
}



?>

</h1>

</body>
</html>



