<?php
  class koneksi {
    public $koneksi;
    function __construct(){
      $this-> koneksi = mysqli_connect("localhost", "root","","blog_14117003");
      if($this-> koneksi == false){
        echo "Gagal";
      }
    }
  }

 ?>
