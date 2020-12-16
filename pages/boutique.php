


<div style="display: flex; align-items: center; flex-direction: column; text-align: center">
<?php

$a01 = [
    'idimage' => '1',
    'id' => '001',
    'Titre' => 'Bouteille',
    'Prix' => '125 $',
    'quantité' => '1',
    'description' => "bouteille eau de pluie issu du Soudan. Elle est donc assez
rare vu qu'il pleut pas vraiment la-bas",
];
$a02 = [
    'idimage' => '2',
    'id' => '002',
    'Titre' => 'Ballon',
    'Prix' => '128 $',
    'quantité' => '1',
    'description' => "ballon voler...emprunter lors du match Bayern-PSG. Tres bonne qualité,
Neymar et Mbappé ont tiré dedans pllus de 3 fois.",
];
$a03 = [
    'idimage' => '3',
    'id' => '003',
    'Titre' => 'Processeur',
    'Prix' => '10 $',
    'quantité' => '1',
    'description' => "Processeur devenu inutile mais besoin d'argent donc prix
non négociable",
];
$a04 = [
    'idimage' => '4',
    'id' => '004',
    'Titre' => 'Formation PHP',
    'Prix' => '499.99 $',
    'quantité' => '1',
    'description' => "Vous en avez marre de tomber sur des formations 
inutiles qui vous volent votre argent ? Des profs qui se sont foutus de vous ?.
Optez pour notre formation complete a bas prix qui vous permettra de rivaliser avec les 
meilleurs ingenieurs !",
];
$a05 = [
    'idimage' => '5',
    'id' => '005',
    'Titre' => 'Tournevis Torx',
    'Prix' => '9.99$',
    'quantité' => '1',
    'description' => "Tournevis Torx qui peut servir mais on sait pas vraiment
a quoi. Nettoyer sa ps4 car ils utilisent ces vis la
mais sinon toujours utile de l'avoir au cas ou",
];
$a06 = [
    'idimage' => '6',
    'id' => '006',
    'Titre' => 'Golf 4',
    'Prix' => '4800 $',
    'quantité' => '1',
    'description' => "Golf 4 tdi, 4 roues motrices, toit décapotable, 2 rétros 
fonctionnels, climatisation en option, machine a laver incluse.
",
];

$articles = [
    $a01,
    $a02,
    $a03,
    $a04,
    $a05,
    $a06,
];

foreach ($articles as $article) {
    echo '<div style="margin-bottom: 100px; width: 50%; border: solid black 2px">';
    echo '<h1>' . ($article['Titre']) . '</h1>';
    echo '<img src="./images/' . ($article['idimage']) . '.jpg">';
    echo '<p>' . ($article['id']) . '</p>';
    echo '<p>' . ($article['Prix']) . '</p>';
    echo '<p>' . ($article['description']) . '</p>';
    echo '</div>';
}
?>
</div>
