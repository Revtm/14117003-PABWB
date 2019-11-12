<?php

  class tampil_artikel{
    public $koneksi;
    public $username;
    public $tipe;
    function __construct($konek, $uname, $tp){
      $this-> koneksi = $konek;
      $this-> username = $uname;
      $this-> tipe = $tp;
    }

    function tampil(){


      if($this-> tipe == "admin"){
        $query = mysqli_query($this-> koneksi, "select * from artikel");
        $query2= mysqli_query($this-> koneksi, "select username from akun");
      }else{
        $uname = $this-> username;
        $query = mysqli_query($this-> koneksi, "select * from artikel where username = '$uname'");
      }
      $hitung = mysqli_num_rows($query);
      if($hitung > 0){

        ?>
        <h1>Tambah Artikel</h1>
        <form action="tambah_artikel.php" method="post">
            via akun:
            <select name="via">
                <?php
                if($this-> tipe == "admin"){
                      foreach ($query2 as $akun){
                        $akununame = $akun['username'];
                          echo "<option value=\"$akununame\"> $akununame</option>";
                      }
                }else{
                      echo "<option value=\"$uname\"> $uname</option>";
                }
              ?>
            </select> </br>
            judul: <input type="text" name="judul"> </br>
            isi artikel:</br>
            <textarea name="isi" rows="8" cols="50"></textarea> </br>
            <button type="submit" name="tambah_artikel" value="tambah">Tambah Artikel</button>
        </form>

        <?php
        echo "<h1>Artikel</h1>";
        echo "=========================";
        echo "</br></br>";
        foreach ($query as $x) {
          ?>
          <a href="edit_artikel.php?id_artikel=<?php echo $x['id_artikel'];?>">[Edit]</a> <a href="delete_artikel.php?id_artikel=<?php echo $x['id_artikel'];?>">[Delete]</a></br>
          <?php
          echo "penulis: ";
          echo $x['username'];
          echo "</br>";
          echo "judul: ";
          echo $x['judul'];
          echo "</br>";

          echo "</br>";
          ?>
          <textarea rows="8" cols="50" readonly > <?php echo $x['isi']; ?> </textarea>
          <?php
          echo "</br></br>";
          echo "<hr>";
        }
      }
    }
  }

 ?>
