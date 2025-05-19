<?php
echo "Buenos días, bienvenido a la página web de Hotel Transilvania \nDe acuerdo a la llamada de nuestros asesores, vamos a confirmar tus datos de reservación :)\n\n";

$usuario = array();

    array_push($usuario, "Angiee Galvis");
    array_push($usuario, "Pepito perez");
    array_push($usuario, "Lia Catalena");
    array_push($usuario, "Maria del rosario Vega");
    array_push($usuario, "Catharina Megía");

    $usuario_mostrar = array_pop($usuario);

echo "El último usuario que se registró en nuestro sistema es: " . $usuario_mostrar . "\n\n";



$respuesta = strtolower(readline("¿Este es tu nombre verdadero? Responde con si o no: "));


if ($respuesta == 'si') {
    echo "\n¡Perfecto! Hemos confirmado tu nombre: " . $usuario_mostrar . "\n";
    echo "Procederemos con la confirmación de tu reservación :D!\n";
} else {

    $nombre_correcto = readline("\nPor favor ingresa el nombre con el que te registraste: ");

    array_push($usuario, $nombre_correcto);
    
    echo "\n¡Gracias por la corrección!\n";
    echo "Hemos actualizado tu nombre a: " . $nombre_correcto . "\n";
    echo "Procederemos con la confirmación de tu reservación :D!\n";
}    
    
    echo "En base al usuario escogido, el día de reservación escogido en la llamada fue: \n\n";
	
	$dia = 4;
	switch ($dia) {
	  
	 case 1:
	    echo "Escogiste el Lunes";
	    break;
	    
	 case 2:
	    echo "Escogiste el Martes";
	    break;
	    
   case 3:
	    echo "Escogiste el Miercoles";
	    break;
	    
   case 4:
	    echo "Escogiste el Jueves";
	    break;
	    
	 case 5:
	    echo "Escogiste el Viernes";
	    break;
	    
	 case 6:
	    echo "Escogiste el Sábado";
	    break;
	    
	 case 7:
	    echo "Escogiste el Domingo";
	    break;
	    
	 default:
	    echo "El número que escojiste es invalido, por favor digita un número del 1 al 7 (-v-)/";
	    break;
	}
	
	
	?>