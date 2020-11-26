<?php

if (isset($_POST)) {
require_once("./connectvars.php");
    // Connect to the database
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    
    // datos a insertar
    $id = $_POST['user-id'];
    $tipoid = $_POST['user-id-type'];
    $nombre = $_POST['username'];
    $apel = $_POST['user-apel'];
    $password = preg_replace('/"/i', '', $_POST['password']);
    $email = preg_replace('/"/i', '', $_POST['email']);
    $tuser = $_POST['tipouser'];

    $query = "INSERT INTO `usuario` (`Nombre`, `Apellido`, `Password`, `email`, `TipoUser`, `userID`, `userID-tipo`) VALUES ('$nombre', '$apel', '$password', '$email', '$tuser', '$id', '$tipoid')";    
    $result = mysqli_query($dbc, $query);    
    mysqli_close($dbc);

    echo "Creacion de nuevo usuario exitoso.";
}else{
    echo "Error.";
}
?>