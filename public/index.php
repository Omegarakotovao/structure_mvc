<?php
include '../vendor/autoload.php';

//récupération de l'URL (composante)
$url = parse_url($_SERVER["REQUEST_URI"]);

//extraction du path
$path = isset($url["path"]) ? $url["path"] : "/";

//importer les controller
use App\Controller\HomeController;

//instancier les controller
$homeController = new HomeController();
//test des valeurs du path

switch ($path) {
    case '/':
        $homeController->test();
        break;
    case '/login':
        echo  "Se connecter";
        break;
    case '/register':
        echo  "S'inscire";
        break;
    case '/profil':
        echo "Profil user";
        break;
    default:
        echo "Erreur 404";
        break;
}
