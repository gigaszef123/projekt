<!doctype html>
<html lang="en">
<head>
    <style>
        fieldset {

            border: 1px solid black;
            width: 400px;
            background-color: lightgreen;

        }
        legend {
            background-color: lightgreen;
            color: black;/
        padding: 5px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
<form action="formularz 2.php" method="post">
    <?php

    $login=$email=$strona=$miasto=$opcje='';
    $login_blad=$email_blad=$strona_blad=$miasto_blad=$opcje_blad='';

    if($_SERVER['REQUEST_METHOD']==='POST')
    {
        if(empty($_POST['Login']))
        {
            $login_blad='Wpisz tu login';
        }
        else
        {
            $login=$_POST['Login'];
        }

        if(empty($_POST['Email']))
        {
            $email_blad='Wpisz tu email';
        }
        else
        {
            $email=$_POST['Email'];
        }

        if(empty($_POST['Strona']))
        {
            $strona_blad='Wpisz tu Stronę';
        }
        else
        {
            $strona=$_POST['Strona'];
        }

        if(empty($_POST['miasto']))
        {
            $miasto_blad='Wybierz conajmniej jedno miasto';
        }
        else
        {
            $miasto=$_POST['miasto'];
        }

        if(empty($_POST['opcje']))
        {
            $opcje_blad='Wybierz opcję';
        }
        else
        {
            $opcje=$_POST['opcje'];
        }


    }


    ?>
    <fieldset>
        <legend>Formularz z walidacją </legend>
        <label for="Login">Login  <span style="color: red" >* <?=$login_blad ?></span></label><br>
        <input type="text" name="Login" placeholder="wprowadź login" ><br>
        <label for="E-mail">E-mail <span style="color: red" >*<?=$email_blad ?></span></label><br>
        <input type="text" name="Email" placeholder="wprowadź e-mail" ><br>
        <label for="Strona internetowa">Strona internetowa <span style="color: red" >* <?=$strona_blad ?></span></label><br>
        <input type="text" name="Strona" placeholder="podaj strone internetową" ><br>
        <label>Wybierz miasto: <span style="color: red" >*<?=$miasto_blad ?></span></label><br>
        <input type="checkbox" name="miasto" value="miasto"  id="miasto">Warszawa<br>
        <input type="checkbox" name="miasto" value="miasto"  id="miasto">Poznań<br>
        <input type="checkbox" name="miasto" value="miasto"  id="miasto">Gdańsk<br>
        <input type="checkbox" name="miasto" value="miasto"  id="miasto">Szczecin<br>

        <label>Wybierz jedną opcję <span style="color: red" >*<?=$opcje_blad ?></span></label><br>

        <input type="radio" name="opcje" value="opcje"  id="opcje">Kobieta<br>
        <input type="radio" name="opcje" value="opcje"  id="opcje">Mężczyzna<br>
        <input type="radio" name="opcje" value="opcje"  id="opcje">Nie chcę podawać<br>
        <input type="submit" value="Wyślij">
        <?php
        if($_SERVER['REQUEST_METHOD']=='POST') {
            echo '<h3>Pola formularza wyświetlone funkcji print_r</h3><pre>';
            print_r($_POST);
            echo '</pre>';
            echo "<h3>Pola formularza pokazywane selektywnie, jedno po drugim</h3>";
            echo "<p>Login:";
            if (!empty($_POST["login"])) {
                echo $_POST["login"];
            } else {
                echo "nie podany";
            }
            echo '</p><p>Email:';
            if (!empty($_POST["email"])) {
                echo $_POST["email"];
            } else {
                echo 'nie podany';
            }
            echo '</p><p>Strona internetowa:';
            if (!empty($_POST["website"])) {
                echo $_POST["website"];
            } else {
                echo 'nie podana';
            }
            echo '</p><p>miasto:';
            if (!empty($_POST["city"])) {
                echo implode (",", $_POST["city"]);
            } else {
                echo 'nie zaznaczono';
            }
            echo '</p><p>Płeć:';
            if (!empty($_POST["sex"])) {
                echo implode (",", $_POST["sex"]);
            } else {
                echo 'nie zaznaczono';

            }
            echo "</p>";




        }

        ?>
</body>
</html>


