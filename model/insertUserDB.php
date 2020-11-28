<?php

if (isset($_POST)) {
require_once("./connectvars.php");
    // Connect to the database
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    
    // datos a insertar
    $UserID = $_POST['user-id'];
    $tipoid = $_POST['user-id-type'];
    $UserName = $_POST['username'];
    $UserApel = $_POST['user-apel'];
    $password = preg_replace('/"/i', '', $_POST['password']);
    $email = preg_replace('/"/i', '', $_POST['email']);
    $tuser = $_POST['tipouser'];

    $query = "INSERT INTO `usuario` (`Nombre`, `Apellido`, `Password`, `email`, `TipoUser`, `userID`, `userID-tipo`) VALUES ('$UserName', '$UserApel', '$password', '$email', '$tuser', '$UserID', '$tipoid')";    
    $result = mysqli_query($dbc, $query); 
    mysqli_close($dbc);

    echo "Creacion de nuevo usuario exitoso.";
}else{
    echo "Error.";
}
?>