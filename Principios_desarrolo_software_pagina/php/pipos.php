<?php

session_start();
if (isset($_SESSION['NombreCompleto'])) {
    header("location:registro.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUZZES</title>
    <!-- Bootstrap para CSS solamente (relacion styleheet por ende es una hoja de estilos)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!--Mi Css -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/horario.css">
    <!--icons-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./Imagenes/logotipo_buzzes.png" alt="" height="100px">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li><a class="nav-link" href="#NuestroServicio">¿Deseas pedir un bus?</a></li>
                    <li><a class="nav-link" href="#Contacto">Contacto</a></li>
                    <li><a class="nav-link" href="#about">Sobre Nosotros</a></li>
                    <li><a class="nav-link" href="#Preguntas">Preguntas Frecuentes</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#" data-bs-toggle="modal"
                            data-bs-target="#usuariomodal">
                            Usuario</a></li>

                    <!--Modal usuario-->
                    <div class="modal fade" id="usuariomodal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 id="exampleModalLabel">USUARIO</h3>
                                </div>
                                <div class="modal-body">
                                    <p>¿Deseas Cerrar sesión? </p>
                                </div>
                                <div class="modal-footer">
                                    <a href="../Principios_desarrolo_software_pagina/php/registro.php"
                                        class="btn btn-secondary col-md-4">Cerrar Sesión</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--usuario final-->

                </ul>
            </div>
        </div>
    </nav>


    <!--CARRUSEL-->
    <div class="col-sm-12 ">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="./Imagenes/las3rutas.jpg" class="d-block w-100" alt="..." height="800px">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="./Imagenes/ruta1.png" class="d-block w-100" alt="..." height="800px"
                        title="Estudios sobre nanotecnología">
                </div>
                <div class="carousel-item">
                    <img src="./Imagenes/ruta2.jpg" class="d-block w-100" alt="..." height="800px">
                </div>
                <div class="carousel-item">
                    <img src="./Imagenes/ruta3.jpg" class="d-block w-100" alt="..." height="800px">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!--RIBBON-->
    <div id="ribbon" class="container-fluid">
        <div id="aprende" class="container w-50 ps-5 rounded-start rounded-end">
            <div class="row align-items-center">
                <div class="col-sm p-3">
                    <img src="./img/mujerapuntando.png" class="w-75 mx-auto d-block" alt="">
                </div>
                <div class="col-sm p-3 text-light text-center">
                    <h4 class="h2 text-shadow">EXPLORA NUESTRA PÁGINA</h4>
                </div>
            </div>
        </div>
    </div>
    <!--SEPARATOR RIBBON-->


    <!--NUESTRO SERVICIO-->
    <div id="NuestroServicio"></div>
    <section class="contenedor p-5" id="servicio">
        <h2 class="subtitulo">Nuestro Servicio</h2>
        <div class="contenedor-servicio">
            <img src="Imagenes/logotipo_buzzes.png" alt="">
            <div class="checklist-servicio">
                <div class="service">
                    <h3 class="n-service"><span class="number">1</span> Solicitud de Servicio</h3>
                    <p>Al apretar acá, se desplegara las opciones de rutas que ofrecemos, al elegir una de estas, se te
                        pedira
                        una confirmación del pedido de ruta, y cuando ingreses al bus deberas elegir el boton ingrese al
                        bus,
                        al bajarte deberas ingresar ya baje del bus</p>
                </div>

                <!--offcanva-->
                <button class="btn btn-outline-dark" id="btnservicio" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">¿Tienes
                    Curiosidad? </button>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
                    aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">¿Tenemos 3 rutas para ti? </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <p>Escoge la que te lleva a tu destino</p>
                        <div class="dropdown mt-3">
                            <button class="btn btn-secondary dropdown-toggle col-md-12" id="listica" type="button"
                                data-bs-toggle="dropdown">
                                RUTAS
                            </button>
                            <ul class="dropdown-menu col-md-12">
                                <li><a class="dropdown-item" href="sabaneta.html">Sabaneta</a></li>
                                <li><a class="dropdown-item" href="Envigado.html">Envigado</a></li>
                                <li><a class="dropdown-item" href="Envigado2.html">Envigado2</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--acaba offcanva-->

                <div class="service">
                    <h3 class="n-service"><span class="number">3</span>Paradas Importantes</h3>
                    <p>Podras conocer las rutas que ofrecemos y cual te acerca a tu destino</p>
                </div>

                <!--modal-->

                <button type="button" class="btn btn-outline-dark" id="btnservicio" data-bs-toggle="modal"
                    data-bs-target="#mimodal">
                    Dale un vistazo
                </button>
                <div class="modal fade" id="mimodal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 id="exampleModalLabel">PARADAS</h1>
                            </div>
                            <div class="modal-body">
                                <!--Galeria-->

                                <section class="galeria" id="portafolio">
                                    <div class="contenedor">
                                        <div class="contenedor-galeria">
                                            <img src="Imagenes/parada1.jpg" alt="" class="img-galeria">
                                            <img src="Imagenes/parada2.jpg" alt="" class="img-galeria">
                                            <img src="Imagenes/parada3.jpg" alt="" class="img-galeria">
                                            <img src="Imagenes/parada4.jpg" alt="" class="img-galeria">
                                            <img src="Imagenes/parada5.jpg" alt="" class="img-galeria">
                                            <img src="Imagenes/parada6.jpg" alt="" class="img-galeria">
                                            <img src="Imagenes/parada7.jpg" alt="" class="img-galeria">
                                            <img src="Imagenes/parada8.jpg" alt="" class="img-galeria">
                                            <img src="Imagenes/parada9.jpg" alt="" class="img-galeria">
                                            <img src="Imagenes/parada10.jpg" alt="" class="img-galeria">
                                        </div>
                                    </div>
                                </section>
                                <section class="imagen-light">
                                    <img src="galeria/bx-x.svg" alt="" id="x">
                                    <img src="img/Escudo_empresarial.jpg" alt="" class="agregar-imagen">
                                </section>
                                <!--Fin Galeria-->

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--horarios-->
                <div class="service">
                    <h3 class="n-service"><span class="number">2</span> Horarios</h3>
                    <p>Los horarios registrados de cada ruta se podran visualizar, en caso de que una ruta aun no este
                        en operacion
                        este se mostrara de color rojo, si si esta operando se mostrara de colo verde</p>
                </div>

                <!--Colapsar-->
                <p>
                    <button class="btn btn-outline-dark" id="btnservicio" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        ¡Comienza ahora!
                    </button>
                </p>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                        <h2>Horarios de Buses</h2>
                        <table id="bus-schedule">
                            <tr>
                                <th>Ruta</th>
                                <th>Hora de Salida</th>
                                <th>Hora de Llegada</th>
                            </tr>
                        </table>
                    </div>
                </div>
                <!--acaba el colapse-->

                <!--Calculadora-->
                <div class="service">
                    <h3 class="n-service"><span class="number">4</span> Calculadora de Pasajes</h3>
                    <p>Acá podrás calcular el valor de los pasajes que pagues diariamente, semanal</p>
                </div>
                <!--offcanva-->
                <button class="btn btn-outline-dark" id="btnservicio" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvas" aria-controls="offcanvas">Calcula aquí </button>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvas"
                    aria-labelledby="offcanvasLabel">
                    <div class="offcanvas-header">
                        <h1 class="offcanvas-title" id="offcanvasLabel">Calculadora de Pasajes</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <label for="tipo">Tipo de Pasaje:</label>
                        <select id="tipo">
                            <option value="diario">Diario</option>
                            <option value="semanal">Semanal</option>
                            <option value="mensual">Mensual</option>
                        </select><br><br>
                        <label for="cantidad">Cantidad de Pasajes:</label>
                        <input type="number" id="cantidad"><br><br>
                        <button class="btn btn-ligth" type="button" id="btnservicio"
                            onclick="calcular()">Calcular</button><br><br>
                        <p id="resultado"></p>
                    </div>
                </div>
                <!--acaba offcanva-->

                <!--acaba modal-->
            </div>
        </div>
    </section>
    <!--Ribbon 2 -->

    <!--CONTACTANOS-->
    <div id="Contacto"></div>
    <div id="games">
        <div class="container-md p-5">
            <div class="row pt-5">
                <h3 class="text-center pb-5 pt-5 h3">CONTACTANOS</h3>
            </div>
            <div class="row">


                <div class="col-sm">
                    <div class="card w-100 card-border mb-5">
                        <img src="./img/laurafoto.jpeg" class="card-img-top" alt="..." height="250px">
                        <div class="card-body">
                            <h5 class="card-title"> AAAAA </h5>
                            <p class="card-text"> aaaaa <br> 314 7333333 </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--Sobre nosotros-->
    <div id="about"></div>
    <div id="sobre">
        <div class="container-sm p-5">
            <div class="row">
                <h3 class="subtitulo"> Sobre Nosotros</h3>
            </div>

            <div class="row justify-content-center align-items-center">
                <div class="col-3 d-none d-md-block">
                    <img src="./img/muñequito.png" alt="" class="w-100">
                </div>

                <div class="col-9">
                    <!--Fila 1-->
                    <div class="row">
                        <!--Columna 1-->
                        <div class="col p-2">
                            <!--carta 1-->
                            <div class="card bg-warning text-black">
                                <div class="row g-0">
                                    <div class="col-md-6">
                                        <img src="./img/..." class="w-100" alt="...">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <h5 class="card-title">¿QUIEN SOMOS?</h5>
                                            <p class="card-text"> Nosotros</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Fin carta 1-->
                        </div>
                        <!--Columna 2-->
                        <div class="col p-2">
                            <!--carta 2-->
                            <div class="card bg-primary text-white">
                                <div class="row g-0">
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <h5 class="card-title">OBJETIVO</h5>
                                            <p class="card-text"> La pagina fue hecha con el objetivo</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="./img/...." class="w-100" alt="...">
                                    </div>
                                </div>
                            </div>
                            <!--Fin carta 2-->
                        </div>
                    </div>
                    <!--Fina fila 1-->

                    <!--Fila 2-->
                    <div class="row">
                        <!--Columna 1-->
                        <div class="col p-2">
                            <!--carta 1-->
                            <div class="card bg-success text-white">
                                <div class="row g-0">
                                    <div class="col-md-6">
                                        <img src="./img/..." class="w-100" alt="...">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <h5 class="card-title">¿POR QUÉ ELEGIRNOS?</h5>
                                            <p class="card-text"> Debido a que proporcionamos herramientas de ayuda </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Fin carta 1-->
                        </div>
                        <!--Columna 2-->
                        <div class="col p-2">
                            <!--carta 2-->
                            <div class="card bg-danger text-black">
                                <div class="row g-0">
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <h5 class="card-title">TUS METAS</h5>
                                            <p class="card-text"> Convertimos tus preocupaciones </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="./img/..." class="w-100" alt="...">
                                    </div>
                                </div>
                            </div>
                            <!--Fin carta 2-->
                        </div>
                    </div>
                    <!--Fin fila 2-->

                </div>
            </div>
        </div>
    </div>

    <!--RIBBON 2-->
    <div id="ribbon" class="container-fluid">
        <div id="aprende" class="container w-50 ps-5 rounded-start rounded-end">
            <div class="row align-items-center">
                <div class="col-sm p-3 text-light text-center">
                    <h4 class="h2 text-shadow">¿Necesitas Ayuda?</h4>
                </div>
            </div>
        </div>
    </div>
    <!--Fin RIBBON 2-->

    <!--PREGUNTAS FRECUENTES-->
    <div id="Preguntas"></div>
    <div class="preguntas">
        <div class="container-md p-5">
            <div class="contenedor-preguntas">
                <h3 class="text-white">Preguntas Frecuentes</h3>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                ¿Como comienzo el simulacros?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">En nuestra sección del navegador ¿Qué ofrecemos? (aprieta click)
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                ¿Donde se encuentran las funciones que promete la página?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">hay .
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                ¿Como volver a la página de inicio?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Una vez estando en ejercicios deberas apretar el logo de nuestra
                                página para volver al inicio,
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!--FOOTER-->
    <footer id="contacto">
        <div class="contenedor-footer-contenedor">
            <div class="contact-us">
                <h2 class="brand">BUZZES</h2>
                <p>En caso de necesitar a la empresa, siempre estamos contigo</p>
            </div>
            <div class="social-media">
                <a href="https://instagram.com/buzzez_?igshid=YmMyMTA2M2Y=" class="social-media-icon">
                    <i class='bx bxl-instagram'></i>
                </a>
                <a href="https://chat.whatsapp.com/FLU2U7qvERDI2veVAiy8ee" class="social-media-icon">
                    <i class='bx bxl-whatsapp'></i>
                </a>
            </div>
        </div>
        <div class="line"></div>
    </footer>


    <script src="js/lightbox.js"></script>
    <script src="js/calculadora.js"></script>
    <script src="js/horario.js"></script>
    <!-- El JS de bootstrap: JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>

</body>

</html>