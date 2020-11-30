<?php
$main_title = "Noticias";
include_once("./views/header.view.php");
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <?php include_once('./views/navbar.view.php'); ?>
            <?php include_once('./views/local-navbar.view.php'); ?>
            <div class="row bg-info">
                <?php include_once('./views/aside.view.php'); ?>                
                <?php 
                $tipo_consulta = "noticia";
                include_once('./views/content-filler.view.php'); 
                ?>
            </div>
        </div>
    </div>
</div>

<?php include_once("./views/footer.view.php"); ?>