<?php 
include 'process/bdd_destination.php';
?>

<!-- DESTINATION -->
<section id="destination">
    <div class="album py-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php foreach ($destinations as $destination) { ?>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="<?= $destination["image1"]; ?>"
                                role="img" aria-label="Placeholder: Thumbnail" 
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <rect width="100%" height="100%" fill="#55595c"></rect>
                                <text class="text-center p-1" x="50%" y="50%" fill="#eceeef" dy=".3em">
                                    <?= $destination["location"]; ?>
                                </text>
                            </img>
                            <div class="card-body text-center">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.<br />
                                    This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                            <button type="submit" class="btn btn-sm btn-outline-secondary">
                                                <a href="infoDestination.php">Détail »</a>
                                            </button>
                                    </div>
                                    <small class="text-muted">A partire de <?= $destination["price"]; ?>$</small>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>    
            </div>
        </div>
    </div>
</section>
