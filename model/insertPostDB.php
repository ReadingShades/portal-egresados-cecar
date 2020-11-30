<?php include_once("../views/header-deep.view.php"); ?>

<div class="bg-info">
    <h1>Resumen de publicacion</h1>
    <table>
        <?php

        foreach ($_POST as $key => $value) {
            echo "<tr>";
            echo "<td>";
            echo $key;
            echo "</td>";
            echo "<td>";
            echo $value;
            echo "</td>";
            echo "</tr>";
        }

        ?>
    </table>
</div>
<br>
<?php
if (isset($_POST)) {
    require_once("./connectvars.php");
    // Connect to the database
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    // 
    $UserID = mysqli_escape_string($dbc, trim($_POST['user-id']));
    $pubTitulo = mysqli_escape_string($dbc, trim($_POST['publicacionTitulo']));
    $pubTipo = mysqli_escape_string($dbc, trim($_POST['publicacionTipo']));
    $pubContent = mysqli_escape_string($dbc, trim($_POST['publicacionCuerpo']));
    $pubFechapub = date("Y-m-d");
    $pubfechaInicio = mysqli_escape_string($dbc, trim($_POST['pubFechaInit']));
    $pubfechaExpire = mysqli_escape_string($dbc, trim($_POST['pubFechaExp']));

    $query = "INSERT INTO `oferta` (`ofertaID`, `userID`, `Titulo`, `Contenido`, `FechaPub`, `FechaInicio`, `FechaExp`, `TipoOferta`) 
    VALUES (NULL, '$UserID','$pubTitulo','$pubContent','$pubFechapub','$pubfechaInicio','$pubfechaExpire','$pubTipo')";

    $result = mysqli_query($dbc, $query) or die(mysqli_error($dbc));
    mysqli_close($dbc);

    if ($result == 1) {
        echo "\n Creacion de publicacion exitoso.";
    } else {
        echo $result;
    }
?>
    <br><br><br>
    <a href="../index.php">Volver al inicio</a>
<?php
} else {
    echo "No se ha proporcionado la informacion necesaria para esta accion.";
}
include_once("../views/footer-deep.view.php"); ?>