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
    <link rel="stylesheet" href="../Librerias/Bootstrap/css/bootstrap.min.css">
    <!-- FALTA SOLUCIONAR ESTO NO TOMA CUANDO DESCARGAMOS LOS ICONOS 
        <link rel="stylesheet" href="../Librerias/FontAwesome/css/fontawesome_v6.4.2_css_all.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/v4-shims.js" integrity="sha512-RNv6jlbGXQqj0vGGjx6DcZ9kf/mH7BAwssf9HRxWU15LTXJClKIgpHH/PAT6vNIWGFJQWy34oP6bCpBFlrR7dA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/solid.min.js" integrity="sha512-s6yNeC6faUgveCQocceGXVia7ciAebyTH7hRNazwZa2FHhnxX22qaGeb9d3a8PUKdnoHo3T3bYI/0ZOjmgWkNg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/regular.min.js" integrity="sha512-kSAGSlODsZwG7bMv/Hydyvybjk+WOz4oEqQiWYwpCxQ7/7yXMFynr2QrvNc2myZW/7wyi0IF2TXZZWMeg8AGhw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Librerias/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../Librerias/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../Librerias/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="../Librerias/EstilosCSS/adminlte.min.css">
    <link rel="stylesheet" href="../Librerias/EstilosCSS/Estilo.css">


</head>

<body>
    <header>
        <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
                <h4 class="text-white">About</h4>
                <p class="text-muted">Add some information about the album below, the author, or any other background
                context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off
                to some social networking sites or contact information.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
                <h4 class="text-white">Contact</h4>
                <ul class="list-unstyled">
                <li><a href="#" class="text-white">Follow on Twitter</a></li>
                <li><a href="#" class="text-white">Like on Facebook</a></li>
                <li><a href="#" class="text-white">Email me</a></li>
                </ul>
            </div>
            </div>
        </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a href="#" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2"
                viewBox="0 0 24 24">
                <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
                <circle cx="12" cy="13" r="4" /></svg>
            <strong>Ejemplo NAV</strong>
            </a>
            <a href="cerrarSesion.php" class="btn btn-danger">Salir</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
            aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        </div>
    </header>
    <div class="container">
        <aside>
            menu <?php echo $_SESSION['nivel'] ?>
        </aside>
        <section>
            <?php
                
                if (isset($_GET['pagina'])) {
                    // Esta seccion va a ser para todas las funcionalidades de descargas
                    if (
                        $_GET['pagina'] == "listaDescargas" ||
                        $_GET['pagina'] == "detallesDescarga" ||
                        $_GET['pagina'] == "administrarDescargas" 
                    ) {
                        include_once "Vistas/Descargas/" . $_GET['pagina'] . ".php";
                    }
                } else {
                    // include_once "Vistas/Paginas/consulta.php";
                }
            ?>
        </section>
    </div>
  <footer class="text-muted py-5">
    <div class="container">
      <p class="float-right mb-1">
        <a href="#">Back to top</a>
      </p>
      <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
      <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a
          href="/docs/5.0/getting-started/introduction/">getting started guide</a>.</p>
    </div>
  </footer>
    <!-- jQuery -->
    <script src="../Librerias/JQuery/jquery.min.js"></script>
    <!-- Libreria de Bootstrap-->
    <script src="../Librerias/Bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="../Librerias/datatables/jquery.dataTables.min.js"></script>
    <script src="../Librerias/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../Librerias/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../Librerias/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../Librerias/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../Librerias/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../Librerias/jszip/jszip.min.js"></script>
    <script src="../Librerias/pdfmake/pdfmake.min.js"></script>
    <script src="../Librerias/pdfmake/vfs_fonts.js"></script>
    <script src="../Librerias/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../Librerias/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../Librerias/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- Scripts personalizados -->
    <script src="../Librerias/FuncionesJS/script.js"></script>
</body>

</html>
