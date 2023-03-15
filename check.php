
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
            border: green solid ;
            padding: 3px;
            width: 500px;
            height: 100px;
            border-width: 3px;

        }
    </style>
</head>
<body>
<form action="check.php" method="post">

    <fieldset>
        <legend>Liczby</legend>
        <?php
        foreach (range(0, 100, 10) as $value) {

            echo "<label for='nr'><input type='checkbox' name='aha[]' id='a_$value' value='$value' ></label>$value ";
        }
        ?>
        <br>
        <input type="submit" value="Wykonaj">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            echo '<p>';
            if (!empty($_POST["aha"]))
            echo "te liczby zostały wybrane: ".IMPLODE(",",$_POST['aha']);
                else{
                    Echo'Żadna liczba nie została wybrana';
                }

            echo '</p>';
        }
        ?>
    </fieldset>
</form>
