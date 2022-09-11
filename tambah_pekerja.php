<?php
//sambung ke pangkalan data
require('config.php');

//sambung ke fail header
require('header.php');

if(isset($_POST['nama']))
{    
	$pekerja=$_POST['nama_pekerja'];
    $nama=$_POST['nama'];
	$katalaluan=$_POST['katalaluan'];
    //TAMBAH REKOD BARU
    $result = mysqli_query($samb, "INSERT INTO pengguna (nama_pengguna,nama,kata_laluan,status) values ('$nama','$pekerja','$katalaluan','PEKERJA')");
echo "<script>alert('Penambahan rekod pekerja telah berjaya'); 
window.location='pekerja.php'</script>";
    }

?>
<style>
<table class="w3-table w3-striped w3-bordered">
table, td, th {  
  border: 3px solid #000000;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 70%;
  background-color : #b3ffda;
}

th, td {
  padding: 15px;
}
</style>





<html>
<center>
<body>
    <h3>TAMBAH PEKERJA</h3>
<form name="form1" action="tambah_pekerja.php" method="POST">

<table width="700" border="1" align="center">
  <tr>
    <td width="200">NAMA PEKERJA:</td>
	<td width="400"><input type="text" name="nama_pekerja" size=60
		id="nama_pekerja" placeholder="RAZMI BIN RAZMAN" required autofocus /></td>	
  </tr>
  <tr>
    <td width="200">NAMA PENGGUNA:</td>
	<td width="400"><input type="text" name="nama" size=30
		id="nama" placeholder="man88" required /></td>	
  </tr>
  <tr>
    <td width="200">KATA LALUAN:</td>
	<td width="400"><input type="text" name="katalaluan" 
		id="katalaluan" placeholder="1234" required /></td>	
  </tr>	  
</table>
<input type="submit" name="update" id="submit" value="Tambah Pekerja" />
     
    </form>
    <a href="pekerja.php">Ke senarai pengguna</a><br>
        </body></center>
<?php require('footer.php'); ?>
</html>