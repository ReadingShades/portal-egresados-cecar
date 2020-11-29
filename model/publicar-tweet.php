<?php
require_once('../model/connectvars.php');

$tweetID = $_GET['codTweet'];

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$query = "SELECT * FROM `twitter` JOIN `oferta` ON twitter.ofertaID = oferta.OfertaID JOIN `usuario` ON usuario.userID = oferta.userID WHERE tIDPub = $tweetID";
$result = mysqli_query($dbc, $query) or die(mysqli_error($dbc));

$data = mysqli_fetch_array($result);

print_r($data);

mysqli_close($dbc);


?>