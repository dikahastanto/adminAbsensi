<?php 
include 'koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM tb_siswa WHERE nis='$id'";
$query = mysqli_query($con,$sql);

if ($query) {
    echo "<script type=text/Javascript> alert('Hapus Data Berhasil !')
            window.location = 'tampil_siswa.php';
        </script>";
}else{
    echo "<script type=text/Javascript> alert('Hapus Data Gagal !')
            window.location = 'tampil_siswa.php';
        </script>";
}
?>