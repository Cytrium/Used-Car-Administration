<?php
//sambung ke pangkalan data
require('config.php');
//sambung ke fail header
require('header.php');
//mulakan sesi login untuk kekalkan login
session_start();
//semak sama ada data dengan ID pengguna nama telah dihantar
if (isset($_POST['idpengguna'])) {
	//pembolehubah untuk memegang data yang dihantar
	$user = $_POST['idpengguna'];
	$pass = $_POST['katalaluan'];
	//arahan sql akan dilaksanakan
	$query = mysqli_query($samb, "SELECT * FROM pengguna
	 WHERE nama_pengguna='$user' AND kata_laluan='$pass'");
	$row = mysqli_fetch_assoc($query);
	
	if(mysqli_num_rows($query) == 0||$row['kata_laluan']!=$pass)
	{
	//papar mesej gagal login
	echo "<script>alert('ID Pengguna atau Katalaluan yang salah');
	window.location='index.php'</script>";
	}
	else
	{
	$_SESSION['idpengguna']=$row['nama_pengguna'];
	$_SESSION['level']=$row['status'];
	//cipta sesi login
	$jurujual=$_SESSION['idpengguna'];
	
	//buka page utama berdasarkan level login
	header("Location: index2.php");
	}
}
?>
<html>
<body>
<!-- Papar jadual -->
<CENTER><table width='70%' border=0>
<tr>
  <td>
  <center>
	<form method="POST">
	<h3>Login masuk untuk pengguna<h3>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  
}

/* Set a style for all buttons */
button {
  background-color: #00cc7a;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  width: 20%;
}

span.psw {
  float: right;
  padding-top: 16px;
}


</style>
</head>
<body>
    <label for="inputID">ID Pengguna</label><br>
	<input type="text" name="idpengguna"
	placeholder="ID Pengguna" required><br>
	<label for="inputPassword">Katalaluan</label><br>
	<input type="password" name="katalaluan"
	id="inputPassword" placeholder="katalaluan" required><br>
	<button type="submit">Login</button><br>
    </div>

    
     </a></span>
    </div>
  </form>
</div>
</script>
	
	
	</center>
   </td>
  </td>
	</form>
	</table></center>
	</body><br><br>
	<?php require('footer.php'); ?>
	</html>.