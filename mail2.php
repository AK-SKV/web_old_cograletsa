<?php


/*captura de información*/
$nombre = $_REQUEST['nombre'];
$apellido = $_REQUEST['apellido'];
$correo = $_REQUEST['correo'];
$telefono = $_REQUEST['telefono'];

$comentario = $_REQUEST['comentario'];
$area = $_REQUEST['area'];
$boundary = $_REQUEST['archivo'];

$de_nombre=$nombre;
$de=$correo;
//$para="ventas@cograletsa.com";
$para="masuv7@yahoo.com";
$mensaje= "
Correo recibido por el sitio web con los siguientes datos personales
<table>
<tr> <td> Nombre: </td><td> $nombre </td></tr>
<tr> <td> Apellido: </td><td> $apellido </td></tr>
<tr> <td> Correo: </td><td> $correo </td></tr>
<tr> <td> Teléfono: </td><td> $telefono</td></tr>
<tr> <td> Area: </td><td> $area</td></tr>
<tr> <td> Comentario: </td><td> $comentario</td></tr>
</table>


";

$cabeceras="From: {$de_nombre}<{$de}>\n";
$cabeceras.="Reply-To: {$de}\n";
$cabeceras.="MIME-version: 1.0\n";
$cabeceras.="Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n\n";


if(mail($para,"Solicitud de empleo",$mensaje,$cabeceras))
{
 
header( 'Location: oportunidad.html' );

}


?>