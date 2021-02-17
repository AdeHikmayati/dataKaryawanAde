<?php
$conn = mysqli_connect("localhost", "root", "", "karyawan");

function query($query)
{
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function tambah($data)
    {
       
        global $conn;
        $nik = htmlspecialchars($data["nik"]);
        $nama = htmlspecialchars($data["nama"]);
        $alamat = htmlspecialchars($data["alamat"]);
       
        $email =htmlspecialchars($data["email"]);
        $tempat_lahir= htmlspecialchars($data["tempat_lahir"]);
        $tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
        $gender = htmlspecialchars($data["gender"]);
        $keahlian = htmlspecialchars($data["keahlian"]);
      
       
       
       
   
        $query = "INSERT INTO dataKaryawan
VALUES
(null,'$nik','$nama','$alamat','$email','$tempat_lahir','$tanggal_lahir','$gender','$keahlian')
";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function ubah($data){
        global $conn;
        $id=$data["id"];

        $nik = htmlspecialchars($data["nik"]);
        $nama = htmlspecialchars($data["nama"]);
        $alamat = htmlspecialchars($data["alamat"]);
       
        $email =htmlspecialchars($data["email"]);
        $tempat_lahir= htmlspecialchars($data["tempat_lahir"]);
        $tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
        $gender = htmlspecialchars($data["gender"]);
        $keahlian = htmlspecialchars($data["keahlian"]);
        
        
        
        
        $query = "UPDATE dataKaryawan SET
        nik = '$nik',
        nama = '$nama',
        alamat='$alamat',
        email = '$email',
        tempat_lahir ='$tempat_lahir',
        tanggal_lahir='$tanggal_lahir',
        gender ='$gender',
        keahlian = '$keahlian'
       
        
        WHERE id =$id
        
        ";
        
        mysqli_query($conn, $query);
        
        return mysqli_affected_rows($conn);
        }
        


?>