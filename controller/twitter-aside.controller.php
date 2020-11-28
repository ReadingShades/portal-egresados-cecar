<?php
include_once('./model/twitter-aside.model.php');
$tweets = ['asd', 'ert'];
foreach ($tweets as $tweet) {
?>
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?='titulo-tweet';?></h5>                    
                    <p class="card-text">Tipo de oferta: <?='tipo-tweet';?></p>
                    <a href="#" class="card-link"><?='link-tweet';?></a>                    
                </div>
            </div>
        </div>
    </div>
<?php
}
?>