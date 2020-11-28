<?php
$main_title = "Portal de egresados";
include_once("./views/header.view.php");
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <?php include_once('./views/navbar.view.php'); ?>
            <div class="row">
                <?php include_once('./views/aside.view.php'); ?>
                <?php include_once('./views/menu-index.view.php'); ?>
            </div>
        </div>
    </div>
</div>

<?php include_once("./views/footer.view.php"); ?>