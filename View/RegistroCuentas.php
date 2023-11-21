<?php

function generatorCodigo()
{
    $Nrandon = rand(1, 1000000000);


    return $Nrandon;
}
$a = generatorCodigo();
// var_dump(gene)
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="../Estilos/Registrocuentas.css">

    <script src="../js/barranav.js"></script>
</head>

<body>


    <header>
        <div class="btn">
            <span class="material-symbols-outlined" class="btnn">
                menu
            </span>
        </div>
        <nav class="sidebar">
            <div class="text">ER10</div>
            <ul>
                <li class="active"><a href="#">Inicio</a></li>
                <li>
                    <a href="#" class="feat-btn">Consultas
                        <span class="fas fa-caret-down first"></span>
                    </a>
                    <ul class="feat-show">
                        <li><a href="#">Pages</a></li>
                        <li><a href="#">Elements</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="serv-btn">Registros
                        <span class="fas fa-caret-down second"></span>
                    </a>
                    <ul class="serv-show">
                        <li><a href="./RegistroCuentas.php">Cuentas</a></li>
                        <li><a href="./RegistroPerfiles.php">Perfiles</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="servv-btn">Editar
                        <span class="fas fa-caret-down second"></span>
                    </a>
                    <ul class="serv-show">
                        <li><a href="#">App Design</a></li>
                        <li><a href="#">Web Design</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="eliminar-btn">Eliminar
                        <span class="fas fa-caret-down second"></span>
                    </a>
                    <ul class="eliminar-show">
                        <li><a href="#">App Design</a></li>
                        <li><a href="#">Web Design</a></li>
                    </ul>
                </li>
                <!-- <li><a href="#">Editar</a></li>
                <li><a href="#">Overview</a></li> -->
                <li><a href="#">Reportes</a></li>
                <li><a href="#">Salir</a></li>
            </ul>
        </nav>

    </header>
    <br>
    <br>
    <br>



    <div class="Container_Rcuenta">


        <form action="../Controller/ControllerCuentas.php" method="POST">
            <h1 class="title_register">!Registra una nueva cuenta¡</h1>


            <label for="correo">
                <span>Correo:</span>
                <br>
                <input type="email" name="correo" id="correo" placeholder="Ingresa tu Correo:" require>
            </label>
            <br>

            <label for="contraseña">
                <span>Contraseña:</span>
                <br>
                <input type="password" name="contraseña" id="contraseña" placeholder="Ingresa la Contraseña" require>
            </label>
            <br>

            <label for="fechaVencimiento">
                <span>Fecha de Vencimiento:</span>
                <input type="date" name="fechaVencimiento" id="fechaVencimiento">
            </label>
            <br>
            <select name="tipoCuentas" class="selecCuenta">

                <option value="Netflix">Netflix</option>

                <option value="Disney">Disney +</option>

                <option value="HBO">HBO</option>

            </select>

            <input type="number" name="numero" id="codigo" value="<?php echo $a; ?>" require>


            <div class="containerBtnRegistro">
                <button class="botonRegistro" name="botonRegistro" type="submit">Registrate</button>
            </div>


        </form>

    </div>

    <footer>

    </footer>
    <script>
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
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="../js/barranav.js"></script>

</body>

</html>