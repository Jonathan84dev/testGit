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

echo "<ul>";

foreach ($ete as $legume => $caracteristiques) {

echo "<li>" . $legume . "</li>";
echo "<ul>";
foreach ($caracteristiques as $carac => $values)
{
    echo "<li>" . $carac . ":" . $values . "</li>";
}
echo "</ul>";
}
echo "</ul>";

// Afficher la liste des saisons, puis des légumes de chaque saison, puis des caractéristiques de chaque légume
// dans plusieurs ul>li successifs

$saisons = [
    "été" => [
        "aubergines" => [
            "quantité" => 12,
            "prix" => 5
        ],
        "tomates" => [
            "quantité" => 10,
            "prix" => 6
        ]
    ],
    "automne" => [
        "pomems de terre" => [
            "quantité" => 12,
            "prix" => 5
        ],
        "carottes" => [
            "quantité" => 10,
            "prix" => 6
        ]
    ],
    "hiver" => [
        "avocats" => [
            "quantité" => 12,
            "prix" => 5
        ],
        "pêches" => [
            "quantité" => 10,
            "prix" => 6
        ]
    ]
];

echo "<ul>";
foreach ($saisons as $saison => $legumes) {
echo "<li>". $saison . "</li>";

echo "<ul>";
foreach ($legumes as $legume => $item) {
echo "<li>" . $legume . "</li>";

echo "<ul>";
foreach ($item as $carac => $values){
echo "<li>" . $carac . ":" .$values. "</li>";
}
echo "</ul>";
}
echo "</ul>";
}
echo "</ul>";
?>