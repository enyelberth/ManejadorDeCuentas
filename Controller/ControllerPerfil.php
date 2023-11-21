<?php


require_once("../Model/Perfil.php");


// if(isset($_POST["botonRegistro"])){
//     echo "si se envio el formulario";
// }

function Validar($codigo,$cliente,$perfil,$fecha_pago,$pin,$precio_Perfil){
return !empty($codigo) && !empty($cliente)&& !empty($perfil) && !empty($fecha_pago) && !empty($pin) && !empty($precio_Perfil);
} 
function RegistraCuenta(){


    $codigo =$_POST["Codigo_cuenta"];
    $cliente = $_POST["nombre_cliente"];
    $perfil = $_POST["nombre_perfil"];
    $pin = $_POST["pin"];
    $fecha_pago = $_POST["fechaVencimiento"];
    $precio_Perfil= $_POST["PrecioCuenta"];

    $perfil = new Perfil($codigo,$cliente,$perfil,$fecha_pago,$pin,$precio_Perfil);
    $perfil->AgregarPerfil();

}
function validarDatos()
{

    $codigo =$_POST["Codigo_cuenta"];
    $cliente = $_POST["nombre_cliente"];
    $perfil = $_POST["nombre_perfil"];
    $pin = $_POST["pin"];
    $fecha_pago = $_POST["fechaVencimiento"];
    $precio_Perfil= $_POST["PrecioCuenta"];
    if (isset($_POST["botonRegistro"])) {
        if (Validar($codigo,$cliente,$perfil,$fecha_pago,$pin,$precio_Perfil)) {
            echo 'se validaron los datos con exito';
            // echo $codigo;
            RegistraCuenta();
            // echo $fechaVencimiento;
        } else {
            echo "no se validaron los datos ";
            // require_once("../View/RegistroCuentas.php");
            require_once("../View/RegistroPerfiles.php");
        }
    }
}
// validarDatos();