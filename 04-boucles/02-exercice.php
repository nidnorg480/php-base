<?php

/*
1. Créer une boucle qui affiche 10 étoiles (*)
2. Imbriquer la boucle dans une autre boucle afin d'afficher 10 lignes de 10 étoiles
3. Nous obtenons un carré. Trouver un moyen de modifier le code pour obtenir
un triangle rectangle.
*/

for ($i = 10; $i > 0; $i--) {
    for ($j = 10; $j > 0; $j--) {
        echo '⭐';
    }

    echo '<br />';
}

echo '-------------- <br /><br />';

/*
☆☆☆☆☆★☆☆☆☆☆
☆☆☆☆★★★☆☆☆☆
☆☆☆★★★★★☆☆☆
☆☆★★★★★★★☆☆
☆★★★★★★★★★☆
★★★★★★★★★★★
*/
$fullStar = 1; // Nombre d'étoiles pleines
$indexStar = 5; // Position

for ($x = 0; $x < 6; $x++) {
    for ($y = 0; $y < 11; $y++) {
        if ($y == $indexStar) {
            for ($z = 0; $z < $fullStar; $z++) {
                echo '★';
            }
            $y += $fullStar - 1;
        } else {
            echo '☆';
        }
    }
    $indexStar--;
    $fullStar += 2;
    echo '<br />';
}
