<?php
require 'fungsi2.php';
$dataKaryawan= query("SELECT * FROM dataKaryawan");

// //tombol cari di klik
// if(isset($_POST["cari"])){
//     $mahasiswa = cari($_POST["keyword"]);
// }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
</head>
<body>

<h1>Daftar Karyawan</h1>
<a href="tambah.php">Tambah data</a>
<br></br>
<form action="" method="post">
<input type="text" name="keyword" id="keyword" size=40 autofocus placeholder="masukan keyword disini"  autocomplete="off">
<button type="submit" name="cari" id="tombol-cari">search</button>
<br></br>

</form>
<div id="container">
    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
    <th>No.</th>
    <th>Aksi</th>
    <th>NIK</th>
    <th>Nama</th>
    <th>alamat</th>
    <th>email</th>
    <th>tempat lahir</th>
    <th>tanggal lahir</th>
    <th>gender</th>
    <th>keahlian</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach($dataKaryawan as $row):?>
   
    <tr> 
    <td><?= $i;?></td>
    <td>
    <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> | 
    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin')";>Hapus</a>
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
    <script src="skrip.js"></script>
</body>
</html>