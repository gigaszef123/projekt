<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formularz typu radio</title>
    <style>
        fieldset {
            border: 2px solid black;
            width: 250px;
        }
        legend {
            font-weight: bold;
        }
    </style>
</head>
<body>
<form>
    <fieldset>
        <legend>Roczniki</legend>
        <?php
        for ($i = 2010; $i <= 2025; $i++) {
            echo "<label><input type='radio' name='rok' value='$i'>$i</label><br>";
        }
        ?>
    </fieldset>
</form>
</body>
</html>
