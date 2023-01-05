<?php // abre PHP
// todo este primer bloque es de variables y sus valores
$destino = ''; // a dónde va a llegar
$origen_nombre=''; // dominio que envía el mail
$origen_mail=''; // lo manda el mismo mail al que llega, independientemente de la info del usuario
$subject='Mail desde el formulario'; // Asunto de todos los mensajes que llegan desde el form
$adondevoy='gracias.html'; // página de redireccionamiento
// Se utilizan variables en parte porque facilita su reutilización

/*
A partir de acá no hace falta cambiar nada
Todo esto hace referencia a cómo se va a ver el mail
 */

$headers="From: " . $_POST['nombre'] . "<".$_POST['email'] . ">\r\n";
$headers.= "Reply-To: " . $_POST['email'] . "\r\n";
$headers.= "Return-Path: $origen_mail\r\n";

$mensaje=''; // con este bloque llega el mensaje del usuario
     foreach($_POST as $k => $v){ // cicla todos los valores que entraron por el formulario
        //  if($k!='Submit' && $k!='Enviar'){
             $mensaje.=ucfirst($k).": $v\n"; // Convierte a mayúsculas la primera letra y asigan valores a las claves
        //  }
     }
ini_set('sendmail_from', $origen_mail); // establece un valor
mail($destino, $subject, $mensaje, $headers);
header("Location:$adondevoy"); // redirecciona al finalizar el envío

/*
'' y "" -> Se usan distintas comillas dependiendo si vamos a insertar variables en el texto o no
\r\n -> juntos y a resumidas cuentas sería como apretar enter en un editor de texto
.= -> concatena valores asignados
*/
?>