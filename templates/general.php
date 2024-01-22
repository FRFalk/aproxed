<?php
//ini_set('display_errors', 1);
//error_reporting(E_ALL);

if ($pagina == "obras") {
    $title = "Obras - ";
}
else if ($pagina == "obra") {
    $title = "Obra - ";
}
else if ($pagina == "artista") {
    $title = "Artista - ";
}
else if ($pagina == "artistas") {
    $title = "Artistas";
}
else if ($pagina == "contacto") {
    $title = "Contacto - Me interesa";
}
else if ($pagina == "todas_las_obras") {
    $title = "Todas las obras - ";
}
else if ($pagina == "registrarse_usr"){
    $title = "Registrarse / Iniciar sesión";
}
else if ($pagina == "registrarse_artista"){
    $title = "Registrarse / Iniciar sesión";
}
else if ($pagina == "crear_perfil"){
    $title = "Crear perfil de artista";
}
else if ($pagina == "subir_obra"){
    $title = "Subir obra";
}
else {
    $title = "Inicio";
}

$usrArtist = "data:image/png;base64,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"
?>
<html style="min-height: 100%; position: relative;">
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

        <nav <?php if ($pagina == 'registrarse_artistas' || $pagina == 'registrarse_artista' || $pagina == 'registrarse_usr' || $pagina == 'pp') { echo "style='display: none'"; } ?>class="z-40 nav navbar shadow-lg navbar-expand-lg fixed-top bg-white mt-0">
        <?php if((!$_SESSION['artist_logued'] || $_SESSION['artist_logued'] == 0) && (!$_SESSION['usr_logued'] || $_SESSION['usr_logued'] == 0)) {
                    ?>
                <div class="col-12 bg-dark position-fixed top-0 z-50">
                    <table class="col-12 my-1">
                        <tr>
                            <th><a class="text-light ms-2 text-start fw-light dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ingresar (Usuarios)</a> 
                          <div class="dropdown-menu dropdown-menu-start bg-dark border-1 border-light">
                            <a href="?p=registrarse_usr&ingresar=registrarse" class="text-light ms-2 text-start fw-light dropdown-item">
                            Registrarse
                            </a> 
                            <a href="?p=registrarse_usr&ingresar=iniciar_sesion" class="text-light ms-2 text-start fw-light dropdown-item">
                            Iniciar sesión
                            </a>
                            </th>
                            <th class="text-end"><a class="text-light me-2 text-start fw-light dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ingresar (Artistas)</a> 
                          <div class="dropdown-menu dropdown-menu-start bg-dark border-1 border-light">
                            <a href="?p=registrarse_artista&ingresar=registrarse" class="text-light ms-2 text-start fw-light dropdown-item">
                            Registrarse
                            </a> 
                            <a href="?p=registrarse_artista&ingresar=iniciar_sesion" class="text-light ms-2 text-start fw-light dropdown-item">
                            Iniciar sesión
                            </a></th>
                        </tr>
                    </table>
                </div>
                    <?php
                }
                ?>
                 <a href="https://navegarte.com.ar" class="navbar-brand col-5 col-lg-2 me-0 <?php if((!$_SESSION['artist_logued'] || $_SESSION['artist_logued'] == 0) && (!$_SESSION['usr_logued'] || $_SESSION['usr_logued'] == 0)) { echo 'mt-4'; }?>">
                    <img src="Navegarte.png" class="logo col-12">
                </a>
                <?php
                    //echo $_SESSION['usr_logued'];
                    //var_dump($_SESSION['artist_logued']);
                    //var_dump  ($_SESSION["usr_logued"]);
                    if($_SESSION['artist_logued'] > 0) {
                        ?>
                        <a href="?p=subir_obra" class="me-2">
                            <i class="fa-solid fa-image fa-2xl" style="color: #000000;"></i>
                            <i class="fa-solid fa-plus fa-lg" style="color: #000000;"></i>
                        </a>
                        <a class="ps-3 border-start border-1 border-black" href="?p=artista&id_artista=<?php echo $_SESSION['artist_logued']; ?>">
                            <i class="fa-solid fa-user-pen fa-2xl" style="color: #000000;"></i>
                        </a>
                        <?php
                    } elseif($_SESSION['usr_logued'] > 0) {
                        ?>
                        <div class="dropdown">
                          <button class="btn btn-light dropdown-toggle bg-white"
                                  type="button" id="dropdownMenu1" data-toggle="dropdown"
                                  aria-haspopup="true" aria-expanded="false">
                                <i class="fa-solid fa-user fa-xl"></i>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <form method="post"  enctype="multipart/form-data">
                                    <input type="submit" value="Cerrar sesión" name="submitLogOutUsr" class="btn btn-light bg-white text-primary fs-4 border-white" href="#"><span class="sr-only"></span></input>
                                </form>
                          </div>
                        </div>
                    <?php
                        if(isset($_POST['submitLogOutUsr'])) {
                            $_SESSION['usr_logued'] = 0;
                            echo "<head><meta http-equiv='refresh' content='0;url=/'></head>";
                            die();
                        }
                    } 
                    ?>
                        
                <button class="navbar-toggler collapsed me-3 col-2 h-75 <?php if((!$_SESSION['artist_logued'] || $_SESSION['artist_logued'] == 0) && (!$_SESSION['usr_logued'] || $_SESSION['usr_logued'] == 0)) { echo 'mt-4 mt-lg-0'; }?>" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="justify-content-end collapse navbar-collapse mx-3 <?php if((!$_SESSION['artist_logued'] || $_SESSION['artist_logued'] == 0) && (!$_SESSION['usr_logued'] || $_SESSION['usr_logued'] == 0)) { echo 'mt-lg-4'; }?>" id="navbarNav">
                    <ul class="navbar-nav mr-auto mt-2 m-md-5 me-lg-5 my-lg-0">
                      <li class="nav-item active my-1">
                        <a class="nav-link text-primary fs-4 fw-light" href="/">Inicio<span class="sr-only">(current)</span></a>
                      </li>
                        <li class="nav-item h-100 my-1">
                            <div class="btn-group dropright">
                              <a type="button" class="btn btn-light bg-white dropdown-toggle col-5 text-primary fs-4 fw-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Obras
                              </a>
                              <div class="dropdown-menu" x-placement="right-start" style="position: absolute; transform: translate3d(111px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                                <a class="dropdown-item text-primary fs-4" href="/?p=obras">Todas las obras</a>
                                <a class="dropdown-item text-primary fs-4" href="/?p=obras&cat_obra=abstracto">Abstractos</a>
                                <a class="dropdown-item text-primary fs-4" href="/?p=obras&cat_obra=paisaje">Paisajes</a>
                                <a class="dropdown-item text-primary fs-4" href="/?p=obras&cat_obra=marina">Marina</a>
                                <a class="dropdown-item text-primary fs-4" href="/?p=obras&cat_obra=naturaleza">Naturaleza</a>
                                <a class="dropdown-item text-primary fs-4" href="/?p=obras&cat_obra=nat_muerta">Naturaleza Muerta</a>
                                <a class="dropdown-item text-primary fs-4" href="/?p=obras&cat_obra=fig_humana">Figura humana</a>
                                <a class="dropdown-item text-primary fs-4" href="/?p=obras&cat_obra=collage">Collages</a>
                                <a class="dropdown-item text-primary fs-4" href="/?p=obras&cat_obra=escultura">Esculturas</a>
                              </div>
                            </div>
                        </li>
                        <li class="nav-item my-1">
                            <a class="nav-link text-primary fs-4 fw-light" href="/?p=artistas">Artistas<span class="sr-only"></span></a>
                        </li>
