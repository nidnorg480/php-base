<?php

// On crée une connexion à la BDD
// $db = new PDO('mysql:host=localhost;dbname=pizzastore', 'root', '');
// Le try catch permet de faire quelque chose de particulier s'il y a une erreur
try {
	$db = new PDO('mysql:host=sql.docker;port=3366;dbname=pizzastore;charset=utf8', 'root', 'root', [
		PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, // Active les erreurs SQL,
		// On récupère tous les résultats en tableau associatif
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	]);
} catch(Exception $e) {
	echo $e->getMessage();
	// Redirection en PHP vers Google avec le message d'erreur concerné
	// header('Location: https://www.google.fr/search?q='.$e->getMessage());
	echo '<img src="assets/img/confused-travolta.gif">';
	die('Stop'); // Arrête le script si la base de données n'est pas dispo
}
