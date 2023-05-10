<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    table{
        border: 1px solid black;
        border-collapse: collapse;

    }
    tr{
        border: 1px solid black;
    }
    th{
        border: 1px solid black;
    }
    td{
        border: 1px solid black;
    }

</style>
</head>
<body>

<?php
$conn = mysqli_connect("127.0.0.1", "Cedro","Admin123" ,"cedro" );
$query = "SELECT Tytul, Imie, Nazwisko FROM ksiazki";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<p>Książka <i>' . $row['Tytul'] . '</i> została napisana przez <b>' . $row['Imie'] . ' ' . $row['Nazwisko'] . '</b></p>';
    }
} else {
    echo 'brak danych';
}

mysqli_close($conn);



?>



</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        p{
            color: darkred;
        }
        table{
            border:1px solid black;
            border-collapse: collapse;
        }
        tr{
            border: 1px solid black;
            border-collapse: collapse;
        }
        th{
            border: 1px solid black;
            border-collapse: collapse;
        }
        td{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>

</body>
</html>

<?php
$conn = mysqli_connect("127.0.0.1", "Cedro","Admin123" ,"cedro" );
if (!$conn)
{
    die('Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: '
        . mysqli_connect_error());
}

$query = 'SELECT Nr_czytelnika, Imie, Nazwisko FROM czytelnicy';
$result = mysqli_query($conn, $query);


$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    echo '<table>';
    echo '<tr><th>Numer czytelnika</th><th>Imię i nazwisko</th></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td>' . $row['Nr_czytelnika'] . '</td><td>'
            . $row['Imie'] . ' ' . $row['Nazwisko'] . '</td></tr>';
    }
    echo '</table>';
} else {
    echo 'brak danych';
}

$query = "SELECT Nazwa FROM stanowiska";
$result = mysqli_query($conn, $query);


if (mysqli_num_rows($result) > 0) {

    echo "<table>";
    echo "<tr><th>Nazwa stanowska</th><th>Liczba liter</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        $Nazwa = $row["Nazwa"];
        $litery = strlen($Nazwa);
        echo "<tr><td style='text-align: right'> $Nazwa</td><td>$litery liter</td></tr>";
    }
    echo "</table>";
} else {
    echo "brak danych";
}



?>

<?php


$query = "SELECT * FROM ksiazki WHERE (Wydawnictwo = 'PWN' OR Wydawnictwo = 'Helion') AND (Rok_wyd > 1990 AND Rok_wyd < 2011) ORDER BY Rok_wyd ASC";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {

    echo "<table>";
    echo "<tr><th>Sygnatura</th><th>Tytul</th><th>Autor</th><th>Wydawnictwo</th><th>Rok Wydania</th><th>Cena</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {


        echo '<tr><td>' . $row['Sygnatura'] . '</td><td>'
            . $row['Tytul'] . '</td><td>' . $row['Imie'] ." ". $row['Nazwisko'] . '</td><td>' . $row['Wydawnictwo'] . '</td><td>' . $row['Rok_wyd'] . '</td><td>' . $row['Cena'] . '</td></tr>';

    }
    echo "</table>";
} else {
    echo "brak danych";
}

mysqli_close($conn);




?>
