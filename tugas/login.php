<?php
    if(isset($_POST['submit'])){
      include 'koneksi/koneksi.php';
      $konek = new koneksi();
      $tipe;
      $username = $_POST['username'];
      $query = mysqli_query($konek-> koneksi, "select tipe from akun where username='$username'");
      $jumlah = mysqli_num_rows($query);

      if($jumlah > 0){
        $hasil = mysqli_fetch_assoc($query);
        $tipe = $hasil['tipe'];
        session_start();
          $_SESSION['username'] = $username;
          $_SESSION['status'] = "login";
        if($tipe == 1){
          $_SESSION['tipe'] = "admin";
        }else if($tipe == 2){
          $_SESSION['tipe'] = "user";
        }
        header('location:artikel.php');
      }


    }

 ?>
