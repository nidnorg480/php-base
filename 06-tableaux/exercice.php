<?php

$eleves = [
    0 => [
        'nom' => 'Toto',
        'notes' => [10, 8, 6, 2, 1, 1, 15, 2]
    ],
    1 => [
        'nom' => 'Thomas',
        'notes' => [4, 18, 12, 15, 13, 7]
    ],
    2 => [
        'nom' => 'Jean',
        'notes' => [17, 14, 6, 2, 16, 18, 9]
    ],
    3 => [
        'nom' => 'Enzo',
        'notes' => [1, 14, 19, 2, 1, 8, 19]
    ]
];

echo $eleves[2]['nom']; // Affiche "Jean"
echo $eleves[2]['notes'][2]; // Récupère la 3ème note de Jean (6)
echo '<br /><br />';

/* 1/ Afficher la liste de tous les éléves avec leurs notes. */
foreach ($eleves as $eleve) {
    echo $eleve['nom'] . ' a eu ';

    // Nombre de notes
    $notesCount = count($eleve['notes']);
    // Parcourir toutes les notes de l'éléve
    foreach ($eleve['notes'] as $key => $note) {
        echo $note;
        // Si la note est la dernière
        if ($key === $notesCount - 1) {
            echo '.';
            // Si la note est l'avant dernière
        } else if ($key === $notesCount - 2) {
            echo ' et ';
            // Sinon
        } else {
            echo ', ';
        }
    }

    echo '<br />';
}

/* 2/ Calculer la moyenne de Jean. On part de $eleves[2]['notes']
La fonction count permet de compter les éléments d'un tableau */
$jeanNotes = $eleves[2]['notes']; // [5, 8, 9, 10]

$sum = 0;
// Nombre de notes
$notesCount = count($jeanNotes);

// Faire la somme des notes
foreach ($jeanNotes as $note) {
    $sum += $note;
}

// Moyenne
echo round($sum / $notesCount, 2) . '<br />'; // Arrondi à 2 décimales
echo array_sum($jeanNotes) / $notesCount . '<br />';


/* 3/ Combien d'élèves ont la moyenne ?
Exemple :
Matthieu a la moyenne
Jean n'a pas la moyenne
Thomas a la moyenne
Nombre d'éléves avec la moyenne : 2 */
$countAverage = 0;
foreach ($eleves as $eleve) {
    $average = array_sum($eleve['notes']) / count($eleve['notes']);
    echo $eleve['nom'];

    if ($average >= 10) {
        echo ' a la moyenne <br />';
        // Permet de compter le nombre d'élèves qui ont la moyenne
        $countAverage++;
    } else {
        echo ' n\'a pas la moyenne <br />';
    }
}
echo 'Nombre d\'éléves avec la moyenne : '.$countAverage;

/* 4/ Quel(s) éléve(s) a(ont) la meilleure note ?
Exemple: Thomas a la meilleure note : 19 */

$bestNote = 0;

foreach ($eleves as $eleve) {
    foreach ($eleve['notes'] as $note) {
        if ($note > $bestNote) {
            $bestNote = $note;
        }
    }
}

var_dump($bestNote);
foreach ($eleves as $eleve) {
    foreach ($eleve['notes'] as $note) {
        if ($note === $bestNote) {
            echo $eleve['nom'] . ' a la meilleure note : ' . $bestNote . '<br />';
            break; // Arrête les itérations sur la boucle
        }
    }
}

/* 5/ Qui a eu au moins un 20 ?
Exemple: Personne n'a eu 20
         Quelqu'un a eu 20 */

/* 6/ BONUS Tri à bulles
$notes = [4, 25, 1, 36, 24]; => [1, 4, 24, 25, 36];
*/

















