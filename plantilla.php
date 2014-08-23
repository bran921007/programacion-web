<?php
//include('buscar_funcion.php');
$objPlan = new plantilla();
//$busqueda = new Buscador();

class plantilla{

	function __construct(){

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ciudad Literaria</title>

<meta name="description" content="">
<meta name="keywords" content="">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="plantilla/css/style.css">
<style>
.contenedor
{
 min-height: 300px;
}

.menu ul li a: hover{
	background-color: #FF8000;

}
#headerright p span img{
	width: 100px;
	height: 80px;
	border-radius: 10px;

}
.generos
	{
		
		background-color: white;
		border-radius: 26px;
		padding: 2em;
		margin: 1em;
		/*position: relative;*/
		/* box-shadow: 10px 10px 5px #888888; */
		-moz-box-shadow: 0 0 5px 5px #888;
		-webkit-box-shadow: 0 0 5px 5px#888;
		box-shadow: 0 5px 5px 5px #888;
	}

</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="plantilla/js/jquery.js"><\/script>')</script>
<script src="plantilla/js/scripts.js"></script>
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<div class="container darkbg clearfix">
	<div id="headercont" class="clearfix">
		<div id="headerlogo">
			<h1><a title="" href="">Ciudad Literaria</a></h1>
		</div>
		<div id="headerright">
            <p><span><img src="plantilla/imagenes/twitterliteratura2.jpg" alt=""></span></p>
         
		</div>
	</div>
</div>
<div class="container lightbluebg clearfix">
<form action="buscar.php" enctype="multipart/form-data" METHOD="POST">
    <div id="menucont" class="clearfix">
        <div class="menu">
            <ul>
                <li class="active"><a title="" href="index.php"><span>Inicio<span></a></li>
                <li><a href="reglas"><span>Reglas de Ortografia</span></a></li>
                <li><a title="" href="obra.php"><span>Obras</span></a>
	
                </li>
                <li><a title="" href="contacto/contactos.php"><span>contacto</span></a></li>
                
                <li><input type="text" name="txtBusqueda" placeholder="Buscar"/></li>
                <input type="submit" value="Buscar"/>
                
            </ul>
        </div>
    </div>
    </form>
</div>
<div class="contenedor">
<div class="container clearfix">
	<div id="maincont" class="clearfix">
		<div id="mainleft">

<?php
	}

	function __destruct()
	{
?>

        </div>
        <div id="mainright">
            <h3>Efemerides</h3>
            <ul class="otherlinks clearfix">
            <!--	<li><a title="" href="#" rel="external">Side Link 1</a></li>
                <li><a title="" href="#" rel="external">Side Link 2</a></li>
                <li><a title="" href="#" rel="external">Side Link 3</a></li>-->
            </ul>
            <div class="sidecont clearfix">
                <div class="sidesection clearfix">
                    <h4><a title="" href="#">Literatura</a></h4>
                    <div class="sidetop">
                        <a class="hoverlink" title="" href="#"><img alt="" src="plantilla/imagenes/libro_visitas.jpg" /><div class="overlay link"></div></a>
                    </div>
                    <div class="sidebottom">
                        <p>La literatura es el arte que utiliza como instrumento la palabra</p>
                    </div>
                </div>
                <div class="sidesection clearfix">
                    <h4><a title="" href="#">Obra</a></h4>
                    <div class="sidetop">
                        <a class="hoverlink" title="" href="#"><img alt="" src="plantilla/imagenes/11976029-566a-4255-ac91-69ae36631aba.jpg" /><div class="overlay link"></div></a>
                    </div>
                    <div class="sidebottom">
                        <p>Se llama obra literaria a una creación artística donde existe un narrador (que describe personajes y acontecimientos, generalmente en primera o en tercera persona, aunque también ha habido algunos casos de narradores en segunda persona  a través de la que se emiten mensajes y enseñanzas con la intención de comunicar y producir goce estético, por lo general narrando una historia que tiene un determinado argumento</p>
                    </div>
                </div>
			</div>
        </div>
	</div>
</div>
<div class="container clearfix">
    <div id="footercont" class="clearfix">
        <p>Powerby Francisco Perez 2012-1147 </p>
    </div>
</div>
</div>
</body>
</html>

</body>
</html>

<?php
	}

}