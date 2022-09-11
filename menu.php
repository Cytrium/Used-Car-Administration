<?php
if ($_SESSION['level']=="ADMIN")
{
?>
<!-- Papar menu untuk admin -->
<center>

<h2>MENU UTAMA [ADMIN]<h2>
<BR>
</center>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
h1 {
  -webkit-text-stroke: 1px white;
}

.btn {
  border: none;
  background-color: #4dff88;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  display: inline-block;
}
.btn {border-radius: 4px;}




</style>
</head>
<body>
<center>

<button class="btn kenderaan"><a href="kenderaan.php">Papar Aset Kereta</a></button>
<button class="btn pekerja"><a href="pekerja.php">Tambah Pekerja</a></button>
<button class="btn import_pekerja"><a href="import_pekerja.php">Import Pekerja</a></button>
<button class="btn jualan"><a href="jualan.php">Jualan Kenderaan</a></button>
<button class="btn jualan"><a href="rekod_jualan.php">Rekod Jualan</a></button>
<button class="btn stok"><a href="stok.php">Stok Kenderaan</a></button>
<br><br><button class="btn keluar"><a href="keluar.php">Keluar</a></button><br><br>


</center>
</body>
</html>

<?php
}
else
{
?>
<!-- Papar menu untuk pekerja -->
<center>
<h2>MENU UTAMA [Pekerja]<h2>
</center>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.btn {
  border: none;
  background-color: #4dff88;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  display: inline-block;
}
.btn {border-radius: 4px;}

</style>
</head>
<body>
<center>

<BR>
<button class="btn jualan"><a href="jualan.php">Jualan Kenderaan</a></button>
<button class="btn stok"><a href="stok.php">Stok Kenderaan</a></button>
<br><br><button class="btn keluar"><a href="keluar.php">Keluar</a></button><br><br>

</center>
</body>
</html>

<?php
}
?>