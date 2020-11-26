<?php
include_once("../model/connectvars.php");
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    // 
    $id = mysqli_escape_string($dbc,trim($_POST['user-id']));
    $tipoid = mysqli_escape_string($dbc,trim($_POST['user-id-type']));
    $nombre = mysqli_escape_string($dbc,trim($_POST['username']));
    $apel = mysqli_escape_string($dbc,trim($_POST['user-apel']));
    $password = mysqli_escape_string($dbc,trim($_POST['password']));
    $email = mysqli_escape_string($dbc,trim($_POST['email']));
    $tuser = mysqli_escape_string($dbc,trim($_POST['tipouser']));
    mysqli_close($dbc);    
?>
<form enctype="multipart/form-data" method="post" action="../model/insertUserDB.php">
    <h3>¿esta seguro que desea guardar esta informacion?</h3>
    <br>
    <p>Id:<?=$id;?></p>
    <p>Tipo (ID):<?=$tipoid;?></p>
    <p>Nombre:<?=$nombre;?></p>
    <p>Apellido:<?=$apel;?></p>
    <p>Contraseña:<?=$password;?></p>
    <p>correo institucional:<?=$email;?></p>
    <p>tipo de usuario:<?=$tuser;?></p>
    <input type="hidden" name="user-id" value="<?=$id;?>">   
    <input type="hidden" name="user-id-type" value="<?=$tipoid;?>">
    <input type="hidden" name="username" value="<?=$nombre;?>">
    <input type="hidden" name="user-apel" value="<?=$apel;?>">
    <input type="hidden" name="password" value=<?=$password;?>">
    <input type="hidden" name="email" value=<?=$email;?>">
    <input type="hidden" name="tipouser" value="<?=$tuser;?>">
    <input type="submit" value="Guardar">
</form>