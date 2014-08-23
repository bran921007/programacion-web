<?php
include('plantilla.php');
include('buscar_funcion.php');


$busqueda = new Buscador();



?>

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


<?php

if($_POST)
{
	$busca = $_POST['txtBusqueda'];
	$busque = Buscador::lista($busca);
	foreach ($busque as $busq) 
	{
	$imagen = $busq['imagen'];


	echo <<<FILA
	<article class="generos">
	<figure class="imagen"><img src="plantilla/imagenes/{$imagen}"/></figure>
	<div class="contenido">
		<h4>{$busq['titulo']}</h4>
		<p class="parrafo">{$busq['mensaje']}</p>
		<a href="{$busq['url']}"><span>Ver mas</span></a>
	</div>

	</article>

FILA;
	}

}
?>


