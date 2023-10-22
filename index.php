<?php

require_once("./Database/MySQLI/Conexion.php");
require_once("./Controller/PersonaController.php");
require_once("./Model/Persona.php");
require_once("./Model/PersonaUser.php");
require_once("./Controller/ControllerCuentas.php");
require_once("./Model/Cuenta.php");
// require_once("./Model/PersonaUser.php");

$nombre = "enyelberth";
$apellido = "Rodriguez";
$cedula = 30204334;
$edad = 19;
$FechaNacimiento = "dasd";   
$fechaRegs = date("j, n, Y");   
$correo= "naiyolis.z@gmail.com";
$usuario="enyelberth10";
$contraseña= 210294;
$tipoUsuario = "Admin";


$cuenta= new Cuenta($correo,$contraseña,$FechaNacimiento);

$enyelberth = new Persona($nombre,$apellido,$cedula,$edad,$FechaNacimiento,$correo,$usuario,$contraseña,$tipoUsuario,$fechaRegs);
$persona = new PersonaController();
// $net = new CuentaNetflix($correo,$contraseña,$FechaNacimiento);
// $net->Registrar();
$er = new ControllerCuentas();
$er->RegistraNetflix($cuenta);
// $persona->Agregar($enyelberth);
?>