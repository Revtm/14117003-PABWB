<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if($_POST['nama'] != ""){
        echo "nama : ".$_POST['nama']. "</br>";
        echo "alamat : ".$_POST['alamat'] ."</br>";
        echo "jenis kelamin : ".$_POST['jk'] ."</br>";
        echo "golongan darah : ".$_POST['goldar']."</br>";
        echo "hobby : ";
        if(isset($_POST['hobby1'])) echo $_POST['hobby1']." ";
        if(isset($_POST['hobby2'])) echo $_POST['hobby2']." ";
        if(isset($_POST['hobby3'])) echo $_POST['hobby3']." ";
        echo "</br>keterangan : ".$_POST['keterangan']." </br>";
      }

     ?>
  </body>
</html>
