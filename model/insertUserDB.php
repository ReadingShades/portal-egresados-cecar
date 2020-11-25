<?php

if (isset($_POST)) {
require_once("./connectvars.php");
    // Connect to the database
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    // 
    $id = mysqli_escape_string($dbc,trim($_POST['identificador']));
    $tipoid = mysqli_escape_string($dbc,trim($_POST['tipoidentif']));
    $nombre = mysqli_escape_string($dbc,trim($_POST['nombre']));
    $apel = mysqli_escape_string($dbc,trim($_POST['apel']));
    $password = mysqli_escape_string($dbc,trim($_POST['password']));
    $email = mysqli_escape_string($dbc,trim($_POST['email']));
    $tuser = mysqli_escape_string($dbc,trim($_POST['tipouser']));
    
    $query = "INSERT INTO usuario (uID, uID_tipo, Nombre, Apellido, Password, email, TipoUser) VALUES (\"$id\",\"$tipoid\",\"$nombre\",\"$apel\",\"$password\",\"$email\",\"$tuser\")";
    echo $query;
    $result = mysqli_query($dbc, $query);    
    mysqli_close($dbc);

    echo "Creacion de nuevo usuario exitoso.";
}else{
    echo "Error.";
}
?>