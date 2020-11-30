<?php
require_once('./model/connectvars.php');
// Connect to the database
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
// Retrieve the score data from MySQL
$query = "SELECT * FROM `oferta` JOIN `usuario` ON usuario.userID = oferta.userID HAVING `TipoOferta` = \"$tipo_consulta\" ORDER BY FechaPub DESC, FechaExp ASC LIMIT 8";
$data = mysqli_query($dbc, $query)  or die(mysqli_error($dbc));
?>

<div class="col-md-8 mx-auto my-auto">    
    <div class="row bg-inverse col-xl-12 my-auto mx-auto">
        <?php
            while($info=mysqli_fetch_array($data)){
                $oferta_type=$tipo_consulta;
                $oferta_id = $info['ofertaID'];
                $oferta_autor = $info['Nombre'] . ' ' . $info['Apellido'];
                $oferta_titulo = $info['Titulo'];
                $oferta_fecha_pub = $info['FechaPub'];
                $oferta_fecha_init = $info['FechaInicio'];
                $oferta_fecha_exp = $info['FechaExp'];
                include('./views/menu-card.view.php');
            }
        ?>
    </div>
</div>

<?php
mysqli_free_result($data);
mysqli_close($dbc);
?>