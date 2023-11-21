<?php
require_once("../Model/Cuenta.php");

$datos = Cuenta::index();

?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro de Perfiles</title>
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" /> -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.js"></script> -->
    <!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
    <link rel="stylesheet" href="../Estilos/Registrocuentas.css">
    <link rel="stylesheet" href="../Estilos/RegistroPerfil.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <script src="./js/barranav.js"></script>



</head>

<body id="body">


    <header>
        <div class="menu_bar">
            <a href="#" class="btn-menu"><i class="fa-solid fa-bars"></i>ER10</a>
            
        </div>
        <nav>
            <ul>
                <li><a href="#"><i class="fa-solid fa-house"></i>Inicio</a></li>
                <li class="submenu">
                    <a href="#"><i class="fa-solid fa-house"></i>Consulta <i class="fa-solid fa-chevron-down"></i></a>
                    <ul class="children">
                        <li><a href="#">Consulta Cuentas</a></li>
                        <li><a href="#">Consulta Perfiles</a></li>
                        <li><a href="#">Consulta Cuentas Vencidas</a></li>
                        <li><a href="#">Consulta Perfiles Vencidos</a></li>
                        <li><a href="#">Consulta Ingresos</a></li>

                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fa-solid fa-house"></i>Registro<i class="fa-solid fa-chevron-down"></i></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fa-solid fa-house"></i>Editar<i class="fa-solid fa-chevron-down"></i></a </li>
                <li class="submenu">
                    <a href="#"><i class="fa-solid fa-house"></i>Eliminar<i class="fa-solid fa-chevron-down"></i></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fa-solid fa-house"></i>Reportes<i class="fa-solid fa-chevron-down"></i></a>
                </li>
                <li><a href="#"><i class="fa-solid fa-house"></i>Salir</a></li>
            </ul>

        </nav>
    </header>



    <main>


        <div class="Container_Rcuenta">


            <form action="../Controller/ControllerPerfil.php" id="formularioPerfil" method="POST">
                <h1 class="title_register">!Registra un nuevo Pefil</h1>
                <br>
                <br>




                <label for="Codigo_cuenta">
                    <span>Selecciona la cuenta que quieres agregar el perfil:</span>
                    <br>
                    <!-- <input type="date" name="fechaVencimiento" id="fechaVencimiento"> -->
                    <select name="Codigo_cuenta" id="Codigo_cuenta" class="selecCuenta" required>

                        <?php foreach ($datos as $dato) : ?>
                        <option value="<?= $dato["0"] ?>">
                            <?= $dato["1"] ?>
                        </option>

                        <?php endforeach; ?>



                    </select>
                    <br>
                    <br>
                </label>

                <br>
                <br>



                <label for="nombre_cliente">
                    <span>Ingresa el Nombre del Cliente:</span>

                    <input type="text" name="nombre_cliente" id="nombre_cliente" width="80%"
                        placeholder="Ingresa el nombre del Cliente" required>
                </label>
                <br>
                <br>
                <label for="nombre_perfil">
                    <span>Ingresa el Nombre del Perfil:</span>
                    <br>
                    <input type="text" name="nombre_perfil" id="nombre_perfil"
                        placeholder="Ingresa el nombre del Perfil" required>
                </label>

                <br>
                <br>
                <br>
                <label for="pin">
                    <span>Ingresa el PIN del Perfil:</span>
                    <br>
                    <input type="number" name="pin" id="pin" placeholder="Ingresa el PIN del Perfil " required>
                </label>
                <br>
                <br>
                <br>
                <label for="fechaVencimiento">
                    <span>Fecha de Vencimiento del perfil:</span>
                    <input type="date" name="fechaVencimiento" id="fechaVencimiento" required>
                </label>
                <br>
                <br>
                <br>
                <select name="PrecioCuenta" class="selecCuenta" id="precio_cuenta" required>

                    <option value="1.5">1.5$</option>
                    <option value="2">2$</option>
                    <option value="2.5">2.5$</option>
                    <option value="3">3$</option>
                    <option value="3.5">3.5$</option>
                    <!-- <option value="3">HBO</option> -->

                </select>
                <br>
                <br>
                <!-- <input type="number" name="numero" id="codigo" value="<?php echo $a; ?>" require> -->


                <div class="containerBtnRegistro">
                    <button class="botonRegistro" name="botonRegistro" type="submit">Registrate</button>
                </div>


            </form>

        </div>
    </main>
    <footer>

    </footer>

    <script src="./js/Validacion.js"></script>
</body>

</html>