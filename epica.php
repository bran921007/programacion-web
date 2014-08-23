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
	<h2>Genero[Epica] - Epoca</h2>
<section >
	<article class="generos">
		<a href="epica-grecia.php"><span>Epoca antigua Grecia </span></a></li><br>
		<div class="material">
		<figure><img src="plantilla/imagenes/epica-griega.jpg" alt=""></figure>
		<p>se refiere al período de la historia de Grecia que abarca desde la Edad Oscura de Grecia ca. 1200 a. C. y la invasión dórica, hasta el año 146 a. C. y la conquista romana de Grecia tras la batalla de Corinto. Se considera generalmente como la cultura seminal que sirvió de base a la civilización occidental.</p>
		</div>
	</article>
	<article class="generos">
		<a href="epica-romana.php"><span>Epoca Romana</span></a></li><br>
		<div class="material">
		<figure><img src="plantilla/imagenes/1024px-Collage_Rome.jpg" alt=""></figure>
		<p>
			Antigua Roma (en latín, Rōma) designa la entidad política unitaria surgida de la expansión de la ciudad de Roma, que en su época de apogeo, llegó a abarcar desde Gran Bretaña al desierto del Sahara y desde la Península Ibérica al Éufrates.
		</p>
		</div>	
	</article>

	<article class="generos">
		<a href="epica-medieval.php"><span>Epoca Medieval</span></a></li>
		<div class="material">
		<figure> <img src="plantilla/imagenes/300px-Ayasofya_2006-1.JPG" alt=""></figure>
		<p>
			Es el período histórico de la civilización occidental comprendido entre el siglo V y el XV. Su comienzo se sitúa convencionalmente en el año 476 con la caída del Imperio romano de Occidente y su fin en 1492 con el descubrimiento de América
		</p>
		</div>	
	</article>

</section>