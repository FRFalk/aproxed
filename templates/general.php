<?php
//ini_set('display_errors', 1);
//error_reporting(E_ALL);
?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link rel="shortcut icon" href="/GA.png" />
<link rel="stylesheet" href="/stylesheet/bootstrap1.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5rFOJ6y5R+RfJuYn2M+HXKx3vLFmXY7Xa5XnHhczl7V2Crh" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-o+RDVZABeJzgA1f2JKT/CrZ6mG0M0dZz1sEJ1oA5l7dKJvqPJwo99X6FJ2RjzKt4" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyZ/X1OQlgRdC2BIBjN7jz7ls+X5p7kzoI" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-N8P8LQSVBK"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-N8P8LQSVBK');
        </script>
    </head>

    <body style="margin: 0; margin-bottom: 300px;">

        <nav class="nav navbar shadow-lg navbar-expand-lg fixed-top bg-white">
                 <a href="https://aproxed.com" class="navbar-brand col-5 col-lg-2">
                    <img src="logo.png" class="logo col-12">
                </a>
                <?php
                        
                <button class="navbar-toggler collapsed me-3 col-2 h-75" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="justify-content-end collapse navbar-collapse mx-3" id="navbarNav">
                    <ul class="navbar-nav mr-auto mt-2 m-md-5 me-lg-5 my-lg-0">
                      <li class="nav-item active my-1">
                        <a class="nav-link text-primary fs-4 fw-light" href="/">Inicio<span class="sr-only">(current)</span></a>
                      </li>
                        <li class="nav-item my-1">
                            <a class="nav-link text-primary fs-4 fw-light" href="/?p=artistas">Productos<span class="sr-only"></span></a>
                        </li>

             <li class="nav-item my-1">
                 <a class="nav-link text-primary fs-4 fw-light" href="?p=registrarse_usr&ingresar=iniciar_sesion">Vender<span class="sr-only"></span></a>
             </li>

    
                    </ul>
                  </div>
            </nav>

        <div class="pt-5"></div>
        <?php
            if($pagina == "index" || !$pagina || $pagina == "") {
                include "index.php";
            }
        ?>
        <!--
        
        Se incluye el contenido general
        
         -->
        <div style="position: absolute;" class="justify-content-center col-12 bottom-0 bg-dark">
            <div>
                <center><i class="d-flex align-self-center fa-brands fa-instagram fa-2xl mt-3" style="color: #ffffff;"></i></center>
                <p class="fw-lighter text-center fs-2 fs-md-5 text-white">@aproxed.uy</p>
            </div>
            <div>
                <center><i class="fa-regular fa-envelope fa-2xl" style="color: #ffffff;"></i></center>
                <p class="fw-lighter text-center fs-2 fs-md-5 text-white">aproxed@gmail.com</p>
            </div>
            <div>
                <center><a href="/terminos-y-condiciones/terminos-y-condiciones.html" class="fs-6 fs-md-4 text-primary">Terminos y condiciones</a></center>
                <p class="fw-lighter text-white fs-6 fs-md-5 text-center">© 2023 Aproxed. Todos los derechos reservados.</p>
            </div>
        </div>
    </body>
</html>



