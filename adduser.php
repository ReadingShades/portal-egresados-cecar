<?php

if (isset($_POST['submit'])) {
require_once("connectvars.php");

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

    if (isset($_POST['submit'])) {
        $query = "INSERT INTO usuario (uID, uID_tipo, Nombre, Apellido, Password, email, TipoUser) 
        VALUES (
            '$id',
            '$tipoid',
            '$nombre',
            '$apel',
            '$password',
            '$email',
            '$tuser')";
        mysqli_query($dbc, $query) or die ("Error procesing query.");    
    }
    mysqli_close($dbc);
}
?>
<form enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php if (!empty($name)) echo $name; ?>" /><br />
    <label for="score">Score:</label>
    <input type="text" id="score" name="score" value="<?php if (!empty($score)) echo $score; ?>" /><br />
    <label for="screenshot">Screen shot:</label>
    <input type="file" id="screenshot" name="screenshot" />
    <hr />
    <input type="submit" value="Add" name="submit" />
  </form>