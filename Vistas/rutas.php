<?php
session_start();

if (!isset($_SESSION['validarIngreso'])) {

    echo '<script>window.location = "login.php";</script>';
    return;
} else {
    if ($_SESSION['validarIngreso'] != "ok") {

        echo '<script>window.location = "login.php";</script>';
        return;
    }
}
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión de Descargas - Municipalidad de la Ciudad de Formosa</title>
    <link rel="shortcut icon" type="image/x-icon" style="border-radius: 50% !important" href="../Librerias/img/logoMunicipalidadFsa.png" />


    <!-- FUENTE MONTSERRAT CDN -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <!-- Recursos -->


    <link rel="stylesheet" href="../Librerias/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/v4-shims.js" integrity="sha512-RNv6jlbGXQqj0vGGjx6DcZ9kf/mH7BAwssf9HRxWU15LTXJClKIgpHH/PAT6vNIWGFJQWy34oP6bCpBFlrR7dA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/solid.min.js" integrity="sha512-s6yNeC6faUgveCQocceGXVia7ciAebyTH7hRNazwZa2FHhnxX22qaGeb9d3a8PUKdnoHo3T3bYI/0ZOjmgWkNg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/regular.min.js" integrity="sha512-kSAGSlODsZwG7bMv/Hydyvybjk+WOz4oEqQiWYwpCxQ7/7yXMFynr2QrvNc2myZW/7wyi0IF2TXZZWMeg8AGhw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Librerias/datatable/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../Librerias/datatable/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../Librerias/datatable/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="../Librerias/EstilosCSS/adminlte.min.css">
    <link rel="stylesheet" href="../Librerias/EstilosCSS/Estilo.css">
    <link rel="stylesheet" href="../Librerias/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Librerias/EstilosCSS/Rutas.css">
    <link rel="stylesheet" href="../Librerias/EstilosCSS/EstilosGenerales.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm light px-3 backgroundBlue navH">
            <!-- <div class="p-3"> -->
            <a class="navbar-brand text-white"><span class="titleSecretaria">Secretaría de Servicios Públicos</span>
                <br>
                <span class="titleGestion">Gestion de Recoleccion de Residuos</span>
            </a>
        </nav>

    </header>

<!-- INICIO NAV -->
<section class="container-fluid">
<!-- menu asadasd<?php echo $_SESSION['nivel'] ?> -->
    <div class="row" id="Ajuste">
        <div class="col-md-2 p-0">
            <nav class="navbar navbar-expand-lg p-0 navbar-dark navV" id="navV">
                <div class="container-fluid p-2">

                    <a class="navbar-brand fw-bold lh-1 mt-2 titleVMunicipalidad" style="display: none;">Municipalidad
                        Digital</a>
                    <span class="navbar-brand fs-6 lh-sm titleVGestion" style="display: none;">Gestion Ambiental</span>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                            <div class="accordion accordion-flush w-100" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button-hide-arrow collapsed" id="hide-arrow"
                                            type="button" onclick="MostrarGeneral()" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseOne" aria-expanded="false"
                                            aria-controls="flush-collapseOne" role="button">
                                            Pagina Principal
                                        </button>
                                    </h2>
                                    <!-- <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">

</div> -->
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            onclick="MostrarCamiones()" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                            aria-controls="flush-collapseTwo">
                                            Gestionar Camiones
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body p-0">
                                            <a class="nav-link fs-6 nav-link-agregar" role="button" id="#a_camion"
                                                onclick="" data-bs-toggle="modal"
                                                data-bs-target="#nuevo_camion">Ingresar Camion <i
                                                    class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            onclick="MostrarCooperativas()" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                                            aria-controls="flush-collapseThree">
                                            Gestionar Cooperativas
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body p-0">
                                            <a class="nav-link fs-6 nav-link-agregar" role="button" id="#a_cooperativa"
                                                onclick="" data-bs-toggle="modal"
                                                data-bs-target="#nueva_cooperativa">Ingresar Cooperativa <i
                                                    class="fas fa-plus"></i></a>
                                            <a class="nav-link fs-6 nav-link-formar" role="button" id="#a_grupos"
                                                onclick="">Formar Grupos <i class="fas fa-users"></i></a>
                                            <a class="nav-link fs-6 nav-link-asignar" role="button" id="#asig_zonas"
                                                onclick="">Asignar Zonas <i class="fas fa-map-marked-alt"></i></a>

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            onclick="MostrarZonas()" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseFour" aria-expanded="false"
                                            aria-controls="flush-collapseFour">
                                            Gestionar Zonas
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body p-0">
                                            <a class="nav-link fs-6 nav-link-agregar" role="button" id="#a_zona"
                                                onclick="" data-bs-toggle="modal" data-bs-target="#nueva_zona">Ingresar
                                                Zona <i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-md-9 p-2" id="Ajuste">

            <?php

            if (isset($_GET['pagina'])) {
                // Esta seccion va a ser para todas las funcionalidades de descargas
                if (
                    $_GET['pagina'] == "descargasListado" ||
                    $_GET['pagina'] == "descargasDetalle" ||
                    $_GET['pagina'] == "descargasAdministrar"
                ) {
                    include_once "Vistas/Descargas/" . $_GET['pagina'] . ".php";
                } else if (
                    $_GET['pagina'] == "cooperativaListado" ||
                    $_GET['pagina'] == "cooperativaGrupos" ||
                    $_GET['pagina'] == ""
                ) {
                    include_once "Vistas/Cooperativas/" . $_GET['pagina'] . ".php";
                } 
                else if (
                    $_GET['pagina'] == "camionesListado" ||
                    $_GET['pagina'] == ""
                ) {
                    include_once "Vistas/camiones/" . $_GET['pagina'] . ".php";
                }else {
                    include_once "Vistas/error404.php";
                }
            } else {
                include_once "Vistas/error404.php";
            }
            ?>

        </div>
    </div>
    <!-- FIN NAV -->
</section>
    <main>




    </main>
    <!-- 
    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-right mb-1">
                <a href="#">Back to top</a>
            </p>
            <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
            <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a href="/docs/5.0/getting-started/introduction/">getting started guide</a>.</p>
        </div>
    </footer> -->
    <!-- <script src="Librerias/js/Bootstrap5/bootstrap.bundle.min.js"></script> -->
    <!-- <script src="Librerias/js/Scripts/script.js"></script> -->
    <!-- jQuery -->
    <script src="../Librerias/JQuery/jquery.min.js"></script>
    <!-- Libreria de Bootstrap-->
    <script src="../Librerias/Bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="../Librerias/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="../Librerias/datatable/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../Librerias/datatable/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../Librerias/datatable/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../Librerias/datatable/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../Librerias/datatable/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../Librerias/jszip/jszip.min.js"></script>
    <script src="../Librerias/pdfmake/pdfmake.min.js"></script>
    <script src="../Librerias/pdfmake/vfs_fonts.js"></script>
    <script src="../Librerias/datatable/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../Librerias/datatable/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../Librerias/datatable/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- Scripts personalizados -->
    <script src="../Librerias/FuncionesJS/script.js"></script>
    <script src="../Librerias/FuncionesJS/RutasJS.js"></script>

</body>

</html>
