<?php
require('config.php');
$nomplat = $_GET['nomplat'];
$result = mysqli_query($samb,"DELETE FROM kenderaan
	WHERE nomplat='$nomplat'");
echo "<script>alert('HAPUS KENDERAAN BERJAYA');
window.location='kenderaan.php'</script>";
?>