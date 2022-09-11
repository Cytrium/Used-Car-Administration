<?php
//sambung ke pangkalan data
require('config.php');
//sambung ke fail header
require('header.php');
if (isset($_GET["nomplat"]))
	{
	$data1=mysqli_query($samb,"SELECT * FROM kenderaan
	WHERE nomplat='$_GET[nomplat]'");
	}
	else
	{
	$data1=mysqli_query($samb,"select * from kenderaan");
	}
?>

<html>
<body>
<center><h2>BORANG JUALAN KENDERAAN</h2>
<style>
<table class="w3-table w3-striped w3-bordered">
table, td, th {  
  border: 3px solid #000000;
  text-align: left;
}

table {
  border-collapse: collapse;
  width:50%;
  background-color : #b3ffda;
}

th, td {
  padding: 15px;
}
</style>
<table width="1000" border="1" align="center">
<tr>
  <td width="400">
  <form name="FormCarian">
<p>NOMBOR PLAT KENDERAAN :<br>
<font size="1" color="#ff0000">*Carian kenderaan*</font></td>
<td width="600">
<select name="carian" size="1" onChange="go()">
<option selected value="-">Pilih nombor plat di sini </option>
 <?php
	$dataKereta=mysqli_query($samb,"SELECT * FROM kenderaan
	WHERE status='ADA'");
	
		if (isset($_GET["nomplat"])){
		echo "<option>$_GET[model]</option>";}
			while ($infoKereta=mysqli_fetch_array($dataKereta))
			{
			echo "<option value='borang_jualan.php?
			nomplat=$infoKereta[nomplat]'>$infoKereta[nomplat]
			</option>";
			}
	?>
</select>
</p>
<script type="text/javascript">
<!--
function go(){
location=
document.FormCarian.carian.
options[document.FormCarian.carian.selectedIndex].value
}
//-->
</script>
</form>
</td>
</tr>
</table>
<br>

<button class="btn index"><a href="index2.php">Ke Menu Utama</a></button>
</center>
</body>
<?php require('footer.php'); ?>
</html>