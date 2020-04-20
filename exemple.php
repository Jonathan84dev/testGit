<?php

// Faire une liste ul>li avec les éléments suivants :
$saisons1 = ["été", "automne", "printemps", "hiver"];

foreach ($saisons1 as $valeur)
{echo '<ul><li>' . $valeur . '</li></ul>';
}

/* Faire une liste ul>li avec les éléments suivants (afficher "clé: valeur")
$aubergines = 
    "quantité" => 12,
    "prix" => 5 */

    $aubergines = 
    ['quantité' => 12,
    'prix' => 5,
    ];

    foreach ($aubergines as $item => $values)
    {echo '<ul><li>'. $item . ': ' . $values . '</li></ul>';
    }

    /* -Faire une liste ul>li qui affiche aubergines et tomates
    - Faire un autre ul>li à l'intérieur du premier qui affiche quantité et prix pour  aubergines et tomates
    */

    $ete = [
    "aubergines" => [
        "quantité" => 12,
        "prix" => 5
    ],
    "tomates" => [
        "quantité" => 10,
        "prix" => 6
    ]
];

foreach ($ete as $legumes){
foreach ($legumes as $item);{
echo $legumes;

}
}
echo 'testgit2';
echo 'testgitblabla';
echo 'test3';
?>