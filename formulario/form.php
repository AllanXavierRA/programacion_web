<?php
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$correo=$_POST["correo"];
$mensaje=$_POST["mensaje"];

echo 'Tu nombre es: '.$nombre.' '.$apellido.'<br>';
echo 'Correo electrónico: '.$correo.'<br>';
echo 'Tus comentarios: '.$mensaje.'<br>';

?>