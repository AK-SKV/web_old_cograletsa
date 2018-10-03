<?php


/*captura de informaci??*/
$nombre = $_REQUEST['nombre'];
$correo = $_REQUEST['correo'];
$comentario = $_REQUEST['comentario'];
$de_nombre=$nombre;
$de=$correo;
$para="ventas@cograletsa.com";
$mensaje= "
Correo recibido por el sitio web en Consulta Rapida
<table>
<tr> <td> Nombre: </td><td> $nombre </td></tr>
<tr> <td> Correo: </td><td> $correo </td></tr>
<tr> <td> Comentario: </td><td> $comentario</td></tr>
</table>

";

$cabeceras="From: {$de_nombre}<{$de}>\n";
$cabeceras.="Reply-To: {$de}\n";
$cabeceras.="MIME-version: 1.0\n";
$cabeceras.="Content-type: text/html; charset=iso-8859-1\n";


if(mail($para,"Solicitud",$mensaje,$cabeceras))
{
       header( 'Location: http://www.cograletsa.gruposovi.com/contacto2.html' ) ;
} 
?>