<?php
require 'fungsi2.php';
$id = $_GET["id"];

$karyawan = query("SELECT*FROM dataKaryawan WHERE id=$id")[0];

if (isset($_POST["submit"])) {

    if (ubah($_POST) > 0) {
        echo "
    <script>
    alert('data berhasil diubah');
    document.location.href = 'index.php';
    </script>";
    } else {
        echo "
    <script>
    alert('data berhasil diubah');
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
    <title>Ubah data</title>
</head>

<body>
    <h1>Ubah Data</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="nik">NIK : </label>
        <input type="hidden" name="id" id="id" value="<?= $karyawan["id"]; ?>"><br>

        <input type="text" name="nik" id="nik" value="<?= $karyawan["nik"]; ?>"><br>

        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama" value="<?= $karyawan["nama"]; ?>"><br>
        <label for="alamat">Alamat : </label>
        <input type="text" name="alamat" id="alamat" value="<?= $karyawan["alamat"]; ?>"><br>
        <label for="email">Email : </label>
        <input type="email" name="email" id="email" required value="<?= $karyawan["email"]; ?>"><br>
        <label for="tempat_lahir">Tempat Lahir : </label>
        <input type="text" name="tempat_lahir" id="tempat_lahir" autocomplete="on" value="<?= $karyawan["tempat_lahir"]; ?>"><br>
        <label for="tanggal_lahir">Tanggal Lahir: </label>
        <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="<?= $karyawan["tanggal_lahir"]; ?>"><br>
        <label for="gender">Jenis Kelamin : </label>
        <select   name ="gender"size=3 id ="gender">

<option value="<?= $karyawan["gender"] ;?>">perempuan</option>

<option value="<?= $karyawan["gender"] ;?>">Laki-laki</option>


</select> <br>
        <label for="keahlian">Keahlian : </label>

        <p><input type='checkbox' name='keahlian[]' value="php" />PHP</p>
        <p><input type='checkbox' name='keahlian[]' value="asp"/> ASP</p>
        <p><input type='checkbox' name='keahlian[]' value="jsp"/>JSP</p>
        <p><input type='checkbox' name='keahlian[]' value="html"/>HTML</p>
        <p><input type='checkbox' name='keahlian[]' value="css"/>CSS</p>



        <button type="submit" name="submit">Ubah data</button>



    </form>

</body>

</html>