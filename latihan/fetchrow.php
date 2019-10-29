<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>row</title>
  </head>
  <body>
    <h1>Demo koneksi database MySQL</h1>
    <?php
      $conn = mysqli_connect("localhost", "root", "", "prak-8") or die("koneksi gagal");

      $hasil = mysqli_query( $conn, "select * from liga");

      while($row = mysqli_fetch_row($hasil)){
        echo "Liga " .$row[1];
        echo " mempunyai " .$row[2];
        echo " wakil di liga champion <br>";
      }
     ?>
  </body>
</html>
