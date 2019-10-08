<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>prima</title>
  </head>
  <body>
    <?php
    for($i = 1; $i <= 37 ; $i++){
      $temp = 0;
      for($j = 1 ; $j <= $i ; $j++){
        if($i%$j == 0){
          $temp++;
        }
      }
      if($temp <= 2 && $i != 1){
        echo "$i adalah prima </br>";
      }else{
        echo "$i </br>";

      }
    }
    ?>
  </body>
</html>
