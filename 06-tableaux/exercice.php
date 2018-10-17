<?php

$eleves = [
    0 => [
        'nom' => 'Matthieu',
        'notes' => [10, 8, 16, 20, 17, 16, 15, 2]
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
        'notes' => [1, 14, 6, 2, 1, 8, 9]
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















