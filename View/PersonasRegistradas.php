<?php
// require_once("./Controller/PersonaController.php");
require_once("../Controller/PersonaController.php");


$a = $enyelberth->PersonasRegistradas;

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../Estilos/RegistroPersonas.css">
    <!-- <link rel="stylesheet" href="../Estilos/barranav.css"> -->
    <script
    src="https://kit.fontawesome.com/7e5b2d153f.js"
    crossorigin="anonymous"
  ></script>
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
                    <a class="nav-link active" aria-current="page" href="./RegistroCuentas.php">REgistroCuentas</a>
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

    <div class="container">

    <h1 class="container">Personas Registradas</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id:</th>
                    <th scope="col">Nombre:</th>
                    <th scope="col">Apellido:</th>
                    <th scope="col">Cedula:</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Fecha de Nacimiento</th>
                    <th scope="col">Fecha de Registro</th>
                    <th scope="col">Correo:</th>
                    <th scope="col">Usuario:</th>
                    <th scope="col">Contraseña:</th>
                    <th scope="col">Tipo de Usuario:</th>
                    <th scope="col">Accion:</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($a as $persona) : ?>
                    <tr>
                        <th scope="row"><?= $persona["0"] ?></th>
                        <td><?= $persona["1"] ?></td>
                        <td><?= $persona["2"] ?></td>
                        <td><?= $persona["3"] ?></td>
                        <td><?= $persona["4"] ?></td>
                        <td><?= $persona["5"] ?></td>
                        <td><?= $persona["6"] ?></td>
                        <td><?= $persona["7"] ?></td>
                        <td><?= $persona["8"] ?></td>
                        <td><?= $persona["9"] ?></td>
                        <td><?= $persona["10"] ?></td>
                        <td>
                            <button class="btn btn-success">Editar</button> 
                            <button class="btn btn-danger">Eliminar</button>
                        </td>
                        
                        
                    </tr>

                <?php endforeach; ?>


            </tbody>
        </table>

    </div>



    <footer>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="../js/barranav.js"></script>
</body>

</html>