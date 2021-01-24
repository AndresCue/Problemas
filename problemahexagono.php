<?php
if(!isset($_GET["L"]))
$_GET["L"]=20;
?>
<center>
<div>Halla la apotema de un hexágono regular de 20 cm de lado.
</div>
<div>
<img src="hexagono.PNG"/>
</div>
</center>
<div>
<form>
<input id="L" name="L" placeholder="Lado(en centimetros)"onkeyup="calcular()" value="<?=$_GET["L"]?>" />
<Button onclick='calcular()'>calcular</button>
</form>
</div>
<div id="resultado" style="
     padding:25px;
	 background-color:lightblue;
">
</div>
<script>
console.log("vamos a calcular el apotema" );
function calcular(){
  L=document.getElementById("L").value;
  L=parseFloat(L);
  A=Math.round((Math.sqrt(3)/2*L)*100)/100;
  document.getElementById("resultado").innerHTML= A + " cm ";
  }
</script>



<div style=" 
padding:25px;
background-color:lightpink;
">

<?php
$L=$_GET["L"];
$R=sqrt(3);
$A=round(($R/2*$L)*100)/100;
echo$A." cm " ;
?>

</div>

