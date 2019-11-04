<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      include 'koneksi.php';
        $nrp = $_POST["nrp"];
        $nama = $_POST["nama"];
        $alamat = $_POST["alamat"];
        $jurusan = $_POST["jurusan"];
        $expl = explode('.', $_FILES["foto"]["name"]);
        $ext_foto = end($expl);
        $_FILES["foto"]["name"] = $nrp.".".$ext_foto;
        $foto =  $_FILES["foto"]["name"] ;

        $target = "foto/".$_FILES['foto']['name'];

        if(move_uploaded_file($_FILES["foto"]["tmp_name"], $target)){
          $sqlstr="insert into mahasiswa values ('$nrp','$nama','$alamat','$foto','$jurusan')";
          $tambah = mysqli_query($conn, $sqlstr);
          if($tambah){
              echo "Tambah data sukses! </br>";
              echo "<a href=\"datamhs.html\">kembali ke halaman utama </a>";
          }else{
            echo "Tambah data gagal! </br>";
            echo "<a href = \"datamhs.html\">Kembali ke halaman utama</a>";
          }
        }else{
          echo "Tambah data gagal! </br>";
          echo "<a href = \"datamhs.html\">Kembali ke halaman utama</a>";
        }

    ?>
  </body>
</html>
