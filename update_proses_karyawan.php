<?php 
include 'koneksi.php';

$id_karyawan=$_POST['id_karyawan'];
$nama_karyawan=$_POST['nama_karyawan'];
$status = $_POST['status'];
$email = $_POST['email'];

$sql = "UPDATE tb_pengajar SET Nama='$nama_karyawan',status='$status',email='$email' WHERE ID='$id_karyawan'";
$query = mysqli_query($con,$sql);
if ($query) {
    echo "<script type=text/Javascript> alert('Berhasil Update Data !')
            window.location = 'tampil_karyawan.php';
        </script>";
}else{
    echo "<script type=text/Javascript> alert('Gagal Update Data !')
            window.location = 'tampil_karyawan.php';
        </script>";
}
?>