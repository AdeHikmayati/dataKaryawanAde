<?php
require 'fungsi2.php';
$dataKaryawan= query("SELECT * FROM dataKaryawan");



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Karyawan</title>
    <style src = "style.css"></style>

</head>
<body>

<h1>Daftar Karyawan</h1>
<a href="tambah.php">Tambah data</a>
<br></br>
<form action="" method="post">



</form>
<div id="container">
    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
    <th>No.</th>
    <th>Aksi</th>
    <th>NIK</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Email</th>
    <th>Tempat Lahir</th>
    <th>Tanggal Lahir</th>
    <th>Gender</th>
    <th>Keahlian</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach($dataKaryawan as $row):?>
   
    <tr> 
    <td><?= $i;?></td>
    <td>
    <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> | 
    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')";>Hapus</a>
    </td>
    <td><?= $row["nik"];?></td>
    <td><?= $row["nama"];?></td>
    <td><?= $row["alamat"];?></td>
    <td><?= $row["email"];?></td>
    <td><?= $row["tempat_lahir"];?></td>
    <td><?= $row["tanggal_lahir"];?></td>
    <td><?= $row["gender"];?></td>
    <td><?= $row["keahlian"];?></td>
    </tr>
    <?php $i++;?>
    <?php endforeach;?>
  
    
    </table>
    
</div>
    
</body>
</html>