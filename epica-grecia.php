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

</style>
</head>
<body>
	<h2>Genero[Epica] - Epoca[Grecia]</h2>
<section >
	<article class="generos">
		<a href="iliada.php"><span>Ilíada </span></a></li><br>
		<div class="material">
		<figure><img src="plantilla/imagenes/homero01.jpg" alt=""></figure>
		<p>se narran diversos acontecimientos de la Guerra de Troya. El griego Aquiles se enfada con Agamenón, el caudillo de los griegos que habían ido a Troya a rescatar a Helena. Los troyanos ponen en apuros a los griegos, por lo que Patroclo, amigo de Aquiles, sale a luchar y muere a manos del troyano Héctor.</p>
		</div>
		<a class="ver" href="iliada.php"><span>ver mas...</span></a>
	</article>
	<article class="generos">
		<a href="odisea.php"><span>Odisea</span></a></li><br>
		<div class="material">
		<figure><img src="plantilla/imagenes/suscrip2.jpg" alt=""></figure>
		<p>
			se nos cuentan  las aventuras de Odiseo, un héroe inteligente y astuto que sabe resolver las situaciones difíciles con ingenio y uno de los héroes griegos que fue a Troya, el que planificó la toma de la ciudad con el gran caballo de madera. 
		</p>
		</div>
		<a class="ver" href="odisea.php"><span>ver mas...</span></a>	
	</article>

</section>