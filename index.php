<?php
if (isset($_REQUEST["p"])) {
    $pagina = $_REQUEST["p"];
} else {
    $pagina = ""; // or set a default value if needed
}

include "/templates/general.php";
?>
    <head>
        <link rel="stylesheet" href="/stylesheet/bootstrap1.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5rFOJ6y5R+RfJuYn2M+HXKx3vLFmXY7Xa5XnHhczl7V2Crh" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-o+RDVZABeJzgA1f2JKT/CrZ6mG0M0dZz1sEJ1oA5l7dKJvqPJwo99X6FJ2RjzKt4" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyZ/X1OQlgRdC2BIBjN7jz7ls+X5p7kzoI" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous">
    </head>
    <?php
if(empty($pagina)) {
    <body>
        <h1>
        Hello W0r1d
        </h1>
        <h2>
         H3110 W0r1d Hello
        </h2>
    </body>
        <?php
        }
?>
