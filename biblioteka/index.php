<!DOCTYPE html>
<html>
<head>
    <style>
        .sidebar {
            background-color: lightblue;
            color: white;
            width: 200px;
            height: 100%;
            position: fixed;
            left: 0;
            top: 0;
            padding: 20px;
        }

        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            margin-bottom: 10px;
        }

        .right-panel {
            background-color: lightyellow;
            color: black;
            width: 6000px;
            height: 1000px;
            position: fixed;
            left: 240px;
            top: 0px;
            padding: 20px;
        }

        .right-panel a {
            display: block;
            color: black;
            text-decoration: none;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <div class="column" style="background-color:lightblue;">
        <a href="?page=czytelnicy">Czytelnicy</a><br>
        <a href="?page=dzialy">Działy</a><br>
        <a href="?page=ksiazki">Ksiazki</a><br>
        <a href="?page=pracownicy">Pracownicy</a><br>
        <a href="?page=stanowiska">Stanowiska</a><br>
        <a href="?page=wypozyczenia">Wypozyczenia</a><br>
    </div>
</div>

<div class="right-panel">
    <?php
    if(isset($_GET['page']))
    {
        echo $_GET['page'];
        if (file_exists('pages/'.$_GET['page'].'.php'))
            include ('pages/'.$_GET['page'].'.php');
        else
            echo '<h2>Ta strona nie istnieje</h2>';
    }
    else{
        echo '<h2>Ta strona nie istnieje</h2>';
    }
    ?>
</div>

</body>
</html>
