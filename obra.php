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
		<a href="obras.php"><span>Descripcion</span></a></li><br>
		<div class="material">
		<figure><img src="plantilla/imagenes/Obra_literaria.JPG" alt=""></figure>
		<p>Es aquella obra de arte que se presenta en forma escrita, táctil u oral. Un elemento central para la obra literaria es la narración de un hecho, evento, serie de eventos, sentimientos, ideas o simplemente una expresión artística sobre diferentes situaciones. </p>

		Esta seccion de la pagina te abre las puertas a una biblioteca de obras literarias.
		</div>
		<a href="obras.php">Entrar en esta seccion</a>
	</article>


</section>

</body>
</html>