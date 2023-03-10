<?php 

include 'process/bdd_destination.php';

?>

<section class="infoDestination">
    <div class="container">
        <div class="containers-fluid">
            <div class="col-6">
                <div class="album py-5 bg-light">
                    <div class="container">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                            <div class="col">
                                <div class="card shadow-sm">
                                    <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="<?= $destination["image1"]; ?>"
                                        role="img" aria-label="Placeholder: Thumbnail" 
                                        preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <rect width="100%" height="100%" fill="#55595c"></rect>
                                        <text x="50%" y="50%" fill="#eceeef" dy=".3em"><?= $destination["location"]; ?></text>
                                    </img>
                                    <div class="card-body">
                                        <p class="card-text">
                                            This is a wider card with supporting text below as a natural lead-in to additional content.<br />
                                            This content is a little bit longer.
                                        </p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-outline-secondary">Voire les commentaire</button>
                                                <button type="button" class="btn btn-sm btn-outline-secondary">Faire une commentaire</button>
                                            </div>
                                            <small class="text-muted">Exclusivement à <?= $destination["price"]; ?>$</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include "partials/footer.php" ?>