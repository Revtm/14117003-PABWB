<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>switch</title>
  </head>
  <body>
    <?php
    $a = 5;
    switch ($a) {
      case 0:
        echo '$a sama dengan 0';
        break;
      case 1:
        echo '$a sama dengan 1';
        break;
      case 2:
        echo '$a sama dengan 2';
        break;
      default:
        echo '$a tidak sama dengan 0,1, atau 2';
    }
     ?>
  </body>
</html>
