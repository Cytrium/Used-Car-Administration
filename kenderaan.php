<?php
//sambung ke pangkalan data
require('config.php');
//sambung ke fail header
require('header.php');
?>
<html>
<center>
<h2>SENARAI KENDERAAN</h2>
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
<table width="1000" border="1" align="center">  
  <tr>
    <td colspan="8" valign="middle" align="right"><b>
	<a href="tambah_kenderaan.php">[+] Tambah Kenderaan</a></b></td>    
  </tr>  
  <tr>
    <td width="20"><b>Bil.</b></td>
    <td width="200"><b>Model</b></td>
	<td width="100"><b>Nombor Plat</b></td>
	<td width="50"><b>Tahun Diperbuat</b></td>
	<td width="120"><b>Harga Jualan OTR</b></td>
    <td width="30"><b>Status</b></td>
	<td width="200"><b>Gambar</b></td>
	<td width="100"><b>Tindakan</b></td>
  </tr>

 <?php
  $data1=mysqli_query($samb,"SELECT * FROM kenderaan ORDER BY status,tahun_perbuat DESC");		
      $no=1;          
	while ($info1=mysqli_fetch_array($data1))
		{
		?>
  <tr>
  
    <td><?php echo $no; ?></td>
	<td><?php echo $info1['model']; ?></td>
    <td><?php echo $info1['nomplat']; ?></td>
	<td><?php echo $info1['tahun_perbuat']; ?></td>
    <td>RM <?php echo $info1['harga']; ?></td>
	<td><?php echo $info1['status']; ?></td>
	<td><?php echo "<img src='gambar/".$info1['gambar']."' width='200px' height='100px'/>"; ?></td>
    <td><a href="kemaskini_kenderaan.php?nomplat=
	<?php echo $info1['nomplat'];?>">Kemaskini</a> |
		<a href="hapus_kenderaan.php?nomplat=
		<?php echo $info1['nomplat'];?>">Hapus</a>
	</td>
  </tr>
  <?php $no++; } ?>
</table>
</fieldset>
<a href="index2.php">Ke Menu Utama</a><br>       
</center></body><br/><br/>
<?php require('footer.php'); ?>
</html>
