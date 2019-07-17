<?php 
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM tb_admin WHERE username='$username' AND password='$password'";
$query = mysqli_query($con,$sql);

$data = mysqli_fetch_array($query);

if ($username == "" AND $password == "") {
    echo    "<script type=text/Javascript> alert('Username dan Password Tidak Boleh Kosong')
                window.location = 'login.php';
            </script>";
}else if ($data['username'] == $username AND $data['password'] == $password) {

    $_SESSION['logged-in']=true;
    $_SESSION['username']= $_POST['username'];
    $_SESSION['password']= $_POST['password'];
    header('location: index.php');

}else {

    echo    "<script type=text/Javascript> alert('Login Gagal !')
                window.location = 'login.php';
            </script>";
}
?>