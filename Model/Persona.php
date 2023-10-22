<?php





class Persona{
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


public function __get($propiedad) {
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
default:
return "Propiedad no encontrada";
break;
}
}

    
    public function __construct($nombre,$apellido,$cedula,$edad,$correo,$usuario,$contraseña,$tipoUsuario)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->cedula = $cedula;
        $this->edad = $edad;
        // $this->FechaNacimiento = $FechaNacimiento;
        $this->correo = $correo;
        $this->usuario = $usuario;
        $this->contraseña = $contraseña;
        $this->tipoUsuario = $tipoUsuario;
        $this->fechaRegistro = date('Y-m-d');

    }


}