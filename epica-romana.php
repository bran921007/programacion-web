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
	<h2>Genero[Epica] - Epoca[Romana]</h2>
<section >
	<article class="generos">
		<a href="eneida.php"><span>Eneida </span></a></li><br>
		<div class="material">
		<figure><img src="plantilla/imagenes/eneida.jpg" alt=""></figure>
		<p>Inspirándose en las obras homéricas la "Ilíada" y la "Odisea", el autor Publio Virgilio Maro llevó a cabo la escritura de "La Eneida", la gran epopeya nacional romana. Las narraciones de los viajes y conflictos en los que se ve envuelto el héroe troyano Eneas tras su precipitada huida de la ciudad de Troya son una de las mejores muestras de la literatura épica latina. La obra se encuentra dividida en cantos o libros, siendo doce en total. 

</p>
		</div>
		<a class="ver" href="eneida.php"><span>ver mas...</span></a>
	</article>
	<article class="generos">
		<a href="bucolias-georgicas.php"><span>Las Bucólicas y las Geórgicas</span></a></li><br>
		<div class="material">
		<figure><img src="plantilla/imagenes/bucoliasygeorgicas.jpg" alt=""></figure>
		<p>
			En las Bucólicas y las Georgicas son sacados a colación autores de Grecia como Pitágoras, Epicuro y sobre todo Platón debido que cuando el poeta llegó a Nápoles se preparó para la elocuencia con la práctica ocasionada de los modelos griegos que dejaron en el una profunda huella y con el estudio de sistemas filosóficos también griegos.
		</p>

		</div>	
		<a class="ver" href="bucolias-georgicas.php"><span>ver mas...</span></a>
	</article>


</section>