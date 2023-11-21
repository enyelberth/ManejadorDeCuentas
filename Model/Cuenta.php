<?php

require_once("../Database/MySQLI/Conexion.php");
class Cuenta
{
    private $codigo;
    private $correo;
    private $contraseña;
    private $fechaVencimiento;
    // private $precio;

    private $tipoCuenta;
    private function generatorCodigo()
    {
        $Nrandon = rand(1, 1000000000);
        // $this->codigo = strval($Nrandon);
    }
    public function __construct($correo, $contraseña, $fechaVencimiento, $tipoCuenta)
    {

        // generatorCodigo();
        // $this->o = $codigo;
        $this->correo = $correo;
        $this->contraseña = $contraseña;
        $this->fechaVencimiento = $fechaVencimiento;
        $this->tipoCuenta = $tipoCuenta;
    }
    public function __get($propiedad)
    {
        // Usamos switch-case para evaluar el valor de $propiedad
        switch ($propiedad) {
            case "correo":
                return $this->correo;
                break;
            case "contreseña":
                return $this->contraseña;
                break;
            case "fechaVencimiento":
                return $this->cedula;
                break;
            case "precio":
                return $this->edad;
                break;
            case "tipoCuenta":
                return $this->tipoCuenta;
                break;
            // case "codigo":
            //     return $this->codigo;
            //     break;
            default:

                return "Propiedad no encontrada";
                break;
        }
    }
    public function Agregar()
    {
        // $consulta = Conexion::getInstance()->get_database_instance()->prepare("INSERT INTO `cuentas_registradas` (`Correo`, `Contraseña`, `FechaVencimiento`, `Tipo_de_Cuenta`) VALUES ('$this->correo' ,'$this->contraseña', '2023-11-02', '$this->tipoCuenta');");
        $consulta = Conexion::getInstance()->get_database_instance()->prepare("INSERT INTO `cuentas_registradas` (`Correo`, `Contraseña`, `FechaVencimiento`, `TipoCuenta`) VALUES ('$this->correo' ,'$this->contraseña', '2023-11-02', '$this->tipoCuenta');");
        // $consulta = Conexion::getInstance()->get_database_instance()->prepare("INSERT INTO `cuentasnetflix` (`Correo`, `Contraseña`, `FechaVencimiento`) VALUES ('$this->correo', '$this->contraseña', '2023-10-03');");
        if ($consulta->execute()) {
            echo "exito";
            // echo "$this->FechaNacimiento";
        } else {
            echo "fallido";
        }
    }
    public function editar($correo, $contraseña, $fechaVencimiento)
    {

        $consulta = Conexion::getInstance()->get_database_instance()->prepare("UPDATE `cuentasnetflix` SET `Correo` = 'iujoa@gmail,com', `Contraseña` = '210294', `FechaVencimiento` = '2023-10-03', `Precio` = '12' WHERE `cuentasnetflix`.`id` = 12; ");
        $consulta->execute();
    }
    public function Eliminar($idEliminar)
    {

        $consulta = Conexion::getInstance()->get_database_instance()->prepare("DELETE FROM cuentasnetflix WHERE `cuentasnetflix`.`id` = $idEliminar");

        $consulta->execute();
    }
    public static function index()
    {
        $consulta = Conexion::getInstance()->get_database_instance()->prepare("SELECT * FROM `cuentas_registradas` ");

        $consulta->execute();
        $resultado = $consulta->get_result()->fetch_all();
        // $this->CuentasRegistradas = $resultado;
        return $resultado;
        // var_dump($resultado);
    }
}
