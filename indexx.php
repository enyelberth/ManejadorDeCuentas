<?php

// require_once("./Database/MySQLI/Conexion.php");
// require_once("./Controller/PersonaController.php");
// require_once("./Model/Persona.php");
// require_once("../Model/PersonaUser.php");
// require_once("./Controller/ControllerCuentas.php");
// require_once("./Model/Cuenta.php");
require_once("../ManejadorDeCuentas/Database/MySQLI/Conexion.php");
require_once("./Model/Perfil.php");
// require_once("./Model/PersonaUser.php");

$nombre = "enyelberth";
$perfil = "er11";
$cedula = 30204334;
$edad = 19;
$pin = 2022;
$FechaNacimiento = "dasd";   
$fechaRegs = date("j, n, Y");   
$correo= "naiyolis.z@gmail.com";
$usuario="enyelberth10";
$contraseña= 210294;
$tipoUsuario = "Admin";
$idCUenta = 11;

$perfil = new Perfil($nombre,$perfil,$correo,$contraseña,$a,$aa,$asd,$asd);

$perfil->EditarPerfil($nombre,$perfil,$correo,$contraseña,$pin,$edad,$asd,$idCUenta)

?>