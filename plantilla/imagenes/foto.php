<?php

$imagen = $_GET['imagen'];

$foto;

if(is_file("$imagen"))
{
	$foto = "$imagen";

}
readfile($foto);

?>