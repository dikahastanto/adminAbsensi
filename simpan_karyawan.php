<?php 
include 'koneksi.php';

$id_karyawan=$_POST['id_karyawan'];
$nama_karyawan=$_POST['nama_karyawan'];
$status = $_POST['status'];
$email = $_POST['email'];

$def_pass = "12345678";
$password = password_hash($def_pass, PASSWORD_DEFAULT);

$sql = "INSERT INTO tb_pengajar (ID,Password,Nama,status,email) VALUES ('$id_karyawan','$password','$nama_karyawan','$status','$email')";
$query = mysqli_query($con,$sql);
if ($query) {
    echo "<script type=text/Javascript> alert('Berhasil Input Data !')
            window.location = 'form_input_karyawan.php';
        </script>";
}else{
    echo "<script type=text/Javascript> alert('Gagal Input Data !')
            window.location = 'form_input_karyawan.php';
        </script>";
}
?>