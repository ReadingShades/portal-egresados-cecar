
<?php 
$main_title = "Portal de egresados";
include_once("./views/header.view.php"); 
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <?php include_once('./views/navbar.view.php');?>
            <div class="row">
                <div class="col-md-12">
                    <div class="media">
                        <img class="mr-3" alt="Bootstrap Media Preview" src="https://www.layoutit.com/img/sports-q-c-64-64-8.jpg">
                        <div class="media-body">
                            <h5 class="mt-0">
                                Nested media heading
                            </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                            <div class="media mt-3">
                                <a class="pr-3" href="#"><img alt="Bootstrap Media Another Preview" src="https://www.layoutit.com/img/sports-q-c-64-64-2.jpg"></a>
                                <div class="media-body">
                                    <h5 class="mt-0">
                                        Nested media heading
                                    </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <h5 class="card-header">
                                    Card title
                                </h5>
                                <div class="card-body">
                                    <p class="card-text">
                                        Card content
                                    </p>
                                </div>
                                <div class="card-footer">
                                    Card footer
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <h5 class="card-header">
                                    Card title
                                </h5>
                                <div class="card-body">
                                    <p class="card-text">
                                        Card content
                                    </p>
                                </div>
                                <div class="card-footer">
                                    Card footer
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <h5 class="card-header">
                                    Card title
                                </h5>
                                <div class="card-body">
                                    <p class="card-text">
                                        Card content
                                    </p>
                                </div>
                                <div class="card-footer">
                                    Card footer
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once("./views/footer.view.php"); ?>