<?php
if($_SESSION['artist_logued'] > 0) {
?>
    <li class="nav-item my-1">
        <form method="post"  enctype="multipart/form-data">
            <input type="submit" value="Cerrar sesión" name="submitLogOutArtist" class="btn btn-light bg-white text-primary fs-4 border-white fw-light" href="#"><i class="fa-solid fa-right-from-bracket fa-lg" style="color: #fa8072;"></i><span class="sr-only"></span></input>
        </form>
    </li>
<?php
    if(isset($_POST['submitLogOutArtist'])) {
        $_SESSION['artist_logued'] = 0;
        $_SESSION['usr_logued'] = 0;
        echo "<head><meta http-equiv='refresh' content='0;url=/'></head>";
        die();
    }
    } elseif(!$_SESSION['artist_logued'] || $_SESSION['artist_logued'] == 0) {
?>
             <li class="nav-item my-1">
                 <a class="nav-link text-primary fs-4 fw-light" href="?p=registrarse_usr&ingresar=iniciar_sesion">Ingresar<span class="sr-only"></span></a>
             </li>
<?php
             }
?>
    
                    </ul>
                  </div>
            </nav>

        <div class="pt-5"></div>
        <?php
            if($pagina == "index") {
                include "index.php";
            }
            elseif($pagina == "obra") {
                include "obra.php";
            }
            elseif($pagina == "artista") {
                include "artista.php";
            }
            elseif($pagina == "todas_las_obras") {
                include "todas_las_obras.php";
            }
            elseif($pagina == "contacto") {
                include "contacto.php";
            }
            elseif($pagina == "artistas") {
                include "artistas.php";
            }
            elseif($pagina == "obras") {
                include "obras.php";
            }
            elseif($pagina == "registrarse_artista") {
                include "registrarse_artista.php";
            }
            elseif($pagina == "crear_perfil") {
                include "crear_perfil.php";
            }
            elseif($pagina == "subir_obra") {
                include "subir_obra.php";
            }
            elseif($pagina == "registrarse_artistas") {
                include "registrarse_artistas.php";
            }
            elseif($pagina == "validar") {
                include "validar.php";
            }
            elseif($pagina == "registrarse_usr") {
                include "registrarse_usr.php";
            }
            elseif($pagina == "pp") {
                    include "PP.php";
                }
        ?>
        <!--
        
        Se incluye el contenido general
        
         -->
        <div style="position: absolute; <?php if ($pagina == 'artistas' || $pagina == 'registrarse_artista' || $pagina == 'registrarse_usr' || $pagina == 'registrarse_artistas' || $pagina == 'pp' || $pagina == 'contacto') { echo 'display: none'; } ?>" class="justify-content-center col-12 bottom-0 bg-dark">
            <div>
                <center><i class="d-flex align-self-center fa-brands fa-instagram fa-2xl mt-3" style="color: #ffffff;"></i></center>
                <p class="fw-lighter text-center fs-2 fs-md-5 text-white">@navegarte__</p>
            </div>
            <div>
                <center><i class="fa-regular fa-envelope fa-2xl" style="color: #ffffff;"></i></center>
                <p class="fw-lighter text-center fs-2 fs-md-5 text-white">navegarte.com.ar@gmail.com</p>
            </div>
            <div>
                <center><a href="/terminos-y-condiciones/terminos-y-condiciones.html" class="fs-6 fs-md-4 text-primary">Terminos y condiciones</a></center>
                <p class="fw-lighter text-white fs-6 fs-md-5 text-center">© 2023 Navegarte. Todos los derechos reservados.</p>
            </div>
        </div>
    </body>
</html>



