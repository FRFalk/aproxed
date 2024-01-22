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
