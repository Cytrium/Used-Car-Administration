<html>
<head>
<style>
#mainbody
{
  background-color: white;
  padding: 40px;
}

#tajuk
{
  font-size: 30px;
  font-family: Tw Cen MT Condensed;
  font-weight: bold;
  text-align: center;
}

table {
  border : 2px;
  margin-left: auto;
  margin-right: auto;
  border: 2px solid black;
  border-collapse: collapse;
  margin: auto;
  background-color: staleblue;
}

td {
   text-align: center;
   height: 25px;
}

th {
    height: 30px;
	text-align: center;
	font-weight: bold;
	background-color: steelblue;
}

</style>
</head>

<body>
<?php
include ("header.php");
include ("index2.php");
?>
<div id= "mainbody">
    <div id="tajuk"><p>Senarai Tempahan</p></div>

<form action="" method="post">
<p><center>
   <select name="kategori">
        <option>Pilih Carian</option>
		<option value="nama">Nama Pelanggan</option>
		<option value="bilik">Jenis Bilik</option>
		<option value="tarikh">Tarikh Masuk</option>
   </select>
 : <input type="text" name="carian">
<input type="submit" value="Cari" name="cari">
</p><center>
</form>

<?php
//jika user klik butang "Cari" dan textbox carian tidak empty
if (isset ($_POST['cari']) && !empty ($_POST['carian']) )
{
    //kenalpasti dropdown list apa yang dipilih oleh user
    switch ($_POST["kategori"])
    {
	case "nama" : //jika user pilih search by nama pelanggan
	$query = "SELECT * FROM tempahan
             INNER JOIN pengguna
			   ON tempahan.emel = pengguna.emel
             INNER JOIN homestay
               ON tempahan.idbilik = homestay.idbilik
             WHERE pengguna.nama LIKE '%$_POST[carian]%'";
    break; 
	case "rumah": //jika user pilih search by jenisrumah
	$query = "SELECT * FROM tempahan
             INNER JOIN pengguna
               ON tempahan.emel = pengguna.emel
             INNER JOIN homestay
               ON tempahan.idbilik = homestay.idbilik
             WHERE homestay.jenisbilik LIKE '%_$POST[carian]%'";
	break;
	default: //jika user pilih search by tarikhmasuk
	$query = "SELECT * FROM tempahan
             INNER JOIN pengguna
               ON tempahan.emel = pengguna.emel
             INNER JOIN homestay
               ON tempahan.idbilik = homestay.idbilik
             WHERE tempahan.tarikhmasuk = '$_POST[carian]'";
   }
} else {
      //jika user tidak buat carian, papar senarai secara default
      $query = "SELECT * FROM tempahan
               INNER JOIN pengguna
                 ON tempahan.emel = pengguna.emel
               INNER JOIN homestay
                 ON tempahan.idbilik = homestay.idbilik";
       }

$mysql = $query;
$result = mysqli_query($conn, $mysql) or die (mysql_error());

if (mysqli_num_rows ($result) > 0) 
{
    //table untuk paparan data
	echo "<table border='1'>";
    echo "<col width='200'>"; //saiz column 1
	echo "<col width='150'>"; //saiz column 2
	echo "<col width='100'>"; //saiz column 3
	echo "<col width='130'>"; //saiz column 4 
	echo "<col width='130'>"; //saiz column 5
	echo "<col width='80'>";  //saiz column 6 
	echo "<col width='100'>"; //saiz column 7 
	echo "<col width='80'>";  //saiz column 8 
	echo "<col width='80'>";  //saiz column 9
    echo "<tr>";
	echo "<th>Nama Pelanggan</th>";
	echo "<th>Jenis Bilik</th>";
	echo "<th>Harga Bilik</th>";
	echo "<th>Tarikh Masuk</th>";
	echo "<th>Tarikh Keluar</th>";
	echo "<th>Jumlah Hari</th>";
	echo "<th>Jumlah Bayaran</th>";
	echo "<th>Edit</th> ";
	echo "<th>Padam</th>";
	echo "</tr>";
	
	//papar semua data dari jadual dalam DB
	while ($row = mysqli_fetch_assoc($result)) {

        //kira bilangan hari
		$masuk = strtotime($row['tarikhmasuk']);
		$keluar = strtotime($row['tarikhkeluar']);
		$bilhari = ($keluar - $masuk)/60/60/24;

        //kira jumlah bayaran
		$harga = $row['harga'];
		$jumlah = $bilhari*$harga;
		
		echo "<tr>";
		echo "<td>".$row['nama']."</td>";
		echo "<td>" .$row['jenisbilik']."</td>";
		echo "<td>RM ".$row['harga']."</td>";
		echo "<td>".$row['tarikhmasuk']."</td>";
		echo "<td>".$row['tarikhkeluar']."</td> ";
		echo "<td>".$bilhari." hari</td>";
		echo "<td>RM ".$jumlah."</td>";
		echo "<td><a href='edit_tempahan.php?id=".$row['id']."'>
                <img src='images/edit.png' width='30' height='30'>
				</a></td>";
        echo "<td><a href='delete_tempahan.php?id=".$row['id']."'>
		          <img src='images/delete.png' width='30' height='30'>
				  </a></td>";
        echo "</tr>";
    }
	echo "</table>";
}
else { echo "<center>Tiada data</center>"; }
?>
</div>
<?php
include ("footer.php");
?>
</body>
</html>