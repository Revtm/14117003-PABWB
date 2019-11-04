<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hapus</title>
  </head>
  <body>
    <?php
    include 'koneksi.php';
    $cari = $_GET["nrp_hapus"];

    $foto = mysqli_query($conn, "select foto from mahasiswa where nrp = '$cari'");
    $nama_foto = mysqli_fetch_assoc($foto);
    $alamat_foto = "foto/".$nama_foto['foto'];

    if(unlink($alamat_foto)){
      $hasil = mysqli_query($conn, "delete from mahasiswa where nrp = '$cari'");
      if($hasil){
        echo "Hapus data berhasil! </br>";
        echo "<a href = \"datamhs.html\">Kembali ke halaman utama</a>";
      }
    }else{
      echo "Hapus data gagal! </br>";
      echo "<a href = \"datamhs.html\">Kembali ke halaman utama</a>";
    }
     ?>
  </body>
</html>
