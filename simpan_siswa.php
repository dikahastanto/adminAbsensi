<?php 
    include 'koneksi.php';

    $nis = $_POST['nis'];
    $nama = $_POST['nama_siswa'];
    $kelas = $_POST['kelas'];
    $nama_ortu = $_POST['nama_ortu'];

    $sql = "INSERT INTO tb_siswa (nis,nama,kelas,nama_ortu) VALUES ('$nis','$nama','$kelas','$nama_ortu')";
    $query = mysqli_query($con,$sql);

    if ($query) {
        echo "<script type=text/Javascript> alert('Berhasil Input Data !')
                window.location = 'form_input_siswa.php';
            </script>";
    }else{
        echo "<script type=text/Javascript> alert('Gagal Input Data !')
                window.location = 'form_input_siswa.php';
            </script>";
    }
?>