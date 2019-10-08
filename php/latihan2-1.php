<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta chrarset="utf-8">
    <title>kalkulator</title>
  </head>
  <body>
    <?php
    $a  = 15;
    $b = 5;

    echo " bilangan 1 = $a"; echo "<br>";
    echo " bilangan 2 = $b"; echo "<br>";
    echo " Berikut hasil perhitungan dari setiap operator"; echo "<br>";

    echo "<br/> PENJUMLAHAN <br/>";
    $c = $a+$b;
    echo "operator = +"; echo "<br>";
    echo "hasilnya : $a + $b = $c";
    echo "<br/>";
    echo "<br/> PENGURANGAN <br/>";
    $c = $a-$b;
    echo "operator = -"; echo "<br>";
    echo "hasilnya : $a - $b = $c";
    echo "<br/>";
    echo "<br/> PERKALIAN <br/>";
    $c = $a*$b;
    echo "operator = *"; echo "<br>";
    echo "hasilnya : $a * $b = $c";
    echo "<br/>";
    echo "<br/> PEMBAGIAN <br/>";
    $c = $a/$b;
    echo "operator = /"; echo "<br>";
    echo "hasilnya : $a / $b = $c";
    echo "<br/>";
    echo "<br/> MODULUS <br/>";
    $c = $a%$b;
    echo "operator = %"; echo "<br>";
    echo "hasilnya : $a % $b = $c";
    echo "<br/>";
     ?>
  </body>
</html>
