<!doctype html>
<html lang="en">
<head>
    <style>
        table {
            border: 1px solid black;
            border-collapse: collapse;
        }

        tr {
            border: 1px solid black;
        }

        th {
            border: 1px solid black;
        }

        td {
            border: 1px solid black;
        }

    </style>


    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>



</head>


<body>

<?php
$conn = mysqli_connect("127.0.0.1", "Cedro","Admin123" ,"cedro" );
if (!$conn)
{
    die('Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: '
        . mysqli_connect_error());
}

?>
<?php


$query = "SELECT Sygnatura, Tytul, Imie, Nazwisko, Wydawnictwo, Rok_wyd, Cena  FROM ksiazki";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {

    echo "<table>";
    echo "<tr><th>Sygnatura</th><th>Tytul</th><th>Autor</th><th>Wydawnictwo</th><th>Rok Wydania</th><th>Cena</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        $Sygnatura=$row['Sygnatura'];
        $Tytul=$row['Tytul'];
        $Cena=$row['Cena'];
        $Imie=$row['Imie'];
        $Nazwisko=$row['Nazwisko'];

        echo "<tr><td>$Sygnatura</td><td>$Tytul</td><td>$Imie $Nazwisko</td><td>$</td><td>$Cena</td></tr>";

    }
    echo "</table>";
} else {
    echo "brak danych";
}

mysqli_close($conn);




?>




</body>



</html>

