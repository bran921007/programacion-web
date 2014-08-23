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
	<h2>Genero[Horror] - Epoca[Romana]</h2>
<section >
	<article class="generos">
		<a href="estatua-fuente.php"><span>La estatua de la fuente </span></a></li><br>
		<div class="material">
		<figure><img src="plantilla/imagenes/images2.jpg" alt=""></figure>
		<p>Después de manejar un tramo corto por un camino rural, Susana y Rodrigo
			Llegaron a su nuevo hogar. Junto con ellos venía el camión de la mudanza.
			Al ingresar a la sala, Susana, que aún no conocía la casa, giró como si danzara
			Mientras trataba de abarcar todo con la vista.</p>
		</div>
		<a class="ver" href="estatua-fuente.php"><span>ver mas...</span></a>
	</article>
	<article class="generos">
		<a href="elfas-gafas.php"><span>Elfas gafas: Cuentos romanos.</span></a></li><br>
		<div class="material">
		<figure><img src="plantilla/imagenes/Una-preciosa-elfa.jpg" alt=""></figure>
		<p>
			Natale, a primera vista, no parecía muy fuerte: de estatura mediana, corpulento, reventando en sus trajes que siempre parecían quedarle estrechos. Y en cambio era un toro; yo lo había visto levantar él solo, en el taller, un cochecito utilitario.
		</p>
		</div>
		<a class="ver" href="elfas-gafas.php"><span>ver mas...</span></a>	
	</article>


</section>