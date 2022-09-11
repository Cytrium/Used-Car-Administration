<?php include "config.php"; ?>
<html>
<head>

<!-- tukar nama sistem yang sesuai -->
<title><?php echo $namasistem; ?></title>
</head>
<body><center>
<TABLE BORDER="5" cellpadding="0" CELLSPACING="0">
<TR>
<!-- nama fail header adalah header.jpg -->
<TD WIDTH="1000" HEIGHT="200" BACKGROUND="<?php echo $logo; ?>"
VALIGN="center"style="background-repeat:no-repeat;" >
<!-- tukar nama sistem yang sesuai -->
<FONT SIZE="+3" COLOR="white" font face="Royalacid">
<?php echo $namasistem; ?><br><?php echo $namakedai; ?></FONT></br>
<FONT SIZE="+2" COLOR="yellow" font face="Royalacid"><i>
<?php echo $moto; ?></i></FONT>
<style>
body {
  background-image: url("car.png");
}


</style>
</TD>
</p>
</TR>
</center>
</TABLE>
</body></center>
<!-- panggil fail utk besarkan huruf -->
<?php include "besar.php";?>
<!-- panggil fail utk tukar warna font -->
<?php include "tukar.php";?>
</style>
</html>