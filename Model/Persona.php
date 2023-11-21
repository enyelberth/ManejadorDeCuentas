<?php


// require_once("./Database/MySQLI/Conexion.php");
require_once("../Database/MySQLI/Conexion.php");


class Persona
{
    public $nombre;
    private $apellido;
    private $cedula;
    private $edad;
    private $FechaNacimiento;
    private $correo;
    private $usuario;
    private $contraseña;
    private $tipoUsuario = "Usuario";
    private $fechaRegistro;


    private $PersonasRegistradas;


    public function __get($propiedad)
    {
        // Usamos switch-case para evaluar el valor de $propiedad
        switch ($propiedad) {
            case "nombre":
                return $this->nombre;
                break;
            case "apellido":
                return $this->apellido;
                break;
            case "cedula":
                return $this->cedula;
                break;
            case "edad":
                return $this->edad;
                break;
            case "FechaNacimiento":
                return $this->FechaNacimiento;
                break;
            case "correo":
                return $this->correo;
                break;
            case "usuario":
                return $this->usuario;
                break;
            case "contraseña":
                return $this->contraseña;
                break;
            case "tipoUsuario":
                return $this->tipoUsuario;
                break;
            case "fechaRegistro":
                return $this->fechaRegistro;
                break;
            case "PersonasRegistradas":
                return $this->PersonasRegistradas;
                break;
            default:
                return "Propiedad no encontrada";
                break;
        }
    }


    public function __construct($nombre, $apellido, $cedula, $edad, $FechaNacimiento, $fechaRegistro, $correo, $usuario, $contraseña, $tipoUsuario)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->cedula = $cedula;
        $this->edad = $edad;
        $this->FechaNacimiento = $FechaNacimiento;
        $this->correo = $correo;
        $this->usuario = $usuario;
        $this->contraseña = $contraseña;
        $this->tipoUsuario = $tipoUsuario;
        $this->fechaRegistro = $fechaRegistro;
    }

    public function Agregar()
    {
        $consulta = Conexion::getInstance()->get_database_instance()->prepare("INSERT INTO `personasregistradas`(`nombre`, `apellido`, `cedula`, `edad`, `fechaNacimiento`,`fechaRegistro`, `correo`, `usuario`, `contraseña`,`tipoUsuario`) VALUES ('$this->nombre','$this->apellido','$this->cedula','$this->edad','$this->FechaNacimiento','$this->fechaRegistro','$this->correo','$this->usuario','$this->contraseña','$this->tipoUsuario')");



        if ($consulta->execute()) {
            echo "exito";
            // echo "$this->FechaNacimiento";
        } else {
            echo "fallido";
        }
    }
    public function Index()
    {

        $consulta = Conexion::getInstance()->get_database_instance()->prepare("SELECT * FROM `personasregistradas`");
        $consulta->execute();
        $resultado = $consulta->get_result()->fetch_all();
        $this->PersonasRegistradas = $resultado;
        // var_dump($resultado);
    }
    public function Eliminar()
    {
    }
    public function Editar()
    {
    }
}
