<?php
  session_start();
  include 'koneksi/koneksi.php';
  $konek = new koneksi();
  if(isset($_POST['tambah_artikel'])){
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $username = $_POST['via'];

    $tambah = mysqli_query($konek-> koneksi, "insert into artikel values('NULL', '$judul', '$isi', '$username')");

    if($tambah){
      header('location: artikel.php?tambah=berhasil');
    }else{
      header('location: artikel.php?tambah=gagal');

    }

  }



?>
