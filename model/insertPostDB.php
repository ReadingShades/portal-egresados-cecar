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

/* if (isset($_POST)) {
require_once("./connectvars.php");
    // Connect to the database
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    // 
    $UserID = mysqli_escape_string($dbc,trim($_POST['usuarioID']));
    $UserName = mysqli_escape_string($dbc,trim($_POST['usuarioNombre']));
    $pubTitulo = mysqli_escape_string($dbc,trim($_POST['publicacionTitulo']));
    $pubTipo = mysqli_escape_string($dbc,trim($_POST['publicacionTipo']));
    $pubContent = mysqli_escape_string($dbc,trim($_POST['publicacionCuerpo']));
    
    $query = "INSERT INTO oferta (oID,IDAutor,Titulo,Contenido,FechaPub,FechaInicio,FechaExp,TipoOferta	uID) VALUES (\"$id\",\"$tipoid\",\"$nombre\",\"$apel\",\"$password\",\"$email\",\"$tuser\")";
    echo $query;
    $result = mysqli_query($dbc, $query);    
    mysqli_close($dbc);

    echo "Creacion de nuevo usuario exitoso.";
}else{
    echo "Error.";
} */
?>