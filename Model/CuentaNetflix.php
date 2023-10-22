<?php

require_once("./Database/MySQLI/Conexion.php");
require_once("./Cuenta.php");

class CuentaNetflix extends Cuenta{

    // private $conexion;

    public function Registrar(){
        $consulta = Conexion::getInstance()->get_database_instance()->prepare("INSERT INTO `cuentasnetflix` (`id`, `Correo`, `Contraseña`, `FechaVencimiento`, `Precio`) VALUES (NULL, 'enyelberthrc22.z@gmail.com', '30204334', '2023-10-01', '');");
        if ($consulta->execute()) {
            echo "exito";
        } else {
            echo "fallido";
        }
    }
    
}

// $a = new Cuenta($a,$a,$A);
