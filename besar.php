<html>
<script>
var fontSize = 1;
function zoomIn() {
	fontSize += 0.1;
	document.body.style.fontSize = fontSize + "em";
}
function zoomOut() {
	fontSize -= 0.1;
	document.body.style.fontSize = fontSize + "em";
}
</script>
<style>
button {
  background-color: #00cc7a;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
</style>
<!-- menyediakan butang besar kecil saiz font -->
<center>

<input type="button" value="Besar Teks" onClick="zoomIn()"/>
<input type="button" value="Kecil Teks" onClick="zoomOut()"/>

</center>
</html>