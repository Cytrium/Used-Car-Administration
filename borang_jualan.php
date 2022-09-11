<?php


//sambung ke pangkalan data
require('config.php');
//sambung ke fail header
require('header.php');

if (isset($_GET["nomplat"]))
	{
	$data1=mysqli_query($samb,"select * from kenderaan where nomplat='$_GET[nomplat]'");
	}
	else
	{
	$data1=mysqli_query($samb,"select * from kenderaan");
	}
	
$nomplat=$_GET["nomplat"];	
	
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<html>
<body>	

	
<center><h2>BORANG JUALAN KENDERAAN</h2>

<style>
<table class="w3-table w3-striped w3-bordered">

table, td, th {  
  border: 2px solid #000000;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 50%;
  background-color : #b3ffda;
}

th, td {
  padding: 15px;
}
</style>

<form method="POST" action="proses_jualan.php">
<table width="1000" border="1" align="center">
 <?php			
	while ($info1=mysqli_fetch_array($data1))
		{	
    ?>
  <tr>
    <td width="200"><b>MAKLUMAT KENDERAAN</b></td>
  </tr>	
  <tr>
    <td width="200">NOMBOR PLAT:</td>
	<td width="400"><?php echo $info1['nomplat']; ?></td>	
  </tr>
  <tr>
    <td width="200">MODEL:</td>
	<td width="400"><?php echo $info1['model']; ?></td>	
  </tr>
  <tr>
    <td width="200">TAHUN DIPERBUAT:</td>
	<td width="400"><?php echo $info1['tahun_perbuat']; ?></td>	
  </tr>	
    <tr>
    <td width="200">HARGA:</td>
	<td width="400">RM<?php echo $info1['harga']; ?></td>	
  </tr>	
    <tr>
    <td width="200">STATUS KENDERAAN:</td>
	<td width="400"><font color="#ff0000"><?php echo $info1['status']; ?></font></td>	
  </tr>	
  <tr>
    <td width="200">GAMBAR KENDERAAN:</td>
	<td width="400"><?php echo "<img src='gambar/".$info1['gambar']."' width='200px' height='100px'/>"; ?></td>	
  </tr>	
  <tr>
    <td width="200"><b>MAKLUMAT PELANGGAN</b></td>
  </tr>	
<tr>
    <td width="200">NOMBOR KAD PENGENALAN:</td>
	<td width="400"><input type="text" name="nomic" 
		id="nomplat" placeholder="851225035255" maxlength='12' minlength='12'
		onkeypress='return event.charCode >= 48 && event.charCode <= 57'
		required autofocus /></td>
		
  </tr>
  <tr>
    <td width="200">NAMA PENUH:</td>
	<td width="400"><input type="text" name="nama" 
		id="nama" placeholder="RAZMAN BIN ROSLI" size="60"required /></td>	
  </tr>

  <tr>
    <td width="200">NOMBOR TELEFON:</td>
	<td width="400"><input type="text" name="nomhp" 
		id="homhp" placeholder="0199998989" maxlength='11' minlength='10'
		onkeypress='return event.charCode >= 48 && event.charCode <= 57'
		required /></td>	
  </tr>
  <tr>
    <td width="200">ALAMAT LENGKAP:</td>
	<td width="400">
	<label>Alamat1</label><br>
	<input type="text" name="alamat1" id="alamat1" placeholder="Alamat1" size="60" required ><br>
	<label>Alamat2</label><br>
	<input type="text" name="alamat2" id="alamat2" placeholder="Alamat2" size="60"><br>	
	<label>Bandar</label><br>
	<input type="text" name="bandar" id="bandar" placeholder="Bandar" size="40" required ><br>
	<label>Poskod</label><br>
	<input type="text" name="poskod" placeholder="18000" maxlength='5'size="7" 
	onkeypress='return event.charCode >= 48 && event.charCode <= 57' required ><br>
	<label>Negeri</label><br>
	<input type="text" name="negeri" id="negeri" placeholder="Negeri" size="30" required ></td>	
	
</td>
  <tr>
    <td width="200"><b>MAKLUMAT BAYARAN</b></td>
  </tr>	
  <tr>
    <td width="200">JENIS BAYARAN:</td>
	<td width="400">
	<select name="bayaran" id="bayaran">
              <option value="-">Pilih di sini</option>
              <option value="TUNAI">TUNAI</option>
              <option value="PINJAMAN">PINJAMAN</option>
            </select><br>
		
		</td>	
  </tr>

	
  </tr>  
</table>
<input hidden type="text" name="nomplat" id="nomplat" value="<?php echo $info1['nomplat']; ?>"/>
<input hidden type="date" readonly name="tarikh" value="<?php echo date('Y-m-d'); ?>" />

  <?php
  }
  ?>
  

 
<br><br>
<button type="submit">JUAL</button>
<button type="reset">Reset</button><br><br>	
<b>*Pastikan semua maklumat betul sebelum tekan butang JUAL. </b>
</form>	
<a href="index2.php">Ke Menu Utama</a><br>
</center>
</body><br><br>
<?php require('footer.php'); ?>
</html>