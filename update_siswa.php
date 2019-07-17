<?php 
    include 'koneksi.php';

    $nis = $_POST['nis'];
    $nama = $_POST['nama_siswa'];
    $kelas = $_POST['kelas'];
    $nama_ortu = $_POST['nama_ortu'];

    $sql = "UPDATE tb_siswa SET  nama='$nama',kelas='$kelas',nama_ortu='$nama_ortu' WHERE nis='$nis'";
    $query = mysqli_query($con,$sql);

    if ($query) {
        echo "<script type=text/Javascript> alert('Berhasil Update Data !')
                window.location = 'tampil_siswa.php';
            </script>";
    }else{
        echo "<script type=text/Javascript> alert('Gagal Update Data !')
                window.location = 'tampil_siswa.php';
            </script>";
    }
?>