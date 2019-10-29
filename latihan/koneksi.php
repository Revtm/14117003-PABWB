<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>koneksi</title>
  </head>
  <body>
    <h1>Demo koneksi database MySQL</h1>
    <?php
      $conn = mysqli_connect("localhost", "root", "", "prak-8");

      if($conn){
        echo "OK";
      }else{
        echo "Server not connected";
      }
     ?>
  </body>
</html>
