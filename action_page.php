<?php
//var_dump($_GET);
	echo "Su nombre es ".$_GET['nombre'];
 $archivo=fopen('usuarios.txt','a');
fwrite($archivo,$_GET['nombre'])."\n";


//el contenido de data.txt ahora es 123 y no 23
//Estamos el alta de nuestra página

?>