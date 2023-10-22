<?php

require_once("./Database/MySQLI/Conexion.php");

class ControllerCuentas{
    private $Conexion;

    public function __construct()
    {
        $this->Conexion = Conexion::getInstance()->get_database_instance();
       
    }
    public function RegistraNetflix($persona){
        $consulta = Conexion::getInstance()->get_database_instance()->prepare("INSERT INTO `cuentasnetflix` (`Correo`, `Contraseña`, `FechaVencimiento`, `Precio`) VALUES ('$persona->correo', '$persona->contraseña', '2023-10-01', '');");
        if ($consulta->execute()) {
            echo "exito";
        } else {
            echo "fallido";
        }

    }
    public function RegistrarPerfilNetflix(){
        $consulta = Conexion::getInstance()->get_database_instance()->prepare("INSERT INTO `perfilesnetflix` (`NombreCliente`, `Perfil`, `Correo`, `contraseña`, `pin`, `valor`, `FechaPago`, `idCorreo`) VALUES ('par', 'er', 'crear', '123', '2222', '1', '2023-10-03', '11');");
        if ($consulta->execute()) {
            echo "exito";
        } else {
            echo "fallido";
        }
    }
}