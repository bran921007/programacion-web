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
	<h2>Genero</h2>
<section >
	<article class="generos">
		<a href="horror.php"><span>Horror</span></a></li><br>
		<div class="material">
		<figure><img src="plantilla/imagenes/terror.jpg" alt=""></figure>
		<p>La novela de terror es un subgénero dentro de la novela, que es a su vez un subgénero de la épica o narrativa. Su principal característica y rasgo distintivo es el cultivo del miedo y sus emociones asociadas como principal objetivo literario. La novela de terror es uno de los formatos habituales en los que se presenta actualmente la nueva literatura de terror gótico, en detrimento del clásico cuento de terror.</p>
		</div>
	</article>
	<article class="generos">
		<a href="epica.php"><span>Epica</span></a></li>
		<div class="material">
		<figure> <img src="plantilla/imagenes/epica.jpg" alt=""></figure>
		<p>
			La literatura épica es un género literario, también llamado poesía épica, que narra o describe hechos legendarios -normalmente ficticios- desarrollados en un determinado espacio y tiempo.
		</p>
		</div>	
	</article>

</section>

</body>
</html>