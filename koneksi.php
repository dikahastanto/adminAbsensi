<?php

define("HOST","localhost");
define("DB","absensi");
define("USER","root");
define("PASS","");
$con = mysqli_connect (HOST,USER,PASS,DB) or die("Tidak Bisa Konek");

if($con){
// echo "Konek";
}else{
echo "Tidak Konek";
}

?>
