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
<form method="post">
    <table style="border: 1px solid lightgray; border-collapse: collapse;">
        <caption style="font-weight: bold; font-size: 1.2em;">Oceny</caption>
        <tbody>
        <?php
        for ($a = 1; $a <= 100; $a++) {
            echo '<tr>
                  <td style="padding: 7px;">Uczeń '.$a.':</td>
                  <td><input type="text" name="uczen_'.$a.'"></td></tr>';
        }
        ?>
        <tr>
            <td colspan="2" style="text-align: center; padding: 10px;">
                <button type="submit" name="submit">Zapisz</button>
            </td>
        </tr>
        </tbody>
    </table>
</form>

</body>
</html>
