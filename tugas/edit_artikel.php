<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include 'koneksi/koneksi.php';
    $konek = new koneksi();
    if(isset($_GET['edit'])){
      $id = $_GET['id_artikel'];
      $judul = $_POST['judul'];
      $isi = $_POST['isi'];

      $query2 = mysqli_query($konek-> koneksi, "update artikel set judul='$judul', isi='$isi' where id_artikel=$id ");
      if($query2){
        header('location: artikel.php?edit=berhasil');
      }else{
        header('location: artikel.php?edit=gagal');
      }
    }

      if(isset($_GET['id_artikel'])){

        $id = $_GET['id_artikel'];

        $query = mysqli_query($konek-> koneksi, "select * from artikel where id_artikel='$id'");
        if($query){
          $hasil = mysqli_fetch_assoc($query);
          ?>
            <form action="edit_artikel.php?edit=1&id_artikel=<?php echo $id; ?>" method="post">
              <input type="text" name="judul" value="<?php  echo $hasil['judul']; ?>"></br>
              <textarea name="isi" rows="8" cols="50" ><?php echo $hasil['isi'];?></textarea></br>
              <button type="submit" name="simpan">Simpan</button>
            </form>
          <?php


        }else{
          echo "why";
        }
      }

     ?>
  </body>
</html>
