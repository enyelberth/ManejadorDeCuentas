<?php
require_once("../Model/Cuenta.php");



function Validar($correo, $contraseña, $fechaVencimiento, $tipoCuenta)
{
    return !empty($correo) && !empty($contraseña) && !empty($fechaVencimiento) && !empty($tipoCuenta);
}
function RegistraCuenta()
{
    $codigo = $_POST["numero"];
    $correo = $_POST["correo"];
    $contraseña = $_POST["contraseña"];
    $fechaVencimiento = $_POST["fechaVencimiento"];
    $tipoCuenta = $_POST["tipoCuentas"];

    $Cuenta = new Cuenta($correo,$contraseña,$fechaVencimiento,$tipoCuenta);
    $Cuenta->Agregar();
}
function eliminarRegistroX($id)
{
    $correo = "asda";
    $contraseña = "asda";
    $fechaVencimiento = "asda";

    // $cuenta = new Cuenta($correo,$contraseña,$fechaVencimiento);
    // $cuenta->Eliminar($id);
}
function verCuentas()
{
    $correo = "asda";
    $contraseña = "asda";
    $fechaVencimiento = "asda";
    // $cuenta = new Cuenta($correo,$contraseña,$fechaVencimiento);

    // return $a =$cuenta->index();
}


function Recepcion()
{
    $correo = $_POST["correo"];
    $correo = $_POST["contraseña"];
    $correo = $_POST[""];
    $correo = $_POST[""];
}

function validarDatos()
{

    $correo = $_POST["correo"];
    $contraseña = $_POST["contraseña"];
    $fechaVencimiento = $_POST["fechaVencimiento"];
    $tipoCuenta = $_POST["tipoCuentas"];
    $codigo = $_POST["numero"];
    if (isset($_POST["botonRegistro"])) {
        if (Validar($correo, $contraseña, $fechaVencimiento, $tipoCuenta)) {
            echo 'se validaron los datos con exito';
            echo $codigo;
            RegistraCuenta();
            echo $fechaVencimiento;
        } else {
            echo "no se validaron los datos ";
            require_once("../View/RegistroCuentas.php");
        }
    }
}
validarDatos();
    // if (isset($_POST["botonRegistro"])) {
//     if (Validar($correo, $contraseña, $fechaVencimiento)) {

//         $status = "success";
//     } else {
//         $status = "danger";
//     }
// }
// $correo = $_POST["correo"];
// $contraseña = $_POST["contraseña"];
// $fechaVencimiento = "asda";




// require_once("./View/CuentasRegistradas.php");
