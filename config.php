<?php
//nama localhost, user, password NULL, nama database
$samb = mysqli_connect("localhost","root","","usedcar");
// semak sambungan jika gagal
if (mysqli_connect_errno()){
echo "Gagal sambungkan pangkalan data mysql: ".mysqli_connect_error();
}
//UBAH SUAI DI SINIIIIIIIII
//SETUP NAMA KEDAI
$namasistem="Usedcar System";
$namakedai="USEDCAR SEPANG";
$alamat="Lot 88, Taman Indah, <br> 18000 Sepang 49200, Selangor.";
$moto="A car for everyone, <br> so drive your dreams";
$logo="header.jpg";
?>