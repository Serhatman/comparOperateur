<?php include 'process/bdd_tourOperator.php'; ?>


<!-- COMPAR OPERATOR -->
<div id="comparOperator" class="container">
    <div class="container-fluid text-center mt-5 bg-light p-4">
        <div class="row">
            <?php foreach ($tour_operators as $tour_operator) { ?>
                <div class="col-lg-4">
                    <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="<?= $tour_operator["logo"]; ?>"
                        role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
                    </img>
                    <h2 class="fw-normal m-1"><?= $tour_operator["name"]; ?></h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam beatae ipsum maiores provident, suscipit deleniti dolor corrupti molestias fuga laboriosam assumenda molestiae quod dignissimos voluptatem? Quos maiores necessitatibus corrupti. Ab voluptates ipsa at facere veritatis consequatur et alias reprehenderit repudiandae perferendis animi, esse aliquid deserunt quo labore porro debitis voluptate.</p>
                    <p><a class="btn btn-secondary" target="_blank" href="<?= $tour_operator["link"]; ?>">Détails »</a></p>
                </div><!-- /.col-lg-4 -->
            <?php } ?>
        </div>
    </div>
</div>