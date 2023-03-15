<!DOCTYPE html>
<html>
<head>
    <title>Ankieta</title>
    <style>
        fieldset {
            border: 4px solid yellowgreen;
            width: 400px;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input[type="text"], input[type="radio"] {
            margin-left: 10px;
        }
        .required {
            color: red;
        }
    </style>
</head>
<body>
<form action="formullarzyk.php" method="post">
    <fieldset>
        <legend>Ankieta</legend>
        <label>Imię: <span class="required">*</span></label>
        <input type="text" name="imie" required><br>

        <label>Nazwisko: <span class="required">*</span></label>
        <input type="text" name="nazwisko" required><br>

        <label>Wybierz swoją rolę: <span class="required">*</span></label>
        <input type="radio" name="rola" value="uczen" required> Uczeń
        <input type="radio" name="rola" value="absolwent" required> Absolwent
        <input type="radio" name="rola" value="nauczyciel" required> Nauczyciel
        <input type="radio" name="rola" value="pracownik" required> Pracownik administracji<br>

        <input type="submit" value="Wyślij">
    </fieldset>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imie = $_POST["imie"];
    $nazwisko = $_POST["nazwisko"];
    $rola = $_POST["rola"];

    if (empty($imie)) {
        echo "<p class='required'>Proszę podać imię.</p>";
    }
    if (empty($nazwisko)) {
        echo "<p class='required'>Proszę podać nazwisko.</p>";
    }
    if (empty($rola)) {
        echo "<p class='required'>Proszę wybrać swoją rolę.</p>";
    }

}
?>
</body>
</html>