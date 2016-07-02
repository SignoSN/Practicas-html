<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$tiempo = $_POST['tiempo'];
/*
foreach($_POST['interes']){
$i=0;
$interes[$i]= $POST['interes'];
$i++;
}*/
$interes = $_POST['interes'];

$localidad = $_POST['localidad'];
$comentarios = $_POST['comentarios'];

$aquien = "signosn@gmail.com";
$asunto = "envio de datos";
$mensaje = $comentarios;
if(mail($aquien,$asunto,$mensaje)){
echo "<h3> Mensaje enviado</h3>
<p>muy pronto recibirá respuesta</p>
";
var_dump($_POST);
}else{
echo "<h3>No se pudo enviar el archivo</h3>";
}
?>

