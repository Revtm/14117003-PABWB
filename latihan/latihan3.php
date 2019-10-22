<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      function faktor($angka){
        if($angka == 1){
          return 1;
        }
        return $angka*faktor($angka-1);
      }

    ?>

    <form action="latihan3.php" method="get">
      <label>angka</label>
      <input type="text" name="angka" value="">
      <button type="submit" name="ok">ok</button>
    </form>

    <?php
      if(isset($_GET['angka'])){
        echo "</br> hasil faktor = ".faktor($_GET['angka']);
      }
    ?>
  </body>
</html>
