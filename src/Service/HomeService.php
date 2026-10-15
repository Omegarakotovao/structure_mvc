<?php

namespace App\Service;

class HomeService
{
    public function traitement(array $post): string
    {
        //tester si les champs remplis
        if (!empty($post["texte1"]) && !empty($post["texte2"])) {
            return "Vous avez saisi : " . $post["texte1"] . " et " . $post["texte2"];
        }
        return "Veuillez remplir le formulaire";
    }
}
