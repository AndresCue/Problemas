<?php
if(!isset($_GET["r"]))
$_GET["r"]=2;
?>
<center>
<div>Se quiere construir un jardín de 1 m de ancho alrededor de una fuente circular de 4 m de diámetro. ¿Qué superficie ocupa la fuente?
</div>
<div>
<img src="fuente.PNG"/>
</div>
</center>
<div>
<form>
<input id="r" name="r" placeholder="radio(en metros)"onkeyup="calcular()" value="<?=$_GET["r"]?>"/>
<Button onclick='calcular()'>calcular</button>
</form>
</div>
<div id="resultado" style="
     padding:25px;
	 background-color:lightgreen;
">
</div>
<script>
console.log("vamos a calcular la superficie de la fuente ");
function calcular(){
  r=document.getElementById("r").value;
  r=parseFloat(r);
  S=Math.round(Math.PI*(r**2)*100)/100;
  document.getElementById("resultado").innerHTML= S +" m2 ";
  }
</script>
<div style="
     padding:25px;
	 background-color:lightblue;
">
<?php
$r=$_GET['r'];
$S=round(PI()*$r**2,2);
echo$S." m2 ";
?>
</div>
