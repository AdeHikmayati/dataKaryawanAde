<?php
require 'fungsi2.php';
if (isset($_POST["submit"])){

 
if (tambah($_POST) > 0 ){
    echo "
    <script>
    alert('data berhasil ditambahkan');
    document.location.href = 'index.php';
    </script>";
}else{
    echo"
    <script>
    alert('data gagal di tambahkan');
     document.location.href = 'index.php';
    </script>";
}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
</head>
<body>
<h1>Tambah Data</h1>
<form action="" method="post" enctype="multipart/form-data">
<label for="nik">NIK : </label>
<input type="text" name="nik" id="nik"><br>

<label for="nama">Nama : </label>
<input type="text" name="nama" id="nama"><br>
<label for="alamat">Alamat : </label>
<input type="text" name="alamat" id="alamat"><br>
<label for="email">Email : </label>
<input type="email" name="email" id="email" required><br>
<label for="tempat_lahir">Tempat Lahir : </label>
<input type="text" name="tempat_lahir" id="tempat_lahir" autocomplete="on"><br>

<label for="tanggal_lahir">Tanggal Lahir : </label>
<input type="date" name="tanggal_lahir" id="tanggal_lahir"><br>
<label for="gender">Jenis Kelamin : </label>

<select   name ="gender"size=3 id ="gender">

<option value="perempuan" selected="selected">perempuan</option>

<option value="laki-laki"> Laki-laki</option>


</select> <br>

<label for="keahlian">Keahlian : </label>

<p><input type='checkbox' name='bahasa1' value='php' />PHP</p>
      <p><input type='checkbox' name='bahasa2' value='asp' />ASP</p>
      <p><input type='checkbox' name='bahasa3' value='jsp' />JSP</p>

<button type="submit" name="submit">Tambah</button>



</form>
    
</body>
</html>