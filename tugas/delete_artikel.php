<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if(isset($_GET['id_artikel'])){
        include 'koneksi/koneksi.php';
        $konek = new koneksi();
        $id_artikel= $_GET['id_artikel'];
        $query = mysqli_query($konek-> koneksi, "delete from artikel where id_artikel='$id_artikel'");
        if($query){
          header('location: artikel.php?hapus=berhasil');
        }else{
          header('location: artikel.php?hapus=gagal');
        }
      }

     ?>

  </body>
</html>
