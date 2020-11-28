<?php
print_r($_POST);
?>
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
    echo "\n".$query.PHP_EOL;
    $result = mysqli_query($dbc, $query) or die(mysqli_error($dbc));
    echo $result;
    mysqli_close($dbc);

    echo "\n Creacion de publicacion exitoso.";
} else {
    echo "Error.";
}
?>