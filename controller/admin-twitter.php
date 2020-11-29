<?php
require_once('../model/connectvars.php');
// Connect to the database
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
// Retrieve the score data from MySQL
$query = "SELECT * FROM `twitter` JOIN `oferta` ON twitter.ofertaID = oferta.OfertaID JOIN `usuario` ON usuario.userID = oferta.userID ORDER BY FechaPub DESC";
$data = mysqli_query($dbc, $query)  or die(mysqli_error($dbc));

$main_title = "Administracion de twitter/post";
include_once('../views/header.view.php');
?>
<table class="table table-striped">
<thead class="thead-dark">
    <tr>
        <th scope="col">ID oferta</th>
        <th scope="col">ID autor</th>
        <th scope="col">Autor</th>
        <th scope="col">Titulo</th>
        <th scope="col">Tipo</th>
        <th scope="col">Fecha de publicacion</th>
        <th scope="col">Fecha de Inicio</th>
        <th scope="col">Fecha de Expiracion</th>
        <th scope="col">Estado de publicacion</th>
    </tr>
</thead>
<?php
echo '<tbody>';
while ($row = mysqli_fetch_array($data)) {
    // Display the score data
    echo '<td scope="row"><strong>' . $row['ofertaID'] . '</strong></td>';
    echo '<td>' . $row['userID'] . '</td>';
    echo '<td>' . $row['Nombre'] . ' ' . $row['Apellido'] . '</td>';
    echo '<td>' . $row['Titulo'] . '</td>';
    echo '<td>' . $row['TipoOferta'] . '</td>';
    echo '<td>' . $row['FechaPub'] . '</td>';
    echo '<td>' . $row['FechaInicio'] . '</td>';
    echo '<td>' . $row['FechaExp'] . '</td>';
    
    if($row['publicado'] == 0){               
        echo "<td><a href='../model/publicar-tweet.php?codTweet=$row[tIDPub]'>presione para publicar</a></td>";        
    }else{
        echo '<td>' .'Publicado'. '</td>';
    }

    echo '</tr>';
}
echo '</tbody>';
echo '</table>';
mysqli_free_result($data);
mysqli_close($dbc);
include_once('../views/footer.view.php');
