<?php


/*captura de informaci贸n*/
$nombre = $_REQUEST['nombre'];
$apellido = $_REQUEST['apellido'];
$empresa = $_REQUEST['empresa'];
$correo = $_REQUEST['correo'];
$telefono = $_REQUEST['telefono'];

$comentario = $_REQUEST['comentario'];
$producto = $_REQUEST['producto'];
$visita = $_REQUEST['visita'];

$de_nombre=$nombre;
$de=$correo;
$para="ventas@cograletsa.com";
$mensaje= "
Correo recibido por el sitio web solicitando lo siguiente
<table>
<tr> <td> Nombre: </td><td> $nombre </td></tr>
<tr> <td> Apellido: </td><td> $apellido </td></tr>
<tr> <td> Empresa: </td><td> $empresa</td></tr>
<tr> <td> Correo: </td><td> $correo </td></tr>
<tr> <td> Teléono: </td><td> $telefono</td></tr>
<tr> <td> Desea Visita: </td><td> $visita</td></tr>
<tr> <td> Producto: </td><td> $producto</td></tr>
<tr> <td> Comentario: </td><td> $comentario</td></tr>
</table>


";

$cabeceras="From: {$de_nombre}<{$de}>\n";
$cabeceras.="Reply-To: {$de}\n";
$cabeceras.="MIME-version: 1.0\n";
$cabeceras.="Content-type: text/html; charset=iso-8859-1\n";


if(mail($para,"Solicitud",$mensaje,$cabeceras))
{
 
header( 'Location: http://www.cograletsa.gruposovi.com/contacto2.html' );

}


?>