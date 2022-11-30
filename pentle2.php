<!doctype html>
<html lang="en">
<head>
    <style>
        td { border: 1px dotted black;
            padding: 15px;}
        table { border-collapse: collapse;
        }
    </style>

    <table>


        <tr>

            <ol>

    <?php

    $tekst="Witaj Swiecie!";
    $znaki = str_split($tekst);

    echo '<br>';


    foreach($znaki as $znak)
    {

        echo "<td>".$znak."</td>";
    }


    ?>
        </tr>
            </ol>
    </table>
</head>
<body>

</body>
</html>

<?php
