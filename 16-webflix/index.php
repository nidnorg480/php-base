<?php
// We need a amazing movie helper
require_once(__DIR__.'/functions/movie.php');

// Le fichier header.php est inclus sur la page
require_once(__DIR__.'/partials/header.php');

$categories = getCategories();

?>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Webflix</h1>
    </div>

    <div class="py-5 bg-light">
        <div class="container">
            <?php foreach ($categories as $category) {
                $movies = getMovies($category['id']);

                if (empty($movies)) { continue; }

                ?>
                <h2 class="display-4"><?= $category['name']; ?></h2>
                <div class="row">
                    <?php foreach ($movies as $movie) { ?>
                        <div class="col-md-3">
                            <div class="card mb-4 shadow-sm">
                                <a href="movie_single.php?id=<?= $movie['id']; ?>"><img class="card-img-top" src="assets/img/<?= $movie['cover']; ?>" alt="<?= $movie['title']; ?>"></a>
                                <?php if ($user = isLogged()) { ?>
                                    <div class="card-body">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Modifier</button>
                                            <button type="button" class="btn btn-sm btn-outline-danger">Supprimer</button>
                                        </div>
                                    </div>
                                <?php } ?>
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
