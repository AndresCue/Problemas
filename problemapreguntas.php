<?php
if(!isset($_GET["a"]))
$_GET["a"]=45;
if(!isset($_GET["b"]))
$_GET["b"]=183;
if(!isset($_GET["c"]))
$_GET["c"]=5;
if(!isset($_GET["d"]))
$_GET["d"]=2;
?>
<center>
<div>En una oposición que consta de un test, una persona contesta 45 preguntas y obtiene 183 puntos. 
Por cada pregunta bien contestada dan 5 puntos y por cada una mal contestada quitan 2 puntos.</div>
<div> 
¿Cuántas contesto bien y cuántas mal?
</div>
<div>
<img src="malybueno.PNG"/>
</div>
</center>
<form>
	<input id='a' name='a' placeholder='Preguntas contestadas' onkeyup="calcular()" value="<?=$_GET["a"]?>"/>
    <div>
	</div>
	<input id='b' name='b' placeholder='Puntuacion' onkeyup="calcular()  "value="<?=$_GET["b"]?>" />
	<div>
	</div>
	<input id='c' name='c' placeholder='Valor pregunta bien' onkeyup="calcular()" value="<?=$_GET["c"]?>"/>
	<div>
	</div>
	<input id='d' name='d' placeholder='Valor pregunta mal' onkeyup="calcular()" value="<?=$_GET["d"]?>" />
	<div>
	</div>
	<button onclick="calcular()")> Calcular </button>
</form>
<div id='resultado 2' style="
     padding:15px;
	 background-color:lightpink;
">
</div>
<div id='resultado 1' style="
     padding:15px;
	 background-color:lightgreen;
">
</div>
<script>
console.log("vamos a calcular preguntas bien y mal contestado");

function calcular(){
a= document.getElementById('a').value;
r=parseFloat(a);
b= document.getElementById('b').value;
r=parseFloat(b);
c= document.getElementById('c').value;
r=parseFloat(c);
c= document.getElementById('d').value;
r=parseFloat(d);
x=Math.round((b+d*a/(c+d))*100)/100;
document.getElementById('resultado 1'). innerHTML= x +'Preguntas correctas';
y=Math.round(a-x)*100/100;
document.getElementById('resultado 2'). innerHTML= y +' Preguntas incorrectas';
}
</script>
<div  style="
     padding:30px;
	 background-color:lightblue;
">
<?php
	$a=$_GET['a'];
	$b=$_GET['b'];
	$c=$_GET['c'];
	$d=$_GET['d'];
	$x= round($b+$d*$a/($c+$d),2);
	echo $x." Preguntas incorrectas ";
	$y= round($a/$x,2);
	echo $y."  Preguntas incorrectas ";
?>
</div>