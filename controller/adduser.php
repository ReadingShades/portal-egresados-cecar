<?php
include_once("./connectvars.php");
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    // 
    $id = mysqli_escape_string($dbc,trim($_POST['user-id']));
    $tipoid = mysqli_escape_string($dbc,trim($_POST['user-id-type']));
    $nombre = mysqli_escape_string($dbc,trim($_POST['nombre']));
    $apel = mysqli_escape_string($dbc,trim($_POST['apel']));
    $password = mysqli_escape_string($dbc,trim($_POST['password']));
    $email = mysqli_escape_string($dbc,trim($_POST['email']));
    $tuser = mysqli_escape_string($dbc,trim($_POST['tipouser']));
    mysqli_close($dbc);
?>
<form enctype="multipart/form-data" method="post" action="insertUserDB.php">
    <h3>¿esta seguro que desea guardar esta informacion?</h3>
    <br>
    <p>Id:<?=$id;?></p>
    <p>Tipo (ID):<?=$tipoid;?></p>
    <p>Nombre:<?=$nombre;?></p>
    <p>Apellido:<?=$apel;?></p>
    <p>Contraseña:<?=$password;?></p>
    <p>correo institucional:<?=$email;?></p>
    <p>tipo de usuario:<?=$tuser;?></p>
    <input type="hidden" name="identificador" value="<?=$id;?>">   
    <input type="hidden" name="tipoidentif" value="<?=$tipoid;?>">
    <input type="hidden" name="nombre" value="<?=$nombre;?>">
    <input type="hidden" name="apel" value="<?=$apel;?>">
    <input type="hidden" name="password" value=<?=$password;?>">
    <input type="hidden" name="email" value=<?=$email;?>">
    <input type="hidden" name="tipouser" value="<?=$tuser;?>">
    <input type="submit" value="Guardar">
</form>