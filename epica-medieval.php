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
	<h2>Genero[Epica] - Epoca[Epica]</h2>
<section >
	<article class="generos">
		<a href="cid.php"><span>Cantar de mio Cid </span></a></li><br>
		<div class="material">
		<figure><img src="plantilla/imagenes/300px-Cantar_de_mio_Cid_f._1r_(rep).jpg" alt=""></figure>
		<p>El Cantar de mio Cid es un cantar de gesta anónimo que relata hazañas heroicas inspiradas libremente en los últimos años de la vida del caballero castellano Rodrigo Díaz el Campeador. </p>
		</div>
		<a class="ver" href="cid.php"><span>ver mas...</span></a>
	</article>
	<article class="generos">
		<a href="campana-huasca.php"><span>Cantar de la campana de Huesca</span></a></li><br>
		<div class="material">
		<figure><img src="plantilla/imagenes/campana-huasca.jpg" alt=""></figure>
		<p>
			Fue compuesta por un autor anónimo, clérigo de la comarca de Huesca o la zona pirenaica según Ubieto, que refundiría tradiciones orales forjadas a partir de los acontecimientos históricos sucedidos al rey Ramiro el monje entre el otoño de 1135 y el verano de 1136 y dataría de comienzos del siglo XIII.
		</p>
		</div>
		<a class="ver" href="campana-huasca.php"><span>ver mas...</span></a>	
	</article>



</section>