<?php

// namespace App\Model;
class Cuenta
{

    private $correo;
    private $contraseña;
    private $fechaVencimiento;
    private $precio;

    public function __construct($correo,$contraseña,$fechaVencimiento)
    {
        $this->correo = $correo;
        $this->contraseña = $contraseña;
        $this->fechaVencimiento = $fechaVencimiento;
        
        
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
            default:
                return "Propiedad no encontrada";
                break;
        }
    }
    
    
}
