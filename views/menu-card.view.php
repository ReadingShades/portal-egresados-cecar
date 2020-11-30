<?php
switch ($oferta_type) {
    case 'trabajo':
        $result = "portal-empleo.svg";
        break;
    case 'investigacion':
        $result = "Posgrado.svg";
        break;
    case 'noticia':
        $result = "Noticias.png";
        break;
}
?>
<div class="col-md-3">
    <div class="card bg-info text-gray-dark">
        <div class="card-header">
            <p><?=$oferta_autor;?></p>
        </div>
        <div class="card-body">
            <p class="card-text">
                <img src="./rsc/img/<?= $result; ?>">
            </p>
            <p class="text-center"><?=$oferta_titulo;?></p>
            <p class="text-center"><a href="./views/info-gen.php?id=<?=$oferta_id;?>">Mas informacion</a></p>
        </div>
        <div class="card-footer">
            <p>Fecha de Publicacion:<?=$oferta_fecha_pub;?></p>
            <p>Fecha de Inicio:<?=$oferta_fecha_init;?></p>
            <p>Fecha de Expiracion:<?=$oferta_fecha_exp;?></p>
        </div>
    </div>
</div>