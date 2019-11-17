<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>
    <?php
    if(isset($_GET['tambah'])){
      echo "<span style=\"color: red\">pesan: </span>tambah artikel ";
      echo $_GET['tambah'];
    }
    if(isset($_GET['hapus'])){
      echo "<span style=\"color: red\">pesan: </span>hapus artikel ";
      echo $_GET['hapus'];
    }
    if(isset($_GET['edit'])){
      echo "<span style=\"color: red\">pesan: </span>edit artikel ";
      echo $_GET['edit'];
    }


    if(isset($_SESSION['status'])){
      include 'koneksi/koneksi.php';
      include 'tampil_artikel.php';

      $konek = new koneksi();


      $username = $_SESSION['username'];
      $tipe = $_SESSION['tipe'];

      echo "</br><a href=\"logout.php\">[LOGOUT?]</a></br>";
      echo "selamat datang, $username </br>";

      //tampil id_artikel
      $artikel = new tampil_artikel($konek-> koneksi, $username, $tipe);
      $artikel-> tampil();
    }
    ?>
  </body>
</html>
