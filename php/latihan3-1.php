<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>urut nama</title>
  </head>
  <body>
    <?php
    echo "<b>sebelum sort </b></br>";
    $nama = array(
      "lanirne", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat"
    );
    foreach ($nama as $x) {
      echo "$x </br>";
    }

    sort($nama);

    echo "</br>";
    echo "<b>setelah sort</b> </br>";
    foreach ($nama as $x) {
      echo "$x </br>";
    }
     ?>
  </body>
</html>
