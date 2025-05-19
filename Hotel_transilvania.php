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


    echo "En base al usuario escogido, el día de reservación elegido en la llamada fue: \n";
	
	$dia = 4;
	switch ($dia) {
	  
	 case 1:
	    echo "Lunes \n\n";
	    break;
	    
	 case 2:
	    echo "Martes \n\n";
	    break;
	    
   case 3:
	    echo "Miércoles \n\n";
	    break;
	    
   case 4:
	    echo "Jueves \n\n";
	    break;
	    
	 case 5:
	    echo "Viernes \n\n";
	    break;
	    
	 case 6:
	    echo "Sábado \n\n";
	    break;
	    
	 case 7:
	    echo "Domingo \n\n";
	    break;
	    
	 default:
	    echo "El número que escojiste es invalido, por favor digita un número del 1 al 7 (-v-)/ \n\n";
	    break;
	}
	
	$dia_inicio = 4; 
	
$dias_semana = ["Lunes 26 de Mayo", "Martes 27 de Mayo", "Miércoles 28 de Mayo", "Jueves 29 de Mayo", "Viernes 30 de Mayo", "Sábado 31 de Mayo", "Domingo 1 de Mayo"];

echo "De acuerdo a los datos del sistema, usted reservó estadía durante estos días: \n";

for ($i = 0; $i < 3; $i++) {
    $dia_actual = ($dia_inicio + $i - 1) % 7; 
    echo "Día " . ($i + 1) . ": " . $dias_semana[$dia_actual] . " (Noche " . ($i + 1) . ")\n";
}


if ($dias_semana = "Sábado 31 de Mayo") {
    echo "Para terminar con tu proceso, ¡Te invitamos este sábado 31 de mayo a nuestro banquete en el Hotel para que puedas comer todo lo que puedas! \n";
} else {
    echo "Gracias por la reservación, te avisaremos si habrá algún evento especial mientras te encuentras en nuestro hotel :)";
}

echo "\n¡Listo! Muchas gracias por tenernos en cuenta para que puedas pasar tu estadía en la comodidad de nuestro hotel.\nCualquier inconveniente que tengas puedes solucionarlo con nuestros asesores <(*V*)> \n";

?>
