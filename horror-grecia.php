<?php
include('plantilla.php');


?>
<html>
<head>
<style>
	.generos  a{

		
		color: orange;
		font-weight: bold;
		/* text-shadow: 45px; */
	}
	.generos ul li
	{

		
	}
	.generos nav ul
	{
		
		/* border: solid 1px blue; */
	}
	.generos
	{
		
		background-color: white;
		border-radius: 26px;
		padding: 2.5em;
		margin: 1em;
	}
	.material figure, .material p{
		 display: inline-block; 
		
	}
	figure img{
		height: 140px;
		width: 110px;
		border: solid 1px black;
		margin: 0;
		padding: 0;
		float: left;
	}
	.material, .material figure, .material p{
		/* border: solid 1px black; */
	}
	.material p{
		 width: 60%; 
		/* display: inline-block;  */
		/* float: right; */
		word-wrap: break-word;
		margin: 0;
		padding: 0;

	}
	.ver span
	{
		color:gray;
	}

</style>
</head>
<body>
	<h2>Genero[Horror] - Epoca[Grecia] - Lectura</h2>
<section >
	<article class="generos">
		<a href="Esquilo-Persas.php"><span>Esquilo Los Persas</span></a></li><br>
		<div class="material">
		<figure><img src="plantilla/imagenes/presentacion.jpg" alt=""></figure>
		<p>sedramaturgo griego Esquilo, relata la derrota persa ante las fuerzas helénicas en la batalla de Salamina, donde el soberbio rey persa, Jerjes, quien considerábase infinitamente superior a todo el linaje humano, terminó siendo humillado y muertos la mayoría de los gloriosos guerreros que junto a él combatían, no obstante que sus tropas en mucho rebasaban el poderío de la armada griega.</p>
		</div>
		<a class="ver" href="esquilo-persas.php"><span>ver mas...</span></a>
	</article>
	<article class="generos">
		<a href="hades.php"><span>Hades</span></a></li><br>
		<div class="material">
		<figure><img src="plantilla/imagenes/dios-hades.jpg" alt=""></figure>
		<p>
			Hades es el dios de los muertos. Es hijo de Crono y Rea y hermano de Zeus, Posidón, Hera, Hestia y Deméter. Con Zeus y Posidón, es uno de los tres soberanos que se repartieron el imperio del Universo después de su victoria sobre los titanes. Mientras Zeus obtenía el Cielo y Posidón el Mar, a Hades se le atribuyo el mundo subterráneo, los Infiernos, o Tártaro.
		</p>
		</div>
		<a class="ver" href="hades.php"><span>ver mas...</span></a>	
	</article>

</section>
</body>