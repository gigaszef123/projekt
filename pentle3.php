<!doctype html>
<html lang="en">
<head>
    <style>
        td { border: 1px dotted black;
            padding: 15px;}
        table { border-collapse: collapse;
            background-color: lightgray;
        }
    </style>
    <table>
    <?php

$i=1;

while($i <= 5):
    echo "<tr>"."<td>"."To liczba $i"."</td>"."</tr>";
    $i++;
    endwhile;


    ?>
    </table>
</head>
<body>

</body>
</html>


