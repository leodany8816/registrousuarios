<?php
include('../funciones/funciones.php');

$nombre = $_POST["nombre"];
$app = $_POST["app"];
$apm = $_POST["apm"];
$fnan = $_POST["fnan"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$contra = $_POST["contra"];

$atributos = array(
    "nombre" => $nombre,
    "apellido_paterno" => $app,
    "apellido_materno" => $apm,
    "fecha_nacimiento" => $fnan,
    "email" => $email,
    "telefono" => $telefono,
    "password" => md5($contra)
);

insertar_bd('usuarios', $atributos); 

echo "a";
?>