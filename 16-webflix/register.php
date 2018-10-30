<?php
// Le fichier header.php est inclus sur la page
require_once(__DIR__.'/partials/header.php'); ?>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">S'inscrire</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="offset-3 col-md-6">
                <form method="POST">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input class="form-control" type="password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="cf-password">Confirmer le mot de passe</label>
                        <input class="form-control" type="password" name="cf-password">
                    </div>
                    <button class="btn btn-block btn-primary">S'inscrire</button>
                </form>
            </div>
        </div>
    </div>

<?php
// Le fichier footer.php est inclus sur la page
require_once(__DIR__.'/partials/footer.php'); ?>
