<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>break</title>
  </head>
  <body>
    <?php
    for($i = 1 ; $i <= 10 ; $i++){
      if($i == 6){
        break;
      }
      echo "\$i = $i <br>";
    }
     ?>
  </body>
</html>
