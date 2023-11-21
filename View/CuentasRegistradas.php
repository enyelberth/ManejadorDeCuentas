<?php
// require_once("./Controller/PersonaController.php");
require_once("../Controller/ControllerCuentas.php");


// $cuenta->index();

$a = verCuentas();
// $a = $cuenta;

// var_dump($a)
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cuentas Registradas</title>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="../Estilos/RegistroPersonas.css">
  <link rel="stylesheet" href="../Estilos/barranav.css">
  <link rel="stylesheet" href="../Estilos/CuentasRegistradas.css">
  <script src="https://kit.fontawesome.com/7e5b2d153f.js" crossorigin="anonymous"></script>
</head>

<body>
  <header>
    <nav class="Logo">
      <div class="marca_logo">
        <span>ER10</span>
      </div>
    </nav>
    <nav class="Funciones">
      <ul class="ContainerLista">
        <li><a href="#">Consultas</a></li>
        <li><a href="#">Tranferencias</a></li>
        <li><a href="#">Pagos</a></li>
        <li><a href="#">Solicitudes</a></li>
        <li><a href="#">Servicios</a></li>
        <li><a href="#">Divisas</a></li>
        <li><a href="#">Salir</a></li>
      </ul>

    </nav>




  </header>
  <section class="barra_lateral">

  </section>
  <br>
  <div id="Registros">

    <h1 class="title-Consulta">Consulta tus Cuentas</h1>
    <table id="TablaCuentas">
      <thead>
        <tr class="titleTabla">
          <th scope="col">id:</th>
          <th scope="col">Correo:</th>
          <th scope="col">Contraseña:</th>
          <th scope="col">Fecha de Vencimiento:</th>

        </tr>
      </thead>
      <tbody>
        <?php foreach ($a as $persona) : ?>
          <tr id="ListaPErsona">
            <th scope="row"><?= $persona["0"] ?></th>
            <td><?= $persona["1"] ?></td>
            <td><?= $persona["2"] ?></td>
            <td><?= $persona["3"] ?></td>

            <td>
              <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Editar</button>

              <button class="btn btn-danger" id="Eliminar" name="Eliminar">Eliminar</button>
            </td>


          </tr>

        <?php endforeach; ?>


      </tbody>
    </table>

  </div>

  <div class="">

  </div>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="../js/barranav.js"></script>
</body>

</html>