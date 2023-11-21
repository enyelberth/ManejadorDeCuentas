<?php
require("./Controller/PersonaController.php");

// function Validar($name, $apellido, $cedula, $edad, $correo, $nombreUsuario, $Rusuario, $contraseña, $Rcontraseña, $tipoUsuario)
// {
//     return !empty($name) && !empty($apellido) && !empty($cedula) && !empty($edad) && !empty($correo) && !empty($nombreUsuario) && !empty($Rusuario) && !empty($contraseña) && !empty($Rcontraseña) && !empty($tipoUsuario);
// }

// $status = "";

// if (isset($_POST["botonRegistro"])) {
//     if (Validar($name, $apellido, $cedula, $edad, $correo, $nombreUsuario, $Rusuario, $contraseña, $Rcontraseña, $tipoUsuario)) {
//         $nombre = $_POST["nombre"];
//         $apellido = $_POST["apellido"];
//         $cedula = $_POST["cedula"];
//         $edad = $_POST["edad"];
//         $correo = $_POST["correo"];
//         $usuario = $_POST["NombreUsuario"];
//         $Rusuario = $_POST["Rusuario"];
//         $contraseña = $_POST["contraseña"];
//         $Rcontraseña = $_POST["Rcontraseña"];
//         $tipoUsuario = $_POST["TipoUser"];
        
//         // $persona = new Persona($nombre,$apellido,$cedula,$edad,$correo,$usuario,$contraseña,$tipoUsuario);
//         // $per = new PersonaController();
//         $per->Agregar($persona);
//         // $FechaNacimiento = $_POST["Rcontraseña"];
//         // $fechaRegs = $_POST[""];
//         $status = "success";
//     }else{
//         $status = "danger";
//     }
// }

//

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../Estilos/RegistroPersonas.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                <a class="navbar-brand" href="#">ER10</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./RegistroCuentas.php">RegistroCuentas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./PersonasRegistradas.php">Personas REgistrada</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./CuentasRegistradas.php">Cuentas Registradas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                    </ul>
                </div>
                </div>
            </nav>




    </header>

    <?php if($status = "success"):?>

    
        <div class="alert danger">
        <span>No se pudo registrar</span>
    </div>
    <?php endif;?>

    <?php if($status = "danger"):?>

        <div class="alert success">
        <span>Persona registrada correptamente</span>
    </div>
    <?php endif;?>




    <div class="container Container_registro">
        <h1 class="title_register">Registrate</h1>

        <br>
        <form action="./RegistroPersonas.php" method="POST" class="row g-3 needs-validation" novalidate>
            <div class="mb-3">
                <label for="validationCustom01" class="form-label">Nombre:</label>
                <input type="text" class="form-control" name="nombre" id="exampleFormControlInput1" placeholder="Ingrese su Nombre" require>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Apellido:</label>
                <input type="text" class="form-control" name="apellido" id="exampleFormControlInput1" placeholder="Ingrese su Apellido" require>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Cedula:</label>
                <input type="number" class="form-control" name="cedula" id="exampleFormControlInput1" placeholder="Ingrese su Cedula" require>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Edad:</label>
                <input type="email" class="form-control" name="edad" id="exampleFormControlInput1" placeholder="Ingrese su Edad" require>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Correo:</label>
                <input type="email" class="form-control" name="correo" id="exampleFormControlInput1" placeholder="Ingresa tu Correo:" require>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nombre de Usuario:</label>
                <input type="email" class="form-control" name="NombreUsuario" id="exampleFormControlInput1" placeholder="Ingrese el nombre de Usuario" require>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Repita el Usuario:</label>
                <input type="email" class="form-control" name="Rusuario" id="exampleFormControlInput1" placeholder="Ingrese el nombre de Usuario" require>
            </div>
            <div class="mb-3">
            <label for="inputPassword5" class="form-label">Contraseña:</label>
                <input type="password" name="contraseña" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" require>
                <div id="passwordHelpBlock" class="form-text">
                    Tu contraseña tiene que ser de 7 a 8 caracteres
                </div>
            </div>


            <div class="mb-3">
                <label for="inputPassword5" class="form-label">Repita la Contraseña:</label>
                <input type="password" name="Rcontraseña" id="inputPassword54" class="form-control" aria-describedby="passwordHelpBlock" require>
                <div id="passwordHelpBlock" class="form-text">
                    Tu contraseña tiene que ser de 7 a 8 caracteres
                </div>
            </div>
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Tipo de Usuario</label>
                <select class="form-select" name="TipoUser" id="inputGroupSelect01" require>
                    <option selected>Seleccione una opcion</option>
                    <option value="Usuario">Usuario</option>
                    <option value="Administrador">Admin</option>
                </select>
            </div>

            <div class="col-12 container">
                <button class="btn btn-primary" name="botonRegistro" type="submit">Registrate</button>
            </div>
            <br>
            <br>
            <br>

        </form>

    </div>

    <footer>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="../js/barranav.js"></script>
  
</body>

</html>