<?php
// Le fichier header.php est inclus sur la page
require_once(__DIR__.'/partials/header.php');

$movies = ['johnwick', 'mechanic', 'narcos', 'tropic-thunder', 'xmen'];
$categories = ['Action', 'Horreur', 'Aventure', 'Série'];

?>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Webflix</h1>
    </div>

    <div class="py-5 bg-light">
        <div class="container">
            <?php foreach ($categories as $category) { ?>
                <h2 class="display-4"><?= $category; ?></h2>
                <div class="row">
                    <?php foreach (range(1, 4) as $movie) { ?>
                        <div class="col-md-3">
                            <div class="card mb-4 shadow-sm">
                                <a href="movie_single.php"><img class="card-img-top" src="assets/img/<?= $movies[rand(0, count($movies)-1)]; ?>.jpg" alt="X-Men"></a>
                                <div class="card-body">
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="movie_single.php" class="btn btn-sm btn-outline-secondary">Voir</a>
                                        <small class="text-muted">1h32mins</small>
                                    </div>
                                    <div class="btn-group mt-4">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Modifier</button>
                                        <button type="button" class="btn btn-sm btn-outline-danger">Supprimer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>

<?php
// Le fichier footer.php est inclus sur la page
require_once(__DIR__.'/partials/footer.php'); ?>
