<?php
// ------------------------
require_once('../model/connectvars.php');
// Connect to the database
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
// Retrieve the score data from MySQL
$data_id = $_GET['id'];
$query = "SELECT * FROM (SELECT * FROM `oferta` WHERE `ofertaID` = \"$data_id\") AS `informacion` JOIN `usuario` ON usuario.userID = informacion.userID";
$data = mysqli_query($dbc, $query)  or die(mysqli_error($dbc));
// -----------------------
if ($info = mysqli_fetch_array($data)) {
    $oferta_type = $info['TipoOferta'];
    $oferta_id = $info['ofertaID'];
    $oferta_autor = $info['Nombre'] . ' ' . $info['Apellido'];
    $oferta_content = $info['Contenido'];
    $oferta_titulo = $info['Titulo'];
    $oferta_fecha_pub = $info['FechaPub'];
    $oferta_fecha_init = $info['FechaInicio'];
    $oferta_fecha_exp = $info['FechaExp'];
}

// -----------------------
$main_title = $oferta_titulo;
include_once("../views/header-deep.view.php");
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <?php include_once('../views/navbar.view.php'); ?>
            <?php include_once('../views/local-navbar-deep.view.php'); ?>
            <div class="row bg-info">
                <div class="col-md-12 mx-auto">
                    <h1 class="text-center"><?= $oferta_titulo; ?></h1>
                    <br>
                    <h3 class="text-center"><?= $oferta_autor; ?></h3>
                    <hr class="text-center">
                    <div class="col-md-3 mx-auto my-auto">
                    <?= $oferta_content; ?>
                    </div>
                    <hr>
                    <br>
                    <h4 class="text-center">Fechas importantes:</h4>
                    <br>
                    <ul class="text-center">
                        <li>Fecha de Publicacion:<?= $oferta_fecha_pub; ?></li>
                        <li>Fecha de Inicio:<?= $oferta_fecha_init; ?></li>
                        <li>Fecha de Expiracion:<?= $oferta_fecha_exp; ?></li>
                    </ul>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
mysqli_free_result($data);
mysqli_close($dbc);
include_once("../views/footer-deep.view.php");
?>