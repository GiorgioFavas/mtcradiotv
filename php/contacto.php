<?php 

$destinatario = 'giorgio.facundo.4@gmail.com';

$nombre = $_POST['name'];
$telefono = $_POST['phone'];
$email = $_POST['email'];
$caja = $_POST['comments'];

$header = "Enviado desde la pagina Giorgio";
$cajacompleto = $caja . "/n Atentamente: " . $nombre;

mail($destinatario, $nombre, $cajacompleto, $header);
echo "<script>alert('correo enviado exitosamente')</script>";
echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";
?>