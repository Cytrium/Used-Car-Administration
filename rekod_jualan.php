<?php
//sambung ke pangkalan data
require('config.php');
//sambung ke fail header
require('header.php');
?>

<html>
<body>
<center>
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
  border-radius: 16px;
}

th, td {
  padding: 15px;
}
</style>


<table width="711" border="0">
<center>
    <td><p><strong>CETAK REKOD TRANSAKSI JUALAN KENDERAAN</strong></p>
      <form name="form1" method="post" action="rekod_jualan_cetak.php">
        <table width="600" border="1">
          <tr>

            <td>Bulan</td>
            <td>:</td>
            <td><select name="bulan" id="bulan">
              <option value="-">-</option>
              <option value="1">Jan</option>
              <option value="2">Feb</option>
              <option value="3">Mac</option>
              <option value="4">April</option>
              <option value="5">Mei</option>
              <option value="6">Jun</option>
              <option value="7">Jul</option>
              <option value="8">Ogos</option>
              <option value="9">September</option>
              <option value="10">Oktober</option>
              <option value="11">November</option>
              <option value="12">Disember</option>
            </select></td>
          </tr>
          <tr>
            <td>Tahun</td>
            <td>:</td>
            <td><select name="tahun" id="tahun">
              <option value="-">-</option>
              <option>2019</option>
              <option>2020</option>
            </select></td>
          </tr>
          <tr>
            <td colspan="3"><input type="submit" name="button" id="button" value="Cetak"></td>
          </tr>
        </table>
      </form>
      <p>&nbsp;</p>
      <hr /><div align="center" class="style15"></div>
	  </center>
        <center>  <br><br>
            <a href="index2.php">Ke Menu Utama</a><br> 
        </center>
 	</center>
</body>

</html>