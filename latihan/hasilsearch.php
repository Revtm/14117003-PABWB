<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>hasil search</title>
  </head>
  <body>
    <?php
      $kolom = $_POST['kolom'];
      $cari = $_POST['cari'];
      $conn = mysqli_connect("localhost", "root", "", "prak-8");
      $hasil = mysqli_query($conn, "select * from bukutamu where $kolom like '%$cari%'");
      $jumlah = mysqli_num_rows($hasil);
      echo "<br>";
      echo "Ditemukan: $jumlah";
      echo "<br>";
      while($baris=mysqli_fetch_array($hasil)){
        echo "Nama : ";
        echo $baris[0];
        echo "<br>";
        echo "Email : ";
        echo $baris[1];
        echo "<br>";
        echo "Komentar :";
        echo $baris[2];
        echo "<br>";
      }

     ?>
  </body>
</html>
