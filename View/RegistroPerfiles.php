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


            <form action="../Controller/ControllerPerfil.php" method="POST">
                <h1 class="title_register">!Registra un nuevo Pefil</h1>
                <br>
                <br>




                <label for="Codigo_cuenta">
                    <span>Selecciona la cuenta que quieres agregar el perfil:</span>
                    <br>
                    <!-- <input type="date" name="fechaVencimiento" id="fechaVencimiento"> -->
                    <select name="Codigo_cuenta" id="Codigo_cuenta" class="selecCuenta">

                        <?php foreach ($datos as $dato) : ?>
                        <option value="<?= $dato[" 0"] ?>">
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
                        placeholder="Ingresa el nombre del Cliente">
                </label>
                <br>
                <br>
                <label for="nombre_perfil">
                    <span>Ingresa el Nombre del Perfil:</span>
                    <br>
                    <input type="text" name="nombre_perfil" id="nombre_perfil"
                        placeholder="Ingresa el nombre del Perfil">
                </label>

                <br>
                <br>
                <br>
                <label for="pin">
                    <span>Ingresa el PIN del Perfil:</span>
                    <br>
                    <input type="number" name="pin" id="pin" placeholder="Ingresa el PIN del Perfil ">
                </label>
                <br>
                <br>
                <br>
                <label for="fechaVencimiento">
                    <span>Fecha de Vencimiento del perfil:</span>
                    <input type="date" name="fechaVencimiento" id="fechaVencimiento">
                </label>
                <br>
                <br>
                <br>
                <select name="PrecioCuenta" class="selecCuenta">

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
    <!-- <script>
        $('.btn').click(function() {
            $(this).toggleClass("click");
            $('.sidebar').toggleClass("show");
        });
        // $('.feat-btn').click(function () {
        //     $('nav ul .feat-show').toggleClass("show");
        //     $('nav ul .first').toggleClass("rotate");
        // });

        $('.serv-btn').click(function() {
            $('nav ul .serv-show').toggleClass("show1");
            $('nav ul .second').toggleClass("rotate");
        });
        $('.servv-btn').click(function() {
            $('nav ul .serv-show').toggleClass("show1");
            $('nav ul .second').toggleClass("rotate");
        });
        $('.editar-btn').click(function() {
            $('nav ul .editar-show').toggleClass("show");
            // $('nav ul .second').toggleClass("rotate");
        });


        // $('.editar-btn').click(function(){
        //     $('nav ul .editar-show').toggleClass("show");
        // });
        $('nav ul li').click(function() {
            $(this).addClass("active").siblings().removeClass("active");
        });

        // Obtén el elemento del menú principal
        // const menu = document.querySelector('.editar-btn');

        // // Obtén el elemento del subconjunto
        // const subconjunto = document.querySelector('.editar-show');

        // // Agrega un evento de clic al menú principal
        // menu.addEventListener('click', () => {
        //     // Muestra u oculta el subconjunto según su estado actual
        //     subconjunto.classList.toggle('show');
        // });

        // let btneditar= document.getElementById("editarr");

        // btneditar.classList("show1");
    </script> -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
    <!-- <script src="../js/barranav.js"></script> -->
    <!-- <script src="./js/barranav.js"></script> -->

</body>

</html>