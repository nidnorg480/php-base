<?php
$currentPageTitle = 'Nos pizzas';
// Le fichier header.php est inclus sur la page
require_once(__DIR__.'/partials/header.php');

// Récupérer la liste des pizzas
$query = $db->query('SELECT * FROM pizza');
$pizzas = $query->fetchAll();
?>

    <main class="container">
        <h1 class="page-title">Liste des pizzas</h1>

        <div class="row">
	    	<?php
	    	// On affiche les pizzas
	    	foreach ($pizzas as $pizza) { ?>

	    		<div class="col-md-3">
	    			<div class="card mb-4">
	    				<div class="card-img-top-container">
	    					<img class="card-img-top card-img-top-zoom-effect" src="assets/img/4-fromages.jpg" alt="<?php echo $pizza['name']; ?>">
	    					<?php echo $pizza['price']; ?>
	    				</div>
	    				
		    			<div class="card-body">
		    				<h5 class="card-title"><?php echo $pizza['name']; ?></h5>
		    				<a href="#" class="btn btn-danger">Commandez</a>
		    			</div>
		    		</div>
	    		</div>

	    	<?php } ?>
    	</div>
    </main>

<?php
// Le fichier footer.php est inclus sur la page
require_once(__DIR__.'/partials/footer.php'); ?>
