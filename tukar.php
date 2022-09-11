<body>
<center>
<!-- menyediakan butang tukar warna font -->
<button id= "color">Tukar Warna</button>
</center>
<script>
document.getElementById('color').onclick = changeColor;
<!-- tukar warna di sini -->
var currentColor = "red";
function changeColor() {
		if(currentColor == "red"){
			document.body.style.color = "blue";
			currentColor = "blue";
		} else {
			document.body.style.color = "red";
			currentColor = "red";
		}
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
</body>