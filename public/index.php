<?php

$url = parse_url($_SERVER["REQUEST_URI"]);

$path = isset($url["path"]) ? $url["path"] : "/";

switch ($path) {
    case '/':
        echo "Accueil";
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
