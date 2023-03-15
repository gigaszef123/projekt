<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        fieldset {

            border: 4px solid yellowgreen;
            width: 400px;

        }
    </style>
</head>
<body>
<form action="formularzyk.php" method="post">
    <?php
    $imie=$nazwisko=$kto="";
    $imie_blad=$nazwisko_blad=$kto_blad="";
    if ($_SERVER["REQUEST_METHOD"] === "POST")
          if (empty($_POST["imie"])) {
              $imie_blad = "Wpisz to imię";
          }
    else {
        $imie = $_POST["imie"];


    }

    if ($_SERVER["REQUEST_METHOD"] === "POST")
        if (empty($_POST["imie"])) {
            $nazwisko_blad = "Wpisz to Nazwisko";
        }
        else
        {$nazwisko=$_POST["nazwisko"];


        }
    ?>
    <fieldset>
        <legend>Ankieta </legend>
        <label for="Imie">Imie  <span style="color: red" >* <?=$imie_blad ?></span></label><br>
        <input type="text" name="imie" ><br>
        <label for="Nazwisko">Nazwisko <span style="color: red" >*<?=$nazwisko_blad ?></span></label><br>
        <input type="text" name="nazwisko" ><br>
        <label>Wybierz swoją rolę: <span style="color: red" >*</span></label><br>
        <input type="radio" name="rola" value="uczen"  id="Uczen"><br>
        <label></label>
        <input type="radio" name="rola" value="absolwent"  id="Absolwent"><br>
        <input type="radio" name="rola" value="nauczyciel"  id="Nauczyciel"<br>
        <input type="radio" name="rola" value="pracownik" id="Pracownik administracji"><br>
        <input type="submit" value="Wyślij">
</body>
</html>






