<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>cari</title>
  </head>
  <body>
    <?php

    include 'koneksi.php';
    $cari = $_GET["nama_cari"];

    $hasil = mysqli_query($conn, "select * from mahasiswa natural join jurusan where nama like '%$cari%'");
    $jumlah = mysqli_num_rows($hasil);


    if($jumlah > 0){
      echo "<a href = \"datamhs.html\">Kembali ke halaman utama</a>";
      
      foreach($hasil as $x){
        ?>
        <table border="1">
          <thead>
            <th>Foto</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jurusan</th>
          </thead>
          <tbody>
            <td><?php echo "<img src=foto/".$x['foto']." width=\"100\">";?></td>
            <td><?php echo $x['nrp'];?></td>
            <td><?php echo $x['nama'];?></td>
            <td><?php echo $x['alamat'];?></td>
            <td><?php echo $x['nama_jur'];?></td>
          </tbody>
        </table>
        <?php
      }
    }else{
      echo "data tidak ditemukan!</br>";
      echo "<a href = \"datamhs.html\">Kembali ke halaman utama</a>";

    }
    ?>
  </body>
</html>
