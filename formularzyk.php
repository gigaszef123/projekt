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

    $IMIE=$NAZWISKO=$KTO='';
    $IMIE_BLAD=$NAZWISKO_BLAD='';
    $OPCJA_BLAD=$NAZWISKO_BLAD='';
    if($_SERVER['REQUEST_METHOD']==='POST')
    {
        if (empty($_POST['IMIE']))
        {
            $IMIE_BLAD='Wpisz to imie!';
        }
        else
        {
            $IMIE=$_POST['IMIE'];
        }
        if (empty($_POST['NAZWISKO']))
        {
            $NAZWISKO_BLAD='Wpisz to nazwisko!';
        }
        else
        {
            $NAZWISKO=$_POST['NAZWISKO'];
        }
        if (empty($_POST['OPCJA']))
        {
            $OPCJA_BLAD='Wpisz jedną opcję!';
        }
        else
        {
            $OPCJA=$_POST['OPCJA'];
        }
    }
    ?>
    <fieldset>
        <legend>Ankieta </legend>
        <label for="Imie">Imie  <span style="color: red" >* <?=$IMIE_BLAD ?></span></label><br>
        <input type="text" name="imie" ><br>
        <label for="Nazwisko">Nazwisko <span style="color: red" >*<?=$NAZWISKO_BLAD ?></span></label><br>
        <input type="text" name="nazwisko" ><br>
        <label>Wybierz swoją rolę: <span style="color: red" >*<?=$OPCJA_BLAD ?></span></label><br>
        <input type="radio" name="rola" value="uczen"  id="Uczen">Uczeń<br>

        <input type="radio" name="rola" value="absolwent"  id="Absolwent">Absolwent<br>
        <input type="radio" name="rola" value="nauczyciel"  id="Nauczyciel">Nauczyciel<br>
        <input type="radio" name="rola" value="pracownik" id="Pracownik administracji">Pracownik administracji<br>
        <input type="submit" value="Wyślij">
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD']==='POST')
{
if(empty($_POST['Login']))
{
$login_blad='Wpisz Login';
}
else
{
$login=$_POST['Login'];
}

if(empty($_POST['Haslo']))
{
$haslo_blad='Wpisz Hasło';
}
else
{
$haslo=$_POST['Haslo'];
}

if(empty($_POST['funkcja']))
{
$kto_blad='Wybierz tą opcje';
}
else
{
$kto=$_POST['funkcja'];
}

}


?>


<form method="POST" action="zadaniaAnkieta2.php">
    <label for="Login">Login:<span style="color: red">*<?=$login_blad?></span></label><br>
    <input type="text" name="Login" id="Login" value="<?=$login?>"><br>
    <label for="Haslo">Hasło:<span style="color: red">*<?=$haslo_blad?></span></label><br>
    <input type="text" name="Haslo" id="Haslo" value="<?=$haslo?>"><br>


    <label>Wybierz jedną obcję:<span style="color: red">*<?=$kto_blad?></span><br>
        <input type="radio" name="funkcja[]" id="Uczen " value="Uczen"
            <?php if ($kto && strstr(implode(' ',$kto),'Uczen')) echo 'checked' ?>>
        <label for="Uczen">uczen</label><br>
        <input type="radio" name="funkcja[]" id="Ab" value="Absolwent"
            <?php if ($kto && strstr(implode(' ',$kto),'Absolwent')) echo 'checked'; ?>>
        <label for="Ab">absolwent</label><br>
        <input type="radio" name="funkcja[]" id="Na" value="nauczyciel"
            <?php if ($kto && strstr(implode(' ',$kto),'nauczyciel')) echo 'checked'; ?>>
        <label for="Na">nauczyciel</label><br>
        <input type="radio" name="funkcja[]" id="Pa" value="pracownik administracji"
            <?php if ($kto && strstr(implode(' ',$kto),'pracownik administracji')) echo 'checked'; ?>>
        <label for="Pa">pracownik administracji</label><br>

        <input type="submit" value="Wyślij">

</form>

</fieldset>
</body>
</html>






