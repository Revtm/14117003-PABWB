<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Simpan Buku Tamu MySQL</h1>
      <?php
          $nama = $_POST["nama"];
          $email = $_POST["email"];
          $komentar = $_POST["komentar"];
          $conn=mysqli_connect ("localhost","root","", "prak-8") or die ("koneksi gagal");

          echo "Nama : $nama <br>";
          echo "Email : $email <br>";
          echo "Komentar : $komentar <br>";
          $sqlstr="insert into bukutamu (nama,email,komentar) values ('$nama','$email','$komentar')";
          $hasil = mysqli_query($conn, $sqlstr);
          echo "Simpan buku tamu berhasil dilakukan";
      ?>
  </body>
</html>
