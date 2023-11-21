<?php

// require_once("../Database/MySQLI/Conexion.php");
require_once("../Database/MySQLI/Conexion.php");


class Perfil
{
    private $codigo_cuenta;
    private $nombre_cliente;
    private $nombre_perfil;
    private $fecha_pago;
    private $pin;
    private $precio_perfil;


    public function __get($name)
    {
        switch ($name) {
            case 'codigo_cuenta':
                return $this->codigo_cuenta;
                break;
            case 'nombre_cliente':
                return $this->nombre_cliente;
                break;
            case 'nombre_perfil':
                return $this->nombre_perfil;
                break;

            case 'pin':
                return $this->pin;
                break;
            case 'precio_perfil':
                return $this->precio_perfil;
                break;
            case 'fecha_pago':
                return $this->fecha_pago;
                break;
                // case 'id_Cuenta':
                //     return $this->id_Cuenta;
                //     break;


            default:
                # code...
                break;
        }
    }

    public function __construct($codigo, $cliente, $perfil, $fecha_pago, $pin, $precio_perfil)
    {
        $this->codigo_cuenta = $codigo;
        $this->nombre_cliente = $cliente;
        $this->nombre_perfil = $perfil;
        $this->fecha_pago = $fecha_pago;
        $this->pin = $pin;
        $this->precio_perfil = $precio_perfil;
    }
    public function AgregarPerfil()
    {

        $conexion = Conexion::getInstance()->get_database_instance();

        // $trt = $conexion->prepare("INSERT INTO `perfilesnetflix` (`NombreCliente`, `Perfil`, `Correo`, `contraseña`, `pin`, `valor`, `FechaPago`, `idCorreo`) VALUES ('CArlos', 'ray', 'enyelberthrc22.z@gmail.com', '30204334', '2233', '15', '2023-10-03', '130');");
        $trt = $conexion->prepare("INSERT INTO `perfiles` (`Codigo_cuenta`,`Nombre Cliente`, `Nombre Perfil`, `Fecha Perfil`, `Pin`, `precio`) VALUES ('$this->codigo_cuenta','$this->nombre_cliente', '$this->nombre_perfil', '2023-11-07', '$this->pin', '$this->precio_perfil');");
        $trt->execute();
        echo "Se a agregado un perfil";
    }
    public function EditarPerfil($cliente, $perfil, $correo, $contraseña, $pin, $precio_perfil, $fecha_pago, $id_Cuenta)
    {
        $conexion = Conexion::getInstance()->get_database_instance();



        $trt = $conexion->prepare("UPDATE `perfilesnetflix` SET `NombreCliente` = '$cliente', `Perfil` = $perfil, `Correo` = $correo, `contraseña` = $contraseña, `pin` = $pin, `valor` = $precio_perfil, `FechaPago` = '2023-10-01', `idCorreo` = $id_Cuenta WHERE `perfilesnetflix`.`id` = 6; ");
        $trt->execute();
        echo "Se a actualiado los datos correctamente";
    }
    public function EliminarPerfil()
    {


        $conexion = Conexion::getInstance()->get_database_instance();
        $trt = $conexion->prepare("");
    }
    public function index()
    {
        $conexion = Conexion::getInstance()->get_database_instance();

        $trt = $conexion->prepare("");
    }
}
