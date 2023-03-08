<?php include 'process/bdd_destination.php'; ?>

<!-- DESTINATION -->
<section class="destination">
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php foreach ($destinations as $destination) { ?>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="<?= $destination["image1"]; ?>"
                                role="img" aria-label="Placeholder: Thumbnail" 
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <rect width="100%" height="100%" fill="#55595c"></rect>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em"><?= $destination["location"]; ?></text>
                            </img>
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Commentaire</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Commenter</button>
                                    </div>
                                    <small class="text-muted"><?= $destination["price"]; ?>$</small>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>    
            </div>
        </div>
    </div>
</section>