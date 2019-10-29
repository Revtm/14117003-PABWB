<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post" action="TM_7hasil.php">
      <label>nama:</label>
      <input type="text" name="nama" value="">
    </br>
    </br>
      <label>alamat:</label>
      <input type="text" name="alamat" value="">
    </br>
    </br>
      <label>jenis kelamin:</label>
      <input type="radio" name="jk" value="laki-laki">laki-laki
      <input type="radio" name="jk" value="perempuan">perempuan
    </br>
    </br>
      <label>Golongan darah:</label>
      <select name="goldar">
        <option value="">A</option>
        <option value="">B</option>
        <option value="">O</option>
        <option value="">AB</option>
      </select>
    </br>
    </br>
      <label>hobby</label></br>
      <input type="checkbox" name="hobby1" value="membaca">membaca</br>
      <input type="checkbox" name="hobby2" value="ngoding">ngoding</br>
      <input type="checkbox" name="hobby3" value="menulis">menulis</br>

    </br>
    </br>
      <label>keterangan:</label></br>
      <textarea name="keterangan" rows="8" cols="80"></textarea>
</br>
          <button type="submit" name="button">Submit</button>
    </form>


  </body>
</html>
