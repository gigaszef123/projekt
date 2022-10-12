<!doctype html>
<html lang="en">
<head>

  <style>

   h2 {
     color:darkorchid;
       text-align: center;

   }



  </style>


</head>
<body>

</body>
</html>

<?php
$losowa= rand(1,30);




?>
<h4>
<?php
if ($losowa % 2 == 0);
echo "Wylosowana liczba jest większa lub równa 20"


?>
<h4 style="color:navy;text-align: center;"><
    <?php
    if  ($losowa % 2 == 0)
    {
        echo "wylosowana liczba jest parzysta";

    }
    else
    {
        echo "wylosowana liczba jest nie jest parzysta";
    }



    ?>

</h4>
    <h4 style="color:deeppink;text-align: center;">
    <?php
  if ($losowa <= 10)
  {
      echo"Pierwsza Dziesiątka";

  }
  elseif ($losowa <= 20)
  {
      echo "Druga dziesiątka";


  }
  else
  {
      echo "Trzecia dziesiątka";

  }

    ?>
    </h4>
<h2><?=$losowa?></h2>



