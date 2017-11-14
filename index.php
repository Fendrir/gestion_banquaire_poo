<?php

// mise en place du layout

if(htmlspecialchars(isset($_GET['p']), ENT_QUOTES)){
    $p = htmlspecialchars($_GET['p'], ENT_QUOTES);
}else{
    $p = 'home';
}

// mise en place des pages de layout


ob_start();
if($p === 'home'){
    include('pages/Home.php');
}


include('assets/nav_bar/nav_bar.php');
include('default/Default.php');


require_once('class/Personne.php');
require_once('class/Conseiller.php');
require_once('class/Client.php');
require_once('class/PersonneManager.php');
$persManager = PersonneManager::getInstance();
$persManager = PersonneManager::getInstance();
new PersonneManager();
$conseiller = $persManager->addConseiller("Pierre", "de Soos");
$persManager->addClient("Louis", "Fabre", $conseiller );
var_dump($persManager);

// il y a une erreur c'est normal sur personneManager, c est pour le protéger d'un new personneManager et d'un clonage, il est blindé.

// voici le message d'erreur

// Fatal error: Uncaught Error: Call to private PersonneManager::__construct() from invalid context in /media/www-dev/private/POO/gestion_banquaire_poo/index.php:30 Stack trace: #0 {main} thrown in /media/www-dev/private/POO/gestion_banquaire_poo/index.php on line 30