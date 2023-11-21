<?php

// require_once("./Database/MySQLI/Conexion.php");
// require_once("./Model/Persona.php");
require_once("../Model/Persona.php");



$nombre = "naiyo";
$apellido = "Rodriguez";
$cedula = 30204334;
$edad = 19;
$fechaNacimiento = date("Y-m-d");   
$fechaRegs = date("Y-m-d");   
$correo= "naiyolis.z@gmail.com";
$usuario="enyelberth10";
$contraseña= "468CRed$";
$tipoUsuario = "Admin";

$enyelberth = new Persona($nombre,$apellido,$cedula,$edad,$fechaNacimiento,$fechaRegs,$correo,$usuario,$contraseña,$tipoUsuario);
$enyelberth->Index();

$a = $enyelberth->PersonasRegistradas;

// foreach($a as $persona){
//     echo $persona["3"];

// }



// $enyelberth->Agregar();


// require_once("./View/RegistroPersonas.php");

// class PersonaController{
//     private  $Conexion;
//     public  function __construct()
//     {
//         $this->Conexion = Conexion::getInstance()->get_database_instance();
//     }
//     public function Index(){

//     }
    
//     public function Agregar($persona){

//         // $conexion = Conexion::getInstance()->get_database_instance();
//         $consulta = $this->Conexion->prepare("INSERT INTO `personasregistradas`(`nombre`, `apellido`, `cedula`, `edad`, `fechaNacimiento`,`fechaRegistro`, `correo`, `usuario`, `contraseña`,`tipoUsuario`) VALUES ('$persona->nombre','$persona->apellido','$persona->cedula','$persona->edad','$persona->FechaNacimiento','$persona->fechaRegistro','$persona->correo','$persona->usuario','$persona->contraseña','$persona->tipoUsuario')");
        
      
        
//         if ($consulta->execute()) {
//             echo "exito";
//         } else {
//             echo "fallido";
//         }
        
//     }
//     public function Eliminar($id){
//         // $this->Conexion->exec("DROP TABLE incomes_test");


//         $stmt = $this->Conexion->prepare("DELETE FROM personas_user WHERE id = $id");
//         $stmt->execute();

//         // $sure = readline("¿De verdad quieres eliminar este registro? ");

//         // if ($sure == "no")
//         //     $this->Conexion->rollBack();
//         // else
//         //     $this->Conexion->commit();

//     }
// }
