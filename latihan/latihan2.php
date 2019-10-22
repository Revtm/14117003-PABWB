<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      function hitungbet($nama, $warna="red"){
        $harga_char = 0;
        $panjang = strlen($nama);
        if($panjang >= 1 && $panjang <=10){
          $harga_char =300;
        }else if ($panjang >= 11&& $panjang <=20){
          $harga_char =500;
        }else if($panjang > 20){
          $harga_char =700;
        }

        $harga = $harga_char*$panjang;

        echo "</br>nama : <font color='".$warna."'>$nama</font> </br>";
        echo "warna : $warna </br>";
        echo "harga : $panjang * $harga_char = Rp $harga </br>";
      }

    ?>

    <form action="latihan2.php" method="get">
      <label>nama</label></br>
      <input type="text" name="nama" value=""></br>
      <label>warna</label></br>
      <input type="text" name="warna" value="">
    </br></br>
      <button type="submit">OK</button>
    </form>

    <?php
      if(isset($_GET['nama']) && isset($_GET['warna'])){
        if($_GET['warna'] == ""){
        hitungbet($_GET['nama']);
        }else{
        hitungbet($_GET['nama'], $_GET['warna']);
        }
      }
    ?>
  </body>
</html>
