<?php

if (isset($_POST)) {
require_once("./connectvars.php");
    // Connect to the database
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    // 
    $id = mysqli_escape_string($dbc,trim($_POST['user-id']));
    $tipoid = mysqli_escape_string($dbc,trim($_POST['user-id-type']));
    $nombre = mysqli_escape_string($dbc,trim($_POST['username']));
    $apel = mysqli_escape_string($dbc,trim($_POST['user-apel']));
    $password = mysqli_escape_string($dbc,trim($_POST['password']));
    $email = mysqli_escape_string($dbc,trim($_POST['email']));
    $tuser = mysqli_escape_string($dbc,trim($_POST['tipouser']));
    
    $query = "INSERT INTO usuario (userID, userID-tipo, Nombre, Apellido, Password, email, TipoUser) VALUES (\"$id\",\"$tipoid\",\"$nombre\",\"$apel\",\"$password\",\"$email\",\"$tuser\")";
    echo $query;
    $result = mysqli_query($dbc, $query);    
    mysqli_close($dbc);

    echo "Creacion de nuevo usuario exitoso.";
}else{
    echo "Error.";
}
?>