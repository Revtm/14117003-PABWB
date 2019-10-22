<?php
  function tukar(&$a, &$b){
    $temp = $a;
    $a = $b;
    $b = $temp;
  }

  $x = 5;
  $y = 7;

  echo "x : $x </br>";
  echo "y : $y </br>";

  tukar($x, $y);

  echo "</br> setelah tukar </br>";
  echo "x : $x </br>";
  echo "y : $y </br>";

 ?>
