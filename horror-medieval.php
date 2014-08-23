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
	<h2>Genero[Horror] - Epoca[Medieval]</h2>
<section >
	<article class="generos">
		<a href="santa-galicia.php"><span>La Santa Compaña de Galicia</span></a></li><br>
		<div class="material">
		<figure><img src="plantilla/imagenes/2627c-mc383c2basicos28229.jpg" alt=""></figure>
		<p>Esta es sin duda una de las leyendas de terror más populares de España. La Santa Compaña se compone de un grupo de ánimas que salen de noche en procesión como penitencia por sus culpas y maldades.
			Como los miembros de la Santa Compaña estaban muertos y ya no pertenecían a este mundo se habían quedado ciegos y precisaban que una persona viva les guiase.
		</p>
		</div>
		<a class="ver" href="santa-galicia.php"><span>ver mas...</span></a>
	</article>
	<article class="generos">
		<a href="itzugarri.php"><span>El itzugarri de Euskadi</span></a></li><br>
		<div class="material">
		<figure><img src="plantilla/imagenes/NataldaIgreja05.jpg" alt=""></figure>
		<p>
			En tierras vascas durante la Edad Media circulaban historias acerca del itzugarri o ánima errante. Este espectro abordaba a los transeúntes en zonas deshabitadas o en los cruces de caminos con la intención de que el mortal en cuestión le ayudase a salir del Purgatorio.
		</p>
		</div>
		<a class="ver" href="itzugarri.php"><span>ver mas...</span></a>	
	</article>


</section>