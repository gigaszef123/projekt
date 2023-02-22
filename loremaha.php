<!DOCTYPE html>
<html>
<head>
    <title>Formularz z polem tekstowym</title>
    <style>
        fieldset {
            border: 2px solid black;
            padding: 10px;
        }
        .red {
            font-style: italic;
            color: red;
        }
    </style>
</head>
<body>

<form method="post">
    <fieldset>
        <legend>lorem50</legend>
        <label>Tekst:</label><br>
        <textarea name="tekst" rows="5" cols="50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam id purus vel quam malesuada blandit vel non enim. Etiam vulputate, sapien sit amet facilisis laoreet, tellus velit tristique arcu, a lacinia urna justo eu ipsum. Fusce vitae tortor sed augue sagittis facilisis a at augue. In hac habitasse platea dictumst. Aenean euismod, ante id convallis bibendum, dui est faucibus augue, vel sollicitudin sapien justo sed lorem. Maecenas porttitor mi ut nunc sagittis, sit amet mollis risus congue. Ut a lectus ut arcu pretium varius. Sed sed lobortis nisl, sed dapibus risus.</textarea><br>
        <input type="submit" value="Wyślij">
    </fieldset>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $tekst = $_POST["tekst"];
    echo '<fieldset><legend>lorem50</legend><p>Oto wpisany tekst:</p><p class="red">'.$tekst.'</p></fieldset>';
}
?>

</body>
</html>