<?php
//cek apakah dari tombol submit
if(isset($_POST['sumbit'])){

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $id_jurusan = $_POST['id_jurusan'];
    $tpt_lahir = $_POST['tpt_lahir'];
    $gender = $_POST['gender'];
    $alamat = $_POST['alamat'];
 //1. buat koneksi dengan MySQL
    $con = mysqli_connect("localhost","root","","seal_fakultas");

    //2. cek koneksi dengan MySQL
    if(mysqli_connect_errno()){
        echo "koneksi gagal". mysqli_connect_error();
    }else{
        echo "koneksi berhasil";
    }
    //buat sql query untuk insert ke database
    //buat insert query insert dan jlankan
    $sql = "insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tpt_lahir, alamat
            value ($id_jurusan,'$nim','$nama','$gender','$tpt_lahir','$alamat')";

    //jalankan Query
    if(mysqli_query($con,$sql)){
        echo "Data berhasil ditabah";
    }else{
        echo"ada eror ". mysqli_error();
    }

    //tutup koneksi dengan database
    mysqli_close($con);}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <form action="insert.php" method="post">
        NIM: <input type="text" name="nim"><br>
        Nama: <input type="text" name="nama"><br>
        ID Jurusan: <input type="number" name="id_jurusan"><br>
        Jenis Kelamin: <input type="text" name="gender"><br>
        Tempat Lahir: <input type="text" name="tpt_lahir"><br>
        alamat: <input type="text" name="alamat"><br>
        <button type="submit" name="submit">Tambah Data</button>
    </form>
</body>
</html